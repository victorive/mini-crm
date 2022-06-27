@extends('layouts.app')
@section('content')
    {{ $employee->id }}
    {{ $employee->first_name }}
    {{ $employee->last_name }}
    {{ $employee->company }}
    {{ $employee->email }}
    {{ $employee->phone }}
    
@endsection