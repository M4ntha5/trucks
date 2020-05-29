@extends('layouts.app')

@section('content')
<form action="/trucks">
  <div class="row">
    <div class="col-md-4">
      <input class="form-control form-control-sm" type="search" name="q" value="{{ $q }}">
    </div>

    <div class="col-md-2 col-3">
      <select name="sortBy" class="form-control form-control-sm" value="{{ $sortBy }}">
        @foreach(['brand', 'year_made', 'owner', 'owners_count'] as $col)
          <option @if($col == $sortBy) selected @endif value="{{ $col }}">{{ ucfirst($col) }}</option>
        @endforeach
      </select>
    </div>

    <div class="col-md-2 col-3">
      <select name="orderBy" class="form-control form-control-sm" value="{{ $orderBy }}">
        @foreach(['asc', 'desc'] as $order)
          <option @if($order == $orderBy) selected @endif value="{{ $order }}">{{ ucfirst($order) }}</option>
        @endforeach
      </select>
    </div>

    <div class="col-md-2 col-3">
      <button type="submit" class="w-100 btn btn-sm bg-blue">Filter</button>
    </div>
  </div>
</form>
@endsection