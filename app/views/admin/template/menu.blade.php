            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="{{URL::route('dashboard')}}"><i class="fa fa-fw fa-dashboard"></i> Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{URL::route('manage_user')}}"><i class="fa fa-fw fa-user"></i> Quản lý người dùng</a>
                    </li>
                    <li>
                        <a href="{{URL::route('manage_food')}}"><i class="fa fa-fw fa-table"></i> Quản lý món ăn</a>
                    </li>
                    <li>
                        <a href="{{URL::route('manage_menu')}}"><i class="fa fa-fw fa-edit"></i> Quản lý thực đơn</a>
                    </li>
                    <li>
                        <a href="{{URL::route('manage_order')}}"><i class="fa fa-fw fa-desktop"></i> Quản lý đăng ký ăn</a>
                    </li>
                    <li>
                        <a href="{{URL::route('manage_product_food')}}"><i class="fa fa-fw fa-wrench"></i> Quản lý thực phẩm</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Thống kê <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="{{URL::route('statistic_register')}}">Thống kê đăng ký ăn</a>
                            </li>
                            <li>
                                <a href="{{URL::route('statistic_buy_product')}}">Thống kê mua thực phẩm</a>
                            </li>
                        </ul>
                    </li>    
                </ul>
            </div>