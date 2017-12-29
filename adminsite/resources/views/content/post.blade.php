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
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
