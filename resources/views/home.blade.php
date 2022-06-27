@extends('layouts.app')
@section('content')

  <div class="pagetitle">
      <h1>{{ __('Dashboard') }}</h1>{{  __('You are logged in!')  }}
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
  </div>

  <section class="section dashboard">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Companies</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fa fa-house"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ count($companies) }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Employees</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fa fa-people-group"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ count($employees) }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
@endsection