@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

      <h5><strong>Firstname: </strong> {{ $employee->first_name }}</h5>
      <h5><strong>Lastname: </strong> {{ $employee->last_name }}</h5>
      <h5><strong>Company: </strong> {{ $employee->company_id }}</h5>
      <h5><strong>Email: </strong>{{ $employee->email }}</h5>
      <h5><strong>Phone: </strong>{{ $employee->phone }}</h5>
      
    </div>
</div>
    
@endsection