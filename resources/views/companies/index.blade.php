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
                <td><img width="100" height="100" src="{{$company->logo ? asset('storage/' . $company->logo) : asset('images/acumen-logo.jpeg')}}"></td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->website }}</td>
                <td>
                    <a href="/companies/{{ $company->id }}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Show company"><i class="fas fa-file"></i></a>
                    <a href="/companies/edit/{{ $company->id }}" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit company"><i class="fas fa-edit"></i></a>
                    <form method="POST" action="/companies/{{ $company->id }}" style="display: inline">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete company"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>     
            @endforeach
        </tbody>
      </table>

      {{ $companies->links() }}

    @else
      <p style="color: red">No companies found!</p>
    @endunless()
      
    </div>
</div>
@endsection