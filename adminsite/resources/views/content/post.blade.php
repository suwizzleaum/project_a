@extends('layouts.dashboard')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">New Post</div>
                    <div class="panel-body">
                        <div class="panel-body-wrap">
                            <form class="form-horizontal" method="POST" action="post/add">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-7">
                                            <div class="left-panel-wrap">
                                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                                    <label for="ib-title">Title</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Example input" require>
                                                    @if ($errors->has('title'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('title') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group{{ $errors->has('introduce') ? ' has-error' : '' }}">
                                                    <label for="ib-introduction">Introduction</label>
                                                    <textarea class="form-control" name="introduce" placeholder="Example input" rows="3"></textarea>
                                                    @if ($errors->has('introduce'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('introduce') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                                                    <label for="ib-content">Content</label>
                                                    <textarea class="form-control" name="content" placeholder="Example input" rows="10"></textarea>
                                                    @if ($errors->has('content'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('content') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="side-panel-wrap">
                                            <div class="form-group">
                                                <label for="ib-cat">Category</label>
                                                <select class="form-control" name="categories">
                                                    @foreach($category_data as $c_data)
                                                        <option value="{{$c_data->id}}">{{$c_data->category_name}}</option>
                                                    @endforeach 
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="ib-publish">Publish</label>
                                                    <div class="sw-slide">
                                                    <label class="switch">
                                                    <input type="checkbox" name="publish" value="1">
                                                    <span class="slider"></span>
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <label for="ib-publish">Sponser</label>
                                                    <div class="sw-slide">
                                                    <label class="switch">
                                                    <input type="checkbox" name="sponser" value="1">
                                                    <span class="slider"></span>
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <label for="ib-tags">Tags</label>
                                                <textarea class="form-control" name="tags" placeholder="Example:#tech,#food,#brand" rows="5"></textarea>
                                            </div>

                                            <div class="form-group">            
                                                    <div class="btn-panel">
                                                    <button type="submit" name="submit" value="submit" class="btn btn-success">Save</button>
                                                    <button type="button" class="btn btn-danger">Clear</button>
                                                    </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
@endsection

<style>
textarea {
   resize: none;
}

.left-panel-wrap{
    padding-left:10px;
}

.side-panel-wrap{
    padding-left:50px;
}
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
</style>
