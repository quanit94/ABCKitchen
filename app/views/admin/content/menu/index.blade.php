@extends('admin/template/index')
@section('title')
	Quản lý thực đơn
@stop
@section('content')
	@if(count($data) != 0)
		<div class="col-md-12"><p class="pull-right"><a href="{{URL::route("manage_menu_add_get")}}"><i class="fa fa-plus"></i> Thêm thực đơn </a>|<a href="{{URL::route("manage_menu_delete_all")}}" class="confirm"> <i class="fa fa-trash-o"></i> Xóa tất cả</a></p></div>
		<div class="col-md-12" >
			    	<table class="table table-hover">
						<tr>
							<th><strong>ID</strong></th>
							<th><strong>Ảnh</strong></th>
							<th><strong>Tên thực đơn</strong></th>
							<th><strong>Giá tiền</strong></th>
							<th><strong>Miêu tả</strong></th>
							<th><strong>Cập nhật</strong></th>
							<th><strong>Món ăn</strong></th>
							<th><strong>Sửa</strong></th>
							<th><strong>Xóa</strong></th>
						</tr>
						
						{{Form::open(array("route"=>array("manage_menu_delete")))}}
							@foreach($data as $menu)
								<tr>
								<td>{{$menu->menu_id}}</td>
								<td><img src="{{URL::to("/uploads/menu/images/".$menu->menu_image)}}"  width="50" height="70"></td>
								<td><a href="{{URL::route("manage_menu_detail", array($menu->menu_id))}}">{{$menu->menu_name}}</a></td>
								<td>{{$menu->menu_price}} VNĐ</td>
								<td>{{Str::limit($menu->menu_description, $value=80, $end="...")}}</td>
								<td>{{$menu->menu_created_at}}</td>
								<td><a href="{{URL::route("manage_menu_add_food_get", array($menu->menu_id))}}"><i class="fa fa-plus"></i></a></td>
								<td><a href="{{URL::route("manage_menu_edit_get", array($menu->menu_id))}}"><i class="fa fa-edit"></i></a></td>
 								<td><input type="checkbox" value="1" name="del[{{$menu->menu_id}}]"></td>
 								
								</tr>
							@endforeach
							<tr>
								<td colspan="9" style="background-color: white"><input type="submit" value="Xác nhận" name="ok" class="btn btn-default pull-right confirm" id="del" ></td>
								{{Form::close()}}
							</tr>
							<tr class="last">
								<td colspan="9">{{$data->links()}}</td>
							</tr>
					</table>
		</div>
		
		
	@else
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

