@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Vehicle Page
            <a href="{{ url('add-products') }}" class="btn btn-primary btn-sm float-right">Add a New Vehicle</a>
            </h4>
            <hr>
        </div>
        <div class="cardbody">
            <table class="table table-bodered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Number Plate</th>
                        <th>Car Purchase Price</th>
                        <th>Price per day</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
            
                <tbody>
                    @foreach($products as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->numberplate }}</td>
                            <td>{{ $item->original_price }}</td>
                            <td>{{ $item->selling_price }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/products/'.$item->image) }}" class="cate-image" alt="Image here">   
                            </td>
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