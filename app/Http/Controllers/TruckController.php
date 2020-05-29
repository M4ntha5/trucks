<?php

namespace App\Http\Controllers;

use App\Forms\CreateTruckForm;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Models\Truck;
use App\Rules\TwoWords;
use App\Repositories\TruckRepository;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    protected $model;

    public function __construct(Truck $truck)
    {
        $this->model = new TruckRepository($truck);
    }

    public function index()
    {
        if(request('q') != null)
            $trucks = $this->model->getTrucksBySearch(request('q'));
        else
            $trucks = $this->model->getAllTrucks(request('filter'), request('sort'));

        return view('trucks.index', compact('trucks', $trucks));
    }

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(CreateTruckForm::class, [
            'method' => 'POST',
            'url' => route('truck.store')
        ]);
        return view('trucks.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(CreateTruckForm::class);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $input = $form->getFieldValues();
        $input['comment'] = $input['comment'] == null ? '' : $input['comment'];

        $this->model->createTruck($input);

        return redirect('/');
    }
}
