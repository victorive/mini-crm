@extends('layouts.app')
@section('content')

{{ session('message') }}
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Employees</h5>
     <a href="/employees/create" class="btn btn-success" style="margin-bottom: 10px">Create new employee</a>

    @unless (count($employees) == 0)

      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Company</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <th scope="row">{{ $employee->id }}</th>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->company_id }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
                <td>
                    <a href="/employees/{{ $employee->id }}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Show user"><i class="fa fa-file"></i></a>
                    <a href="/employees/edit/{{ $employee->id }}" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit user"><i class="fas fa-edit"></i></a>
                    <form method="POST" action="/employees/{{ $employee->id }}" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete user"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

      {{ $employees->links() }}
      
    @else
        <p style="color: red">No employees found!</p>
    @endunless
    </div>
</div>
@endsection