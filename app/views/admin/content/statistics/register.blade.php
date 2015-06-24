@extends('admin/template/index')
@section('title')
	Thống kê đăng ký ăn ngày mai
@stop
@section('content')
	@if(count($data) != 0)
		<div class="col-md-12" >
			    	<table class="table table-hover">
			    	<?php $num = 1;?>
						<tr>
							<th><strong>STT</strong></th>
							<th><strong>Tên thực đơn</strong></th>
							<th><strong>Số yêu cầu</strong></th>
							<th><strong>Ngày yêu cầu</strong></th>
						</tr>
					
							@foreach($data as $order)
								<tr>
									<td><?php echo $num; $num++;?></td>
									<td>{{$order->menu_name}}</td>
									<td>{{$order->order_total}}</td>
									<td>{{$order->order_date}}</td>
								</tr>
							@endforeach
							<tr class="last">
								
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

