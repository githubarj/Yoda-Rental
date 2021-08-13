@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>User Details
                        <a href="{{ url('users') }}" class="btn btn-primary btn-sm float-right">Back</a>
                    </h4>
                    <hr>
                </div>
                <div class="cardbody">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="">Role</label>
                            <div class="p2 border">{{ $users->role_as == '0' ? 'User':'Admin' }}</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="">Full Name</label>
                            <div class="p2 border">{{ $users->name }}</div>
                        </div>
                        <div class="col-md-4 mb-3 ">
                            <label for="">Email</label>
                            <div class="p2 border">{{ $users->email }}</div>
                        </div>
                        <div class="col-md-4 mb-3 ">
                        <td>
                                <a href="{{ url('edit-product/'.$users->id) }}" class="btn btn-pimary btn-sm">Edit</a>
                                <a href="{{ url('delete-product/'.$users->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection