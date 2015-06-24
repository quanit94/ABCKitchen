@extends('admin/template/index')
@section('title')
  Thêm thực phẩm
@stop
@section('content')
{{Form::open(array('route'=>array('manage_product_food_add_post'),'files'=>true))}}
<hr>
<div class="col-md-12">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên thực phẩm</label>
    <input type="text" name="product_food_name" class="form-control" id="exampleInputEmail1" placeholder="Tên thực phẩm ">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Giá tiền</label>
    <input type="text" name="product_food_price" class="form-control" id="exampleInputEmail1" placeholder="Giá tiền ">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mua ngày</label>
    <input type="date" name="product_food_date" class="form-control" id="exampleInputEmail1" placeholder="Ngày mua ">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Miêu tả</label>
    <textarea class="form-control" name="product_food_description" style="border-radius: 0"></textarea>
  </div>
  <input type="submit" name="ok" value="Xác nhận" class="btn btn-default">
</div>
{{Form::close()}}
@stop
@section('other_css')
{{HTML::script('public/admin/js/ckeditor/ckeditor.js')}}
@stop