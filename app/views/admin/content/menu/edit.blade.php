@extends('admin/template/index')
@section('title')
  Sửa thực đơn
@stop
@section('content')
{{Form::open(array('route'=>array('manage_menu_edit_post', $data->menu_id),'files'=>true))}}
<hr>
<div class="col-md-12">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên thực đơn</label>
    <input type="text" name="menu_name" value="{{$data->menu_name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Miêu tả</label>
    <textarea class="form-control" name="menu_description" style="border-radius: 0">{{$data->menu_description}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ngày ăn</label>
    <input type="date" class="form-control" name="menu_date" style="border-radius: 0"/>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Ảnh thực đơn</label>
    <input type="file" id="exampleInputFile" name="menu_image"><br>
    <p>Xem ảnh cũ <a href="{{URL::to("/uploads/menu/images/".$data->menu_image)}}" title="">tại đây</a></p>
  </div>
  <input type="submit" name="ok" value="Xác nhận" class="btn btn-default">
</div>
{{Form::close()}}
@stop
