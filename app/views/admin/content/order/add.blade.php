@extends('admin/template/index')
@section('title')
  Thêm đăng ký ăn
@stop
@section('content')
{{Form::open(array('route'=>array('manage_order_add_post'),'files'=>true))}}
<hr>
<div class="col-md-12">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên người ăn</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Người đăng ký ăn (username)">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tên menu</label>
    
    <input type="text" name="menu_name" class="form-control" id="exampleInputEmail1" placeholder="Tên menu">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Thời gian ăn</label>
    <input type="date" name="order_date" class="form-control" id="exampleInputEmail1" placeholder="Thời gian ăn">
  </div>
  <input type="submit" name="ok" value="Xác nhận" class="btn btn-default">
</div>
{{Form::close()}}
@stop
@section('other_css')
{{HTML::script('public/admin/js/ckeditor/ckeditor.js')}}
@stop