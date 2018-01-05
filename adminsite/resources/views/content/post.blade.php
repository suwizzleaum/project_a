@extends('layouts.dashboard')

@section('content')

<div class="">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">New Post</div>
                <div class="panel-body">
                <form>
                    <div class="row">
                        <div class="col-sm-8">
                        <div class="form-group">
                        <label for="ib-title">Title</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                    </div>
                    <div class="form-group">
                    <label for="ib-introduction">Introduction</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Example input" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="ib-content">Content</label>
                    <textarea class="form-control" id="exampleFormControlTextarea2" placeholder="Example input" rows="20"></textarea>
                    </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="side-wiget-wrap">
                                <div class="form-group">
                                    <div class="row">
                                    <label for="ib-cat">Category</label>
                                    <select class="form-control" id="ss">
                                            <option>1</option>
                                    </select>
                                    </div>
                            </div>
                            <div class="form-group">
                                    <div class="row">
                                        <label for="ib-publish">Publish</label>
                                            <div class="sw-slide">
                                            <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                            </div>
                                        </label>
                                    </div>
                            </div>

                            <div class="form-group">
                                    <div class="row">
                                        <label for="ib-publish">Sponser</label>
                                            <div class="sw-slide">
                                            <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                            </div>
                                        </label>
                                    </div>
                            </div>
                            

                            <div class="form-group">
                                    <div class="row">
                                    <label for="ib-tags">Tags</label>
                                    
                                    <textarea class="form-control" id="exampleFormControlTextarea2" placeholder="Example:#tech,#food,#brand" rows="5"></textarea>
                                    </div>
                            </div>

                            <div class="form-group">
                                    <div class="row">
                                       <div class="btn-panel">
                                       <button type="button" class="btn btn-success">Save</button>
                                       <button type="button" class="btn btn-danger">Clear</button>
                                       </div>
                                    </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
textarea {
   resize: none;
}

.side-wiget-wrap{
    padding-right:20px;
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
