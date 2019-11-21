@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Quick Example</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{ url('/admin/addnewuserinfo') }}" enctype="multipart/form-data">

        {!! csrf_field() !!}
        <div class="box-body">
            <div class="form-group">
                <label for="firstname">Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname"
                    placeholder="Enter yout Firstname" value="{{ old('firstname') }}">

            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Lastname"
                    value="{{ old('lastname') }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address"
                    value="{{ old('address') }}">
            </div>
            <div class="form-group">
                <label for="dob">Date Of Birth</label>
                <input type="text" class="form-control" id="dob" name="dob" placeholder="DateOfBirth"
                    value="{{ old('dob') }}">
            </div>
            <div class="form-group">
                <label for="prfileimg">Image</label>
                <input type="file" class="form-control" onchange="loadPreview(this);" id="prfileimg" name="prfileimg">
            </div>
            <div class="form-group">
                <label for="preview_img">Image Preview</label>
                <img id="preview_img" src="{{asset('images/pic01.jpg')}}" class="" width="200" height="150" />
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session('success'))
        {{session('success')}}
        @endif
    </form>
</div>
@stop

<script>
    function loadPreview(input, id) {
          id = id || '#preview_img';
          if (input.files && input.files[0]) {
              var reader = new FileReader();       
              reader.onload = function (e) {
                  $(id).attr('src', e.target.result).width(200).height(150);
              };       
              reader.readAsDataURL(input.files[0]);
          }
       }
</script>