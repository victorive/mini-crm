@extends('layouts.app')
@section('content')
    {{ $company->id }}
    <img width="100" height="100" src="{{$company->logo ? asset('storage/'. $company->logo) : asset('images/acumen-logo.jpeg') }}">
    {{ $company->name }}
    {{ $company->email }}
    {{ $company->website }}
    
@endsection