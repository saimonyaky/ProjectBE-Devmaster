<div class="main-menu" id="myTopnav">
    <div class="container px-0">
        <div class="row">
            <div class="list-item col-3 d-flex align-items-center">
                <a class="list-btn ps-2" type="button" href="{{route('product')}}">
                    <i class="fa fa-bars" style="color: white;"></i>
                    <b class="ps-2">DANH MỤC SẢN PHẨM</b>
                </a>
            </div>
            <!-- menu -->
            <div class="menu col-12 col-lg-9">
                <ul class="nav justify-content-between flex-nowrap">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('index')}}"><b>TRANG CHỦ</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('introduce')}}"><b>GIỚI THIỆU</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('product')}}"><b>SẢN PHẨM</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b>DỊCH VỤ</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b>HỖ TRỢ KHÁCH HÀNG</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('news')}}"><b>TIN TỨC</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}"><b>LIÊN HỆ</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b><i class='fas fa-shopping-cart'></i></b></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="icon" onclick="mainMenuFunction()">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>