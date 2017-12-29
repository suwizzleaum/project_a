@extends('layouts.dashboard')

@section('content')

<div class="">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Users</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                           
                            <th>Username</th>
                            <th>Email</th>
                            <th>Create_at</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td> {{$user->name}} </td>
                                <td> {{$user->email}} </td>
                                <td> {{$user->created_at}} </td>
                                <td> </td>
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
