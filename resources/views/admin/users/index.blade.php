@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td> {{ $user->name }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray())   }}</td>
                            <td>
                                @can('edit-users')
                            <a href="{{ route('admin.users.edit', $user->id) }}"> <button type="button" class="btn btn-primary">Edit</button></a>
                           @endcan
                          <form action="{{ route('admin.users.destroy', $user) }}" method="post">
                            @csrf
                               {{method_field('DELETE')}}

                               <a href="{{ route('admin.users.destroy', $user->id) }}"> <button type="submit" class="btn btn-warning">Delete</button></a>
                           </form>
                            </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
