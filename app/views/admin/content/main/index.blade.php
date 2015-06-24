@extends("admin/template/index")
@section('title')
	Quản lý nhà ăn
@stop
@section("content")
	Chào ngày mới, {{Auth::user()->name}}!
@stop