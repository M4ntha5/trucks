@extends('layouts.app')

@section('content')
     <div class="container pt-3">
          <h1 class="pt-3 mb-3" style="text-align:center;">Trucks list</h1>
          <a class="btn btn-secondary mb-3" href="/trucks/create">Add new</a>
          <div class="row mb-5">          
               <div class="col-sm-6">
                    <div class="dropdown">
                         <button class="btn btn-secondary dropdown-toggle" 
                              type="button" data-toggle="dropdown" >
                              Sort by
                         </button>
                         <div class="dropdown-menu">
                              <a class="dropdown-item" href="/?filter=brand&sort=asc">Brands ascending</a>
                              <a class="dropdown-item" href="/?filter=year_made&sort=asc">Year made ascending</a>
                              <a class="dropdown-item" href="/?filter=year_made&sort=desc">Year made descending</a>
                              <a class="dropdown-item" href="/?filter=owner&sort=asc">Owner ascending</a>
                              <a class="dropdown-item" href="/?filter=owner&sort=desc">Owner descending</a>
                              <a class="dropdown-item" href="/?filter=owners_count&sort=asc">Owners count ascending</a>
                              <a class="dropdown-item" href="/?filter=owners_count&sort=desc">Owners count descending</a>
                         </div>
                    </div>
               </div>
               <div class="col-sm-6" >
                    <form class="form-inline ml-3" action="{{route('trucks.index')}}" style="float:right;">
                         <label>Filter by phrase:</label>
                         <input class="form-control ml-2" type="text" name="q" id="q" placeholder="Search">
                         <button class="btn btn-primary ml-1" type="submit">Search</button>
                    </form>
               </div>
          </div>
          
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
                                   <td>{{$truck->name}}</td>
                                   <td>{{$truck->year_made}}</td>
                                   <td>{{$truck->owner}}</td>
                                   <td>{{$truck->owners_count}}</td>
                                   <td>{{$truck->comment}}</td>
                              </tr>
                         </tbody>
                    @endforeach
               </table>
          </div>       
     </div>
@endsection