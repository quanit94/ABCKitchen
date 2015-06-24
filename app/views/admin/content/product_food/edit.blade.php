@extends('admin/template/index')
@section('title')
  Sửa thực phẩm
@stop
@section('content')
{{Form::open(array('route'=>array('manage_product_food_edit_post', $data->product_food_id),'files'=>true))}}
<hr>
<div class="col-md-12">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên thực phẩm</label>
    <input type="text" name="product_food_name" value="{{$data->product_food_name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter ">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Giá tiền</label>
    <input type="text" name="product_food_price" value="{{$data->product_food_price}}" class="form-control" id="exampleInputEmail1" placeholder="Enter ">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mua ngày</label>
    <input type="date" name="product_food_buy" value="{{$data->product_food_date}}" class="form-control" id="exampleInputEmail1" placeholder="Enter ">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Miêu tả</label>
    <textarea class="form-control" name="product_food_description" style="border-radius: 0">{{$data->product_food_description}}</textarea>
  </div>
  <input type="submit" name="ok" value="Xác nhận" class="btn btn-default">
</div>
{{Form::close()}}
@stop
@section('other_js')
{{HTML::script('public/admin/js/ckeditor/ckeditor.js')}}
@stop