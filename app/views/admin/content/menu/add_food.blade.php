@extends('admin/template/index')
@section('title')
	Thêm món ăn vào thực đơn
@stop
@section('content')

<div class="row">
	<div class="col-md-7">
		<div class="panel panel-default" style="border-radius: 0">
		  <div class="panel-heading">Danh mục thức ăn</div>
		  <div class="panel-body">
		    @if(count($foods) != 0)
			    	<table class="table table-hover">
						<tr>
							<th><strong>ID</strong></th>
							<th><strong>Ảnh</strong></th>
							<th><strong>Tên món ăn</strong></th>
							<th><strong>Giá tiền</strong></th>
							<th><strong>Cập nhập</strong></th>
							<th><strong>Thêm</strong></th>
						</tr>
						
						{{Form::open(array("route"=>array("manage_menu_add_food_post", $menu_id)))}}
							@foreach($foods as $food)
								<tr>
								<td>{{$food->food_id}}</td>
								<td><img src="{{URL::to("/uploads/food/images/".$food->food_image)}}" alt="" width="50" height="70"></td>
								<td>{{$food->food_name}}</td>
								<td>{{$food->food_price}} VNĐ</td>
								<td>{{$food->food_created_at}}</td>
 								<td><input type="checkbox" value="1" name="add[{{$food->food_id}}]"></td>
								</tr>
							@endforeach
							<tr>
								<td colspan="8" style="background-color: white"><input type="submit" value="Xác nhận" name="ok" class="btn btn-default pull-right confirm" id="del" ></td>
								{{Form::close()}}
							</tr>
							<tr class="last">
								<td colspan="8">{{$foods->links()}}</td>
							</tr>
					</table>
			@else
				<p style="text-align: center; color: #5cb85c"><i class="fa fa-spinner fa-spin fa-3x text-center"></i> &nbsp; <span style="font-size: 2em">Hiện chưa có dữ liệu</span></p>
			@endif
		  </div>
		</div>		
	</div>

	<div class="col-md-5">
		<div class="panel panel-default" style="border-radius: 0">
		  <div class="panel-heading">Danh mục thức ăn hiện trong thực đơn</div>
		  <div class="panel-body">
		    @if(count($menus) != 0)
			    	<table class="table table-hover">
						<tr>
							<th><strong>ID</strong></th>
							<th><strong>Ảnh</strong></th>
							<th><strong>Tên món ăn</strong></th>
							<th><strong>Giá tiền</strong></th>
							<th><strong>Xóa</strong></th>
						</tr>
						<?php 
							$total = 0;
						?>
						{{Form::open(array("route"=>array("manage_menu_delete_food_post", $menu_id)))}}
							@foreach($menus as $menu)
								<tr>
								<td>{{$menu->food_id}}</td>
								<td><img src="{{URL::to("/uploads/food/images/".$menu->food_image)}}" alt="" width="50" height="70"></td>
								<td>{{$menu->food_name}}</td>
								<td>{{$menu->food_price}} VNĐ</td>
 								<td><input type="checkbox" value="1" name="del[{{$menu->menu_food_id}}]"></td>
								</tr>
								<?php 
									$total += $menu->food_price;
								?>
							@endforeach
							<tr>
								<td colspan="2" style="background-color: white"><p><strong>Số lượng: </strong>{{count($menus)}} món</p><p><strong>Tổng tiền: </strong>{{$total}} VNĐ</p></td>
								{{Form::hidden("newprice",$total)}}
								<td colspan="6" style="background-color: white"><input type="submit" value="Xác nhận" name="ok" class="btn btn-default pull-right confirm" id="del" ></td>
								{{Form::close()}}
							</tr>
							<tr class="last">
								<td colspan="6"></td>
							</tr>
					</table>
			@else
				<p style="text-align: center;">Hiện chưa có dữ liệu</p>
			@endif
		  </div>
		</div>		
	</div>
</div>


@stop

@section('other_css')
<style type="text/css">
	th, td, span{
		text-align: center;
	}
	ul.pagination, table{
		margin-bottom: 0; 
	}
	.panel-body{
		padding-bottom: 0; 
	}
	.last > td{
		background-color: white;
	}
</style>
@stop

@section('other_js')

@stop