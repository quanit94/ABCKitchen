@extends('admin/template/index')
@section('title')
	Quản lý đăng ký ăn
@stop
@section('content')
	<h3>{{$titleTable}}</h3>
	@if(count($data) != 0)
		<div class="col-md-12"><p class="pull-right"><a href="{{URL::route("manage_order_add_get")}}"><i class="fa fa-plus"></i> Thêm thực đơn </a>|<a href="{{URL::route("manage_order_delete_all")}}" class="confirm"> <i class="fa fa-trash-o"></i> Xóa tất cả</a></p></div>
		<div class="col-md-12" >
			    	<table class="table table-hover">
						<tr>
							<th><strong>ID</strong></th>
							<th><strong>Tên thực đơn</strong></th>
							<th><strong>Người yêu cầu</strong></th>
							<th><strong>Ngày yêu cầu</strong></th>
							<th><strong>Đã đến ăn</strong></th>
						</tr>
						
						{{Form::open(array("route"=>array("manage_order_confirm")))}}
							@foreach($data as $order)
								<tr>
									<td>{{$order->order_id}}</td>
									<td>{{$order->menu->menu_name}}</td>
									<td>{{$order->user->username}}</td>
									<td>{{$order->order_date}}</td>
	 								<td><input type="checkbox" value="1" name="del[{{$order->order_id}}]"></td>
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
		<!-- các đơn đăng ký đã đến ăn -->
		<h3>{{$titleTable2}}</h3>
		<div class="col-md-12" >
			    	<table class="table table-hover">
						<tr>
							<th><strong>ID</strong></th>
							<th><strong>Tên thực đơn</strong></th>
							<th><strong>Người yêu cầu</strong></th>
							<th><strong>Ngày yêu cầu</strong></th>
						</tr>
					
							@foreach($eated as $ordered)
								<tr>
									<td>{{$ordered->order_id}}</td>
									<td>{{$ordered->menu->menu_name}}</td>
									<td>{{$ordered->user->username}}</td>
									<td>{{$ordered->order_date}}</td>
								</tr>
							@endforeach
							<tr class="last">
								<td colspan="8">{{$data->links()}}</td>
							</tr>
					</table>
		</div>
		
	@else
		<div class="col-md-12"><p class="pull-right"><a href="{{URL::route("manage_order_add_get")}}"><i class="fa fa-plus"></i> Thêm thực đơn </a>|<a href="{{URL::route("manage_order_delete_all")}}" class="confirm"> <i class="fa fa-trash-o"></i> Xóa tất cả</a></p></div>
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