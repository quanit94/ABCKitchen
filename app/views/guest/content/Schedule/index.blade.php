@extends('guest/template/index')

@section('content')
@if(Auth::check())
	@section('content')
  <div class="main">
      <div class="wrapper">

        <!-- left -->
        <article class="col-left">
        
        	<ul class="list-group">
              <li class="bg-primary" style="text-align:center;">Thông tin người dùng</li>
              <li class="list-group-item text-right" style="background:#FDF282;"><span class="pull-left"><strong class="">Tên tài khoản:</strong></span><br> {{Auth::user()->username}}</li>
              <li class="list-group-item text-right" style="background:#FDF282;"><span class="pull-left"><strong class="">Tên người dùng:</strong></span><br> {{Auth::user()->name}}</li>
              <li class="list-group-item text-right" style="background:#FDF282;"><span class="pull-left"><strong class="">Tuổi:</strong></span><br> {{Auth::user()->age}}</li>
              <li class="list-group-item text-right" style="background:#FDF282;"><span class="pull-left"><strong class="">Giới tính: </strong></span><br> @if(Auth::user()->gender == 1) Nam @else Nữ @endif</li>
            </ul>
        
        </article>

          <!-- right-->
        <article class="col-right">
          <div class="indent-right">

                  <h3 class="prev-indent-bot">Thực đơn đã đăng ký</h3>
                  <hr class="prev-indent-bot-bg" />
                    	<div class="col-md-12" >
                      		
                          <table class="table">
                          <tr class="bg-primary">
                            <th><strong>ID</strong></th>
                            <th><strong>Tên thực đơn</strong></th>
                            <th><strong>Giá thực đơn</strong></th>
                            <th><strong>Ngày yêu cầu</strong></th>
                            <th><strong>Xóa</strong></th>
                          </tr>
                            <?php $totalMoney = 0;?>

                            {{Form::open(array("route"=>array("customerDeleteMenu")))}}
                            @foreach($registered as $order)
                              <tr class="active">
                                <td style="background:#FDF282;">{{$order->order_id}}</td>
                                <td style="background:#FDF282;">{{$order->menu_name}}</td>
                                <td style="background:#FDF282;">{{$order->menu_price}} VNĐ</td>
                                <td style="background:#FDF282;">{{$order->order_date}}</td>
                                <td style="background:#FDF282;"><input type="checkbox" value="1" name="del[{{$order->order_id}}]"></td>
                                <?php $totalMoney += $order->menu_price;?>
                              </tr>
                            @endforeach
                            <tr class="bg-info">
                              <td>Tổng tiền</td>
                              <td>{{$totalMoney}} VNĐ</td>
                              <td colspan="8" class="bg-info"><input type="submit" value="Xác nhận" name="ok" class="btn btn-default pull-right confirm" id="del" ></td>

                            </tr>
                            {{Form::close()}}
                            <tr class="last">
                              <td colspan="8">{{$registered->links()}}</td>
                            </tr>
                        </table>
                      </div>
           	</div>
            <!-- thuc don trong thang -->
            <div class="indent-right">
                  <h3 class="prev-indent-bot">Đã ăn trong tháng</h3>
                  <hr class="prev-indent-bot-bg" />
                      <div class="col-md-12" >
                          <table class="table">
                          <tr class="bg-primary">
                            <th><strong>ID</strong></th>
                            <th><strong>Tên thực đơn</strong></th>
                            <th><strong>Giá thực đơn</strong></th>
                            <th><strong>Ngày yêu cầu</strong></th>
                            
                          </tr>
                            <?php $totalMoney2 = 0;?>
                            @foreach($eated as $order)
                              <tr class="active">
                                <td style="background:#FDF282;">{{$order->order_id}}</td>
                                <td style="background:#FDF282;">{{$order->menu_name}}</td>
                                <td style="background:#FDF282;">{{$order->menu_price}} VNĐ</td>
                                <td style="background:#FDF282;">{{$order->order_date}}</td>
                                
                                <?php $totalMoney2 += $order->menu_price;?>
                              </tr>
                            @endforeach
                            <tr class="bg-info">
                              <td>Tổng tiền</td>
                              <td>{{$totalMoney2}} VNĐ</td>
                              <td colspan="8" class="bg-info"><input type="submit" value="Xác nhận" name="ok" class="btn btn-default pull-right confirm" id="del" ></td>

                            </tr>
                            <tr class="last">
                              <td colspan="8">{{$registered->links()}}</td>
                            </tr>
                        </table>
                      </div>
            </div>
          </article>

      </div>
    </div>
@stop

@else
	Bạn chưa đăng nhập, vui lòng đăng nhập!
@endif
@stop