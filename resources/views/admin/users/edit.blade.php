@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit/Update User
            <a href="{{ url('view-user/'.$users->id) }}" class="btn btn-primary btn-sm float-right">Back</a>       
            </h4>
            <hr>
        </div>
        <div class="cardbody">
            <form action="{{ url('update-user/'.$users->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" value="{{ $users->name }}" class="form-control" name='name'>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Email</label>
                        <input type="text" value="{{ $users->email}}" class="form-control" name='email'>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection