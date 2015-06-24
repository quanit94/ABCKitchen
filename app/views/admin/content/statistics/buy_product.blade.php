@extends('admin/template/index')
@section('title')
	Thống kê mua bán thực phẩm
@stop
@section('content')
	<!-- @if(count($data) != 0) -->
		<div class="col-md-12" >
			    	<table class="table table-hover">
						<tr>
							<th><strong>ID</strong></th>
							<th><strong>Tên thực phẩm</strong></th>
							<th><strong>Giá tiền</strong></th>
							<th><strong>Ngày mua</strong></th>
						</tr>

							@foreach($data as $order)
								<tr>
									<td>{{$order->product_food_id}}</td>
									<td>{{$order->product_food_name}}</td>
									<td>{{$order->product_food_price}}</td>
									<td>{{$order->product_food_date}}</td>
								</tr>
							@endforeach
							<tr>
								<td></td>
								<td>Tổng tiền chi tiêu của tháng</td>
								<td>{{$total}}</td>
							</tr>
							<tr class="last">

								<td colspan="8">{{$data->links()}}</td>
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

