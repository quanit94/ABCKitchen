
@extends('guest/template/index')
@section('content')
  <div class="main">
      <div class="wrapper">

        <!-- left -->
        @include('guest.content.customerMenu.menuleft')

          <!-- right-->
        <article class="col-right">
          <div class="indent-right">
                  <h3 class="prev-indent-bot">Thực đơn <?php $time=new DateTime($titleTable); echo convertDay($time);?></h3>
                  <hr class="prev-indent-bot-bg" />
            <div class="img-indent-bot">
                @foreach($data as $menu)
                  <div class="box-food">
                    <img src="{{URL::to('/uploads/menu/images/'.$menu->menu_image)}}" alt="" width="220" height="200" />
                    <span class="name-food"><b>{{$menu->menu_name}}</b></span>
                    <span class="price"><i>{{$menu->menu_price}}</i></span>
                    <p class="detail-food">
                        {{Str::limit($menu->menu_description,$limit=80,$end='...')}}
                    </p><br/>
                    <a class="button-2" href="{{URL::route('customerOrder', $menu->menu_id)}}">Đăng ký</a>
                    <a class="button-1" href="{{URL::route('customerMenuDetails', $menu->menu_id)}}">Chi tiết</a>
                  </div>
                @endforeach
            </div>
             </div>
          </article>

      </div>
    </div>
@stop