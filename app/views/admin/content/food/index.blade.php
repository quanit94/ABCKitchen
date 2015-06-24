@extends('admin/template/index')
@section('title')
	Quản lý món ăn
@stop
@section('content')
	@if(count($data) != 0)
		<div class="col-md-12"><p class="pull-right"><a href="{{URL::route("manage_food_add_get")}}"><i class="fa fa-plus"></i> Thêm món ăn </a>|<a href="{{URL::route("manage_food_delete_all")}}" class="confirm"> <i class="fa fa-trash-o"></i> Xóa tất cả</a></p></div>
		<div class="col-md-12" >
			    	<table class="table table-hover">
						<tr>
							<th><strong>ID</strong></th>
							<th><strong>Ảnh</strong></th>
							<th><strong>Tên món ăn</strong></th>
							<th><strong>Giá tiền</strong></th>
							<th><strong>Miêu tả</strong></th>
							<th><strong>Cập nhập</strong></th>
							<th><strong>Sửa</strong></th>
							<th><strong>Xóa</strong></th>
						</tr>
						
						{{Form::open(array("route"=>array("manage_food_delete")))}}
							@foreach($data as $food)
								<tr>
								<td>{{$food->food_id}}</td>
								<td><img src="{{URL::to("/uploads/food/images/".$food->food_image)}}" width="50" height="70"></td>
								<td>{{$food->food_name}}</td>	
								<td>{{$food->food_price}}</td>
								<td>{{Str::limit($food->food_description, $value=80, $end="...")}}</td>
								<td>{{$food->food_created_at}}</td>
								<td><a href="{{URL::route("manage_food_edit_get", array($food->food_id))}}"><i class="fa fa-edit"></i></a></td>
 								<td><input type="checkbox" value="1" name="del[{{$food->food_id}}]"></td>
								</tr>
							@endforeach
							<tr>
								<td colspan="8" style="background-color: white"><input type="submit" value="Xác nhận" name="ok" class="btn btn-default pull-right confirm" id="del" ></td>
								{{Form::close()}}
							</tr>
							<tr class="last">
								<td colspan="8">{{$data->links()}}</td>
							</tr>
					</table>
		</div>
		
		
	@else
		<div class="col-md-12"><p class="pull-right"><a href="{{URL::route("manage_food_add_get")}}"><i class="fa fa-plus"></i> Thêm món ăn </a>|<a href="{{URL::route("manage_food_delete_all")}}" class="confirm"> <i class="fa fa-trash-o"></i> Xóa tất cả</a></p></div>
		<p style="text-align: center; color: #5cb85c"><i class="fa fa-spinner fa-spin fa-3x text-center"></i> &nbsp; <span style="font-size: 2em">Hiện chưa có dữ liệu</span></p>
	@endif
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