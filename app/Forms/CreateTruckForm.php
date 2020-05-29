<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Rules\TwoWords;

class CreateTruckForm extends Form
{
    public function buildForm()
    {
        $currentYear = date('Y');
        $this
            ->add('brand', 'select', [
                'choices' => ['1' => 'Volvo', '2' => 'VAZ', '3' => 'Mercedes', '4' => 'GAZ'],
                'empty_value' => 'Select brand',
                'label' => 'Brand'.'*',
                'rules' => 'required',
            ])
            ->add('year_made', 'number', [
                'label' => 'Year made'.'*',
                'rules' => "required|numeric|min:1900|max:$currentYear",
            ])
            ->add('owner', 'text', [
                'label' => 'Owner full name'.'*',
                'rules' => ['required', new TwoWords]
            ])
            ->add('owners_count', 'number',[
                'rules' => 'numeric|min:0'
            ])
            ->add('comment', 'textarea')
            ->add('submit', 'submit', [
                'label' => 'Save',
                'attr' => ['class' => 'btn btn-primary']
            ]);
    }
}
