@extends('layouts.app')
@section('content')

{{ session('message') }}

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Edit company</h5>

      <form method="POST" action="/companies/{{$company->id}}" enctype="multipart/form-data" class="row g-3">
          @csrf
          @method('PUT')
        <div class="col-12">
          <label for="name" class="form-label">Company name</label>
          <input type="text" name="name" class="form-control" value="{{ $company->name }}">
        </div>
        <div class="col-12">
            <img width="100" height="100" src="{{ asset('storage/' . $company->logo) }}">
          </div>
        <div class="col-12">
            <label for="logo" class="form-label">Company logo</label>
            <input type="file" name="logo" class="form-control">
        </div>
        <div class="col-12">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" value="{{ $company->email }}">
        </div>
        <div class="col-12">
          <label for="website" class="form-label">Website</label>
          <input type="url" name="website" class="form-control" value="{{ $company->website }}">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Update Company</button>
        </div>
      </form>
    </div>
</div>
@endsection