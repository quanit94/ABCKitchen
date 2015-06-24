@extends('admin/template/index')
@section('title')
  Chi tiết thực đơn
@stop
@section('content')
	<div class="col-md-12">
		<dl class="dl-horizontal">
		  	<dt>ID</dt><dd>{{$menu->menu_id}}</dd>
		  	<dt>Tên thực đơn</dt><dd>{{$menu->menu_name}}</dd>
		  	<dt>Giá tiền</dt><dd>{{$menu->menu_price}}</dd>
		  	<dt>Miêu tả</dt><dd>{{$menu->menu_description}}</dd>
		  	<dt>Tạo ngày</dt><dd>{{$menu->menu_created_at}}</dd>
		  	<dt>Ảnh</dt><dd><img src="{{URL::to("/uploads/menu/images/".$menu->menu_image)}}"  width="50" height="70"></dd>
		  	<dt>Số lượng món ăn</dt><dd>{{count($foods)}}</dd>
		  	<table class="table table-hover">
		  		<tr>
		  			<th><strong>ID</strong></th>
					<th><strong>Ảnh</strong></th>
					<th><strong>Tên món ăn</strong></th>
					<th><strong>Giá tiền</strong></th>
					<th><strong>Miêu tả</strong></th>
					<th><strong>Xóa</strong></th>
		  		</tr>
		  		<br>
				{{Form::open(array("route"=>array("manage_menu_detail_delete_food_delete", $menu->menu_id)))}}
					@foreach($foods as $food)
						<tr>
						<td>{{$food->food_id}}</td>
						<td><img src="{{URL::to("/uploads/food/images/".$food->food_image)}}" alt="" width="50" height="70"></td>
						<td>{{$food->food_name}}</td>
						<td>{{$food->food_price}} VNĐ</td>
						<td>{{Str::limit($food->food_description, $value=80, $end="...")}}</td>
		 				<td><input type="checkbox" value="1" name="del[{{$food->food_id}}]"></td>
						</tr>
					@endforeach
				<tr>
					<td colspan="6" style="background-color: white"><input type="submit" value="Xác nhận" name="ok" class="btn btn-default pull-right confirm" id="del" ></td>
				{{Form::close()}}
				</tr>
			</table>
		</dl>
	</div>
@stop 