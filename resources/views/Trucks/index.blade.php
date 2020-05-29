@extends('layouts.app')

@section('content')
     <div class="container pt-3">
          <h1 class="pt-3" style="text-align:center;">Trucks list</h1>
          <a class="btn btn-secondary mb-5" href="/trucks/create">Add new</a>
          
          <div class="row justify-content-center">
               <table class="table">
                    <thead>
                         <tr>
                              <th scope="col">#</th>
                              <th scope="col">Brand</th>
                              <th scope="col">Year made</th>
                              <th scope="col">Owner</th>
                              <th scope="col">Owners count</th>
                              <th scope="col">Comment</th>
                         </tr>
                    </thead>
                    @foreach($trucks as $truck)
                         <tbody>
                              <tr>
                                   <td>{{$truck->id}}</td>
                                   <td>{{$truck->brand}}</td>
                                   <td>{{$truck->year_made}}</td>
                                   <td>{{$truck->owner}}</td>
                                   <td>{{$truck->owners_count}}</td>
                                   <td>{{$truck->comment}}</td>
                              </tr>
                         </tbody>
                    @endforeach
               </table>
               {{$trucks->links()}}
          </div>       
     </div>
@endsection