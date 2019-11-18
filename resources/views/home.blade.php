@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Responsive Hover Table</h3>

      <div class="box-tools">
        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody><tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Date Created</th>          
        </tr>
        @forelse ($data as $item)
        <tr>            
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->created_at}}</td>                                
              </tr>
        @empty
        <tr>            
                <td>183</td>
                <td>John Doe</td>
                <td>11-7-2014</td>
                <td><span class="label label-success">Approved</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              </tr>
        @endforelse
      
        
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>
@stop