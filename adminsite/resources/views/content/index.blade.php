@extends('layouts.dashboard')

@section('content')

<div class="">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">Content</div>

                <div class="panel-body">
                @if (session('noti-status-success'))
                    <div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Success!</strong> {{ session('noti-status-success') }}
                    </div>
                @endif
                @if (session('noti-status-fail'))
                    <div class=" alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Danger!</strong> {{ session('noti-status-fail') }}
                    </div>
                @endif
                <div class="btn-add-wrap">
                <a class="btn btn-success" href="{{URL::to('content/post')}}" role="button">Add Post</a>
                </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>Title</th>
                            <th>Categories</th>
                            <th>Publish</th>
                            <th>Sponser</th>
                            <th>Author</th>
                            <th>Tags</th>
                            <th>Datetime</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                                <tr>
                                    <td class="td-width-l">{{$data->title}}</td>
                                    <td class="td-width-sm">{{$data->categories}}</td>
                                    <td class="td-width-sm">{{$data->publish}}</td>
                                    <td class="td-width-sm">{{$data->sponser}}</td>
                                    <td class="td-width-sm"></td>
                                    <td class="td-width-sm"></td>
                                    <td class="td-width-m">{{$data->created_at}}</td>
                                    <td class="td-width-sm">
                                    <a class="btn btn-primary btn-sm" href="categories/delete/{{$data->id}}" onclick="return confirm('Are you sure to delete {{$data->category_name}} ?')" role="button">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="categories/delete/{{$data->id}}" onclick="return confirm('Are you sure to delete {{$data->category_name}} ?')" role="button">X</a> 
                                    </td>
                                </tr>
                            @endforeach 

                    </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
 table th, table td { overflow: hidden; }

.btn-add-wrap{
    padding-bottom:10px;
}
.td-width-sm{
    width:100px;
}
.td-width-m{
    width:150px;
}
.td-width-l{
    width:450px;
}

</style>