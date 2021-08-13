@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Registered Users</h4>
            <hr>
        </div>
        <div class="cardbody">
            <table class="table table-bodered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
            
                <tbody>
                    @foreach($users as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->category->email }}</td>
                            <td>
                                <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-pimary btn-sm">Edit</a>
                                <a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection