@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Create new employee</h5>

      <form method="POST" action="/employees" class="row g-3">
          @csrf
        <div class="col-12">
          <label for="first_name" class="form-label">Firstname</label>
          <input type="text" name="first_name" class="form-control">
          @error('first_name')
            <p style="color: red">{{ $message }}</p>
          @enderror
        </div>

        <div class="col-12">
          <label for="last_name" class="form-label">Lastname</label>
          <input type="text" name="last_name" class="form-control">
          @error('last_name')
            <p style="color: red">{{ $message }}</p>
          @enderror
        </div>

        <div class="col-12">
          <label for="company" class="form-label">Employee Company</label>

          <select name="company" class="form-select">
          @foreach ($companies as $key => $company)
            <option value="{{ $company->id }}">{{ $company->name }}</option>
          @endforeach
          </select>

          @error('company')
            <p style="color: red">{{ $message }}</p>
          @enderror
        </div>

        <div class="col-12">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control">
          @error('email')
            <p style="color: red">{{ $message }}</p>
          @enderror
        </div>

        <div class="col-12">
          <label for="phone" class="form-label">Phone</label>
          <input type="tel" name="phone" class="form-control">
          @error('phone')
            <p style="color: red">{{ $message }}</p>
          @enderror
        </div>

        <div class="col-12">
          <label for="website" class="form-label">Website</label>
          <input type="url" name="website" class="form-control">
          @error('website')
            <p style="color: red">{{ $message }}</p>
          @enderror
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Create new employee</button>
        </div>
      </form>
    </div>
</div>
@endsection