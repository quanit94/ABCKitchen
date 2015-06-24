@extends('admin/template/index')
@section('title')
  Thêm món ăn
@stop
@section('content')
{{Form::open(array('route'=>array('manage_food_add_post'),'files'=>true))}}
<hr>
<div class="col-md-12">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên món ăn</label>
    <input type="text" name="food_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên món ăn">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Giá tiền</label>
    <input type="text" name="food_price" class="form-control" id="exampleInputEmail1" placeholder="Nhập giá tiền">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Miêu tả</label>
    <textarea class="form-control" name="food_description" style="border-radius: 0"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Ảnh món ăn</label>
    <input type="file" id="exampleInputFile" name="food_image">
  </div>
  <input type="submit" name="ok" value="Xác nhận" class="btn btn-default">
</div>
{{Form::close()}}
@stop
@section('other_js')
{{HTML::script('public/admin/js/ckeditor/ckeditor.js')}}
@stop
