@extends("guest/template/index")
@section("content")


 <div class="row-bot">
    <div class="row-bot-bg">
      <div class="main">
        
        <div class="slider-wrapper">
          <div class="slider">
            <ul class="items">
              <li> <img src="public/guest/images/slider-img1.jpg" alt="" /> </li>
              <li> <img src="public/guest/images/slider-img2.jpg" alt="" /> </li>
              <li> <img src="public/guest/images/slider-img3.jpg" alt="" /> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="main">
    <div class="wrapper img-indent-bot">
      <div class="col-1"> <a href="#"><img class="img-border" src="public/guest/images/banner-1.jpg" alt=""></a> </div>
      <div class="col-1"> <a href="#"><img class="img-border" src="public/guest/images/banner-2.jpg" alt=""></a> </div>
      <div class="col-1"> <a href="#"><img class="img-border" src="public/guest/images/banner-3.jpg" alt=""></a> </div>
    </div>

    <div class="wrapper">
      <div class="column-1">
        <div class="indent-left">
          <div class="indent-bot">
            <h3>Món ngon hôm nay</h3>
            <hr class="hr-h3">
            <ul class="list-1">
              <li><a href="#">Canh ngao chua</a></li>
              <li><a href="#">Nem rán </a></li>
              <li><a href="#">Vịt om sấu</a></li>
              <li><a href="#">Đậu phụ nhồi thịt sốt cà chua</a></li>
              <li><a href="#">Canh bí xanh dồn thịt heo</a></li>
              <li><a href="#">Nộm dưa chuột cà rốt</a></li>
            </ul>
          </div>
          <a class="button-1" href="{{URL::route('customerMenu')}}">Xem thêm</a> </div>
      </div>
      <div class="column-2">
        <div class="indent-bot">
          <h3 class="p1">Các dịch vụ của Nhà ăn</h3>
          <hr class="hr-h3">
          <p class="p2">ABC Kichen là nhà ăn phục vụ các bữa ăn trong ngày cho cán bộ giảng viên cũng như sinh viên trong trường Đại học Quốc gia Hà Nội cũng như các trường học lân cận. Nhà ăn luôn phục vụ khách hàng với ba tiêu chí: ngon, sạch, giá cả hợp lý. ABC Kitchen từ lâu đã trở thành địa điểm ăn uống đáng tin cậy của nhiều khách hàng.
            Nằm trên tầng của khu Giảng đường II, cùng với không gian thoáng mát, nhà ăn có vị trí thuận tiện cho sinh viên, học sinh cũng như cán bộ nhiều trường học lui tới để ăn uống cũng như nghỉ ngơi sau những giờ học tập, làm việc căng thẳng.
            Ngoài phục vụ các bữa ăn trong ngày cho cán bộ nhân viên trong trường, nhà ăn còn có không gian phù hợp để tổ chức sinh nhật, họp lớp hoặc các sự kiện kỉ niệm khác.</p>
          <a class="button-1" href="#">Xem thêm</a> </div>
    </div>
 </div>


@stop