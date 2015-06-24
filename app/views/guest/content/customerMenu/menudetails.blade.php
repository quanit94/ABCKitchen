
@extends('guest/template/index')
@section('content')
  <div class="main">
      <div class="wrapper">

        <!-- left -->
        @include('guest.content.customerMenu.menuleft')
          <!-- right-->
        <article class="col-right">

         

          <div class="indent-right">
                  <?php $date = new DateTime($menu_date)?>
                  <h3 class="prev-indent-bot">{{$titleTable}} - {{convertDay($date)}}</h3>
                  <hr class="prev-indent-bot-bg" />
            <div class="img-indent-bot">
                @foreach($food as $food)
                  <div class="box-food">
                    <img src="{{URL::to('/uploads/food/images/'.$food->food_image)}}" alt="" width="220" height="200" />
                    <span class="name-food"><b>{{$food->food_name}}</b></span>
                    <span class="price"><i>{{$food->food_price}} VNĐ</i></span>
                    <p class="detail-food">
                        {{Str::limit($food->food_description,$limit=80,$end='...')}}
                    </p><br/>
                  </div>

                @endforeach
                  <a class="button-2" href="{{URL::route('customerOrder', $menu_id)}}" style="margin-left:20px;">Đăng ký ăn</a>
            </div>
             </div>
          </article>

      </div>
    </div>
@stop