@extends('layouts.app')
@section('content')

{{ session('message') }}


<div class="card">
    <div class="card-body">
      <h5 class="card-title">Edit employee</h5>

      <form method="POST" action="/employees/{{$employee->id}}" class="row g-3">
          @csrf
          @method('PUT')
        <div class="col-12">
          <label for="first_name" class="form-label">Firstname</label>
          <input type="text" name="first_name" class="form-control" value="{{ $employee->first_name }}">
          @error('firstname')
            <p style="color: red">{{ $message }}</p>
          @enderror
        </div>

        <div class="col-12">
          <label for="last_name" class="form-label">Lastname</label>
          <input type="text" name="last_name" class="form-control" value="{{ $employee->last_name }}">
          @error('last_name')
            <p style="color: red">{{ $message }}</p>
          @enderror
        </div>

        <div class="col-12">
          <label for="company_id" class="form-label">Employee Company</label>
          <select name="company_id" class="form-select">
            @foreach ($companies as $company)
            <option value="{{ $company->id }}">{{ $company->name }}</option>
            @endforeach
          </select>

          @error('company')
            <p style="color: red">{{ $message }}</p>
          @enderror
        </div>

        <div class="col-12">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" value="{{ $employee->email }}">
          @error('email')
            <p style="color: red">{{ $message }}</p>
          @enderror
        </div>

        <div class="col-12">
          <label for="phone" class="form-label">Phone</label>
          <input type="tel" name="phone" class="form-control" value="{{ $employee->phone }}">
          @error('phone')
            <p style="color: red">{{ $message }}</p>
          @enderror
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Update Employee</button>
        </div>
      </form>
    </div>
</div>
@endsection