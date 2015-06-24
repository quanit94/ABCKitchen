@extends('admin/template/index')
@section('content')
{{Form::open(array('route'=>array('manage_user_edit_post', $data->id),'files'=>true))}}
<hr>
<div class="col-md-12">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên đăng nhập</label>
    <input type="text" name="username" value="{{$data->username}}" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" value="{{$data->email}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" value="{{$data->salt}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Họ và tên</label>
    <input type="text" name="name" value="{{$data->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tuổi</label>
    <input type="text" name="age" value="{{$data->age}}" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Giới tính</label>
    @if($data->gender == 0)
    <label class="checkbox-inline">
      <input type="radio" name="gender" checked="checkbox" value="0"> Nam
    </label>
    <label class="checkbox-inline">
      <input type="radio" name="gender" value="1"> Nữ
    </label>
    @else
    <label class="checkbox-inline">
      <input type="radio" name="gender" value="0"> Nam
    </label>
    <label class="checkbox-inline">
      <input type="radio" name="gender" checked="checkbox" value="1"> Nữ
    </label>
    @endif
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Số điện thoại</label>
    <input type="text" name="phone" value="{{$data->phone}}" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Địa chỉ</label>
    <input type="text" name="address" value="{{$data->address}}" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
  </div>
  <input type="submit" name="ok" value="Xác nhận" class="btn btn-default">
</div>
{{Form::close()}}
@stop
@section('other_css')
{{HTML::script('public/admin/js/ckeditor/ckeditor.js')}}
@stop