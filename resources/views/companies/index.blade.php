@extends('layouts.app')
@section('content')

{{ session('message') }}

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Companies</h5>
      <a href="/companies/create" class="btn btn-success" style="margin-bottom: 10px">Create new company</a>

      @unless(count($companies) == 0)

      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Logo</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Website</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
            <tr>
                <th scope="row">{{ $company->id }}</th>
                <td><img width="100" height="100" src="{{ asset('storage/' . $company->logo)}}"></td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->website }}</td>
                <td>
                    <a href="/companies/{{ $company->id }}" class="btn btn-primary"><i class="fas fa-file"></i></a>
                    <a href="/companies/edit/{{ $company->id }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                    <form method="POST" action="/companies/{{ $company->id }}">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>     
            @endforeach
        </tbody>
      </table>

      {{ $companies->links() }}

    @else
      <h5 style="color: red">No companies found!</h5>
    @endunless()
      
    </div>
</div>
@endsection