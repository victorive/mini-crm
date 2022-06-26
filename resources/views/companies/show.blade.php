@extends('layouts.app')
@section('content')
    {{ $company->id }}
    {{ $company->logo }}
    {{ $company->name }}
    {{ $company->email }}
    {{ $company->website }}
    
@endsection