@extends('admin/template/index')
@section('title')
  Thêm thực đơn
@stop
@section('content')
{{Form::open(array('route'=>array('manage_menu_add_post'),'files'=>true))}}
<hr>
<div class="col-md-12">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên thực đơn</label>
    <input type="text" name="menu_name" class="form-control" id="exampleInputEmail1" placeholder="Tên thực đơn">
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Giá tiền</label>
    <input type="text" name="menu_price" class="form-control" id="exampleInputEmail1" placeholder="Enter">
  </div> -->
  <div class="form-group">
    <label for="exampleInputPassword1">Miêu tả</label>
    <textarea class="form-control" name="menu_description" style="border-radius: 0"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ngày ăn</label>
    <input type="date" name="menu_created_at" class="form-control" />
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Ảnh thực đơn</label>
    <input type="file" id="exampleInputFile" name="menu_image">
  </div>
  <input type="submit" name="ok" value="Xác nhận" class="btn btn-default">
</div>
{{Form::close()}}
@stop
