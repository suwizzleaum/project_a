@extends('layouts.dashboard')

@section('content')

<div class="">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">Category</div>
                <div class="panel-body">
                @if (session('status'))
                                        <div class="alert alert-success fade in">
                                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                                            <strong>Success!</strong> {{ session('status') }}
                                        </div>
                @endif
                    <div class="panel-body-wrap">
                        <div class="row">
                            <div class="col-sm-5">
                                <table class="table table-sm">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                            <th>Category name</th>
                                            <th>Create at</th>
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $data)
                                            <tr>
                                                <td> {{$data->id}} </td>
                                                <td> {{$data->category_name}} </td>
                                                <td> {{$data->created_at}} </td>
                                                <td> </td>
                                            </tr>
                                            @endforeach 
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-4">
                                <div class="add-body-wrap">
                                <form class="form-horizontal" method="POST" action="categories/add">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                                <label for="ib-cat-name">Category Name</label>
                                                <input type="text" class="form-control" name="category-name" placeholder="Example input">
                                        </div>

                                        <div class="form-group">
                                        <div class="btn-panel">
                                        <button type="submit" name="submit" value="submit" class="btn btn-success">Add</button>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection