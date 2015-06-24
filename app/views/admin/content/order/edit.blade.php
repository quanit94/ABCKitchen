@extends('admin/template/index')
@section('title')
  Sửa đăng ký ăn
@stop
@section('content')
{{Form::open(array('route'=>array('manage_order_edit_post', $data->order_id),'files'=>true))}}
<hr>
<div class="col-md-12">
   <div class="form-group">
    <label for="exampleInputEmail1">Tên menu</label>
    <input type="text" name="menu_name" value="{{$data->menu->menu_name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tên người ăn</label>
    <input type="text" name="username" value="{{$data->user->username}}" class="form-control" id="exampleInputEmail1" placeholder="Enter">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Thời gian ăn</label>
    <input type="date" name="order_date" value="{{$data->order_date}}" class="form-control" id="exampleInputEmail1" placeholder="Enter">
  </div>
  <input type="submit" name="ok" value="Xác nhận" class="btn btn-default">
</div>
{{Form::close()}}
@stop
@section('other_css')
{{HTML::script('public/admin/js/ckeditor/ckeditor.js')}}
@stop