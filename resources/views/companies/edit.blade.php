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
          @error('name')
            <p style="color: red">{{ $message }}</p>
          @enderror
        </div>

        <div class="col-12">
            <img width="100" height="100" src="{{$company->logo ? asset('storage/' . $company->logo) : asset('images/acumen-logo.jpeg')}}">
        </div>

        <div class="col-12">
            <label for="logo" class="form-label">Company logo</label>
            <input type="file" name="logo" class="form-control">
            @error('logo')
            <p style="color: red">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-12">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" value="{{ $company->email }}">
          @error('email')
            <p style="color: red">{{ $message }}</p>
          @enderror
        </div>

        <div class="col-12">
          <label for="website" class="form-label">Website</label>
          <input type="url" name="website" class="form-control" value="{{ $company->website }}">
          @error('website')
            <p style="color: red">{{ $message }}</p>
          @enderror
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Update Company</button>
        </div>
      </form>
    </div>
</div>
@endsection