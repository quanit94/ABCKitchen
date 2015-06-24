@extends('guest/template/index')
@section('content')

    <div class="main">
      <article class="col-1">
              <div class="indent-left">

                <h3 class="p1">Bản đồ</h3>
                <figure class="indent-bot">
                  <iframe width="240" height="180" src="https://www.google.com/maps/place/144+Xu%C3%A2n+Th%E1%BB%A7y,+D%E1%BB%8Bch+V%E1%BB%8Dng+H%E1%BA%ADu,+C%E1%BA%A7u+Gi%E1%BA%A5y,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@21.036661,105.781313,17z/data=!3m1!4b1!4m2!3m1!1s0x313454b55a7e0e7f:0x9e45dc464f9aa4a3"></iframe>
                </figure>
                <dl>
                  <dt class="p1">144 Xuân Thủy, Cầu Giấy</dt>
                  <dd><span>Phone:</span> +1 800 559 6580</dd>
                  <dd><span>Telephone:</span> +1 800 603 6035</dd>
                  <dd><span>Email:</span><a class="color-2" href="#">ABCKitChen@gmail.com</a></dd>
                </dl>
              </div>
            </article>
            <article class="col-2">
              <h3 class="p1">Liên hệ</h3>
              <form id="contact-form" action="#" method="post" enctype="multipart/form-data">
                <fieldset>
                  <label><span class="text-form">Tên của bạn:</span>
                    <input name="name" type="text" />
                  </label>
                  <label><span class="text-form">Email:</span>
                    <input name="email" type="text" />
                  </label>
                  <div class="wrapper">
                    <div class="text-form">Ý kiến đóng góp:</div>
                    <div class="extra-wrap">
                      <textarea></textarea>
                      <div class="clear"></div>
                      <div class="buttons"> <a class="button-2" href="#">Gửi</a> <a class="button-2" href="#">Hủy bỏ</a> </div>
                    </div>
                  </div>
                </fieldset>
              </form>
      </article>
    </div>
@stop