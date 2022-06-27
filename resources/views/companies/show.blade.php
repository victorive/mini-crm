@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

      <img width="100" height="100" class="rounded-circle" src="{{$company->logo ? asset('storage/'. $company->logo) : asset('images/acumen-logo.jpeg') }}" alt="Company profile">
      <h5><strong>Company: </strong> {{ $company->name }}</h5>
      <h5><strong>Email: </strong> {{ $company->email }}</h5>
      <h5><strong>Website: </strong> {{ $company->website }}</h5>
      
    </div>
</div>
@endsection