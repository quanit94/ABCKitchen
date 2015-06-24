<!DOCTYPE html>
<html>
<head>
	<title>ABC-Kitchen</title>
	<meta charset="utf-8">
  <!-- boostrap -->
  {{HTML::style("public/guest/boostrap/css/bootstrap.min.css")}}
  {{HTML::style("public/guest/boostrap/css/bootstrap-theme.min.css")}}
<!--   {{HTML::style("public/guest/boostrap/css/top.css")}}
  {{HTML::style("public/guest/boostrap/css/reset.css")}}
  {{HTML::style("public/guest/boostrap/css/layout.css")}}
  {{HTML::style("public/guest/boostrap/css/style.css")}} -->
  {{HTML::style("public/guest/css/reset.css")}}
  {{HTML::style("public/guest/css/style.css")}}
  {{HTML::style("public/guest/css/layout.css")}}
  {{HTML::style("public/guest/css/thucdon.css")}}

	
</head>

<!-- <script src="js/migrate.js"></script> -->


<body>
    @include('guest.template.head')

<!--==============================content================================-->
<div id="content">
    @yield('content')
</div>

<!--==============================footer================================-->
    @include('guest.template.footer')

  

<!-- // <script src="js/jquery-1.11.2.js" type="text/javascript"></script> -->
  {{HTML::script('public/guest/js/FF-cash.js')}}
  {{HTML::script('public/guest/js/jquery-1.7.1.min.js')}}
  {{HTML::script('public/guest/js/tms-0.3.js')}}
  {{HTML::script('public/guest/js/tms_presets.js')}}
  {{HTML::script('public/guest/js/jquery.easing.1.3.js')}}
  {{HTML::script('public/guest/js/jquery.equalheights.js')}}
  {{HTML::script('public/guest/js/FF-cash.js')}}


  <!-- include jquery , jquery UI -->
  <!-- // <script type="text/javascript" src="jquery/js/jquery/jquery_2.3.1.js"></script> -->
  {{HTML::script('public/guest/js/jquery.bxSlider.js')}}
  {{HTML::script('public/guest/jquery/js/jquery-ui/jquery-ui.js')}}
  <!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
 
    <!-- BOOTSTRAP SCRIPTS -->
    <!-- {{HTML::script('public/admin/js/bootstrap.min.js')}} -->
    @section('other_js')
    @show
    <script type="text/javascript">
        $(document).ready(function(){
            $('.button-2').on('click', function(){
                return confirm('Bạn có chắc chắn đăng ký thực đơn này không ?');
            });
        });
    </script>

    <script type="text/javascript">
    $(window).load(function () {
        $('.slider')._TMS({
            duration: 1000,
            easing: 'easeOutQuint',
            preset: 'slideDown',
            slideshow: 7000,
            banners: false,
            pauseOnHover: true,
            pagination: true,
            pagNums: false
        });
    });
    </script>
    
</body>

</html>