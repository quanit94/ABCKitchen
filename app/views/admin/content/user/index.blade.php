@extends('admin/template/index')
@section('title')
	Quản lý người dùng
@stop
@section('content')
	@if(count($data) != 0)
		<div class="col-md-12"><p class="pull-right"><a href="{{URL::route("manage_user_add_get")}}"><i class="fa fa-plus"></i> Thêm thành viên </a>|<a href="{{URL::route("manage_user_delete_all")}}" class="confirm"> <i class="fa fa-trash-o"></i> Xóa tất cả</a></p></div>
		<div class="col-md-12" >
			    	<table class="table table-hover">
						<tr>
							<th><strong>ID</strong></th>
							<th><strong>Tên đăng nhập</strong></th>
							<th><strong>Email</strong></th>
							<th><strong>Mật khẩu</strong></th>
							<th><strong>Tên</strong></th>
							<th><strong>Tuổi</strong></th>
							<th><strong>Giới tính</strong></th>
							<th><strong>Số điện thoại</strong></th>
							<th><strong>Địa chỉ</strong></th>
							<th><strong>Sửa</strong></th>
							<th><strong>Xóa</strong></th>
						</tr>
						
						{{Form::open(array("route"=>array("manage_user_delete")))}}
							@foreach($data as $user)
								<tr>
								<td>{{$user->id}}</td>
								<td>{{$user->username}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->salt}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->age}}</td>
								@if($user->gender == 0)
									<td>Nam</td>
								@else 
									<td>Nữ</td>
								@endif
								<td>{{$user->phone}}</td>
								<td>{{$user->address}}</td>
								<td><a href="{{URL::route("manage_user_edit_get", array($user->id))}}"><i class="fa fa-edit"></i></a></td>
 								<td><input type="checkbox" value="1" name="del[{{$user->id}}]"></td>
								</tr>
							@endforeach
							<tr>
								<td colspan="11" style="background-color: white"><input type="submit" value="Xác nhận" name="ok" class="btn btn-default pull-right confirm" id="del" ></td>
								{{Form::close()}}
							</tr>
							<tr class="last">
								<td colspan="11">{{$data->links()}}</td>
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

@section('other_js')

@stop