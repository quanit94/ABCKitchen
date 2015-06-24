<!--==============================login================================-->
<div class="row-top2">
</div>
<nav class="navbar navbar-inverse navbar-fixed-top" style="background:black">
      <div class="container">
          <div class="navbar-header">
              

              @if(Auth::check())
                @if(Auth::user()->level == 1)
<!--                 <a class="navbar-brand" href="{{URL::route('main')}}"><span class="glyphicon glyphicon-home"></span> Home</a> -->
                <a class="btn btn-success" href="{{URL::route('dashboard')}}" style="margin-top:10px;"><i class="fa fa-user"></i> Quản lý nhà ăn</a>
                @endif
              @endif
          </div>
         
          @if(!Auth::check())
          
          <div id="navbar" class="navbar-collapse collapse" >
            {{Form::open(array("route"=>"login_post","class"=>"navbar-form navbar-right"))}}
                <div class="form-group">
                  {{Form::text("username","",array("class"=>"form-control","placeholder"=>"Username"))}}
                </div>
                <div class="form-group">
                    {{Form::password("password", array("class"=>"form-control","placeholder"=>"Password"))}}
                </div>
                {{Form::submit("Sign in",array("class"=>"btn btn-success"))}}
                
        {{Form::close()}}
          </div><!--/.navbar-collapse -->
          @else
          <div id="myoption-nav">
            <div id="navbar" class="navbar-collapse collapse">
                <form class="navbar-form navbar-right">
                  <a href="{{URL::route('schedule')}}" class="btn bg-info" style="text-decoration: none">{{Auth::user()->name}}</a>
                  <a href="{{URL::route('logout')}}" class="btn btn-danger">Đăng xuất</a>
              </form>
            </div>
        </div>
        @endif
      </div>
<!--==============================header================================-->
<div class="row-top">
    <div class="main">
      <div class="wrapper">
        <nav>
          <a href="{{URL::route('home')}}"><span class="logo"></span></a>
          <ul class="menu">
            <li><a href="{{URL::route('home')}}" >Trang chủ</a></li> 
            <li><a href="{{URL::route('customerMenu')}}" >Thực đơn</a></li>
            <li><a href="{{URL::route('schedule')}}" >Lịch ăn</a></li>
            <li><a href="{{URL::route('contact')}}" >Liên hệ</a></li>
          </ul>
        </nav>
      </div>
    </div>
</div>

</nav>


<div class="row-bot2">
  <div class="row-bot-bg2">
    <h2>Lựa chọn hoàn hảo cho <span> bữa trưa ở VNU</span></h2>

  </div>
</div>



