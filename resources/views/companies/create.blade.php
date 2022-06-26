@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Create new company</h5>

      <form method="POST" action="/companies" enctype="multipart/form-data" class="row g-3">
          @csrf
        <div class="col-12">
          <label for="name" class="form-label">Company name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="col-12">
            <label for="logo" class="form-label">Company logo</label>
            <input type="file" name="logo" class="form-control">
        </div>
        <div class="col-12">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="col-12">
          <label for="website" class="form-label">Website</label>
          <input type="url" name="website" class="form-control">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Create new company</button>
        </div>
      </form>
    </div>
</div>
@endsection