@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Add New User</h1>
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Quick Example</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="{{url('admin/addnewuser')}}" method="POST">
    {!! csrf_field() !!}
    <div class="box-body">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{ old('name') }}">
        <div class="alert alert-danger">          
        {{$errors->first()}}
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email" value="{{ old('email') }}">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
      </div>
      {{-- @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif --}}
      @if(session('success'))
      <h1>{{session('success')}}</h1>
      @endif
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn">Reset</button>
    </div>
  </form>
</div>
@stop