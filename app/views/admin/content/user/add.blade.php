@extends('admin/template/index')
@section('content')
{{Form::open(array('route'=>array('manage_user_add_post'),'files'=>true))}}
<hr>
<div class="col-md-12">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên đăng nhập</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Tên đăng nhập">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="mật khẩu">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Họ và tên</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Họ tên">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tuổi</label>
    <input type="text" name="age" class="form-control" id="exampleInputEmail1" placeholder="Tuổi">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Giới tính</label>
    <label class="checkbox-inline">
  <input type="radio" name="gender" value="0"> Nam
</label>
<label class="checkbox-inline">
  <input type="radio" name="gender" value="1"> Nữ
</label>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Số điện thoại</label>
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Số điện thoại">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Địa chỉ</label>
    <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="địa chỉ">
  </div>
  <input type="submit" name="ok" value="Xác nhận" class="btn btn-default">
</div>
{{Form::close()}}
@stop
@section('other_js')
{{HTML::script('public/admin/js/ckeditor/ckeditor.js')}}
@stop