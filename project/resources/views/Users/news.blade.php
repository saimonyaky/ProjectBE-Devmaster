@extends('users.layouts.main')
<link rel="stylesheet" href="css/tintuc.css">
@section('content')
<div class="mid">
    <div class="container p-0">
        <div class="banner">
            <div class="row">
                <div class="col-3">
                    <!-- list -->
                    <div class="collapse list show" id="list">
                        @include('users.layouts.list')
                    </div>
                </div>
                <div class="col-lg-9 col-12 ps-0">
                    <!-- direct -->
                    <div class="direct">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb mb-2">
                                <li class="breadcrumb-item"><a href="./index.html">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- banner -->
                    <div class="banner-img">
                        <img src="/img/display/tin tuc.png" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="row">
                <div class="col-3">
                    <!-- news -->
                    @include('users.layouts.hotnews')
                </div>
                <div class="col-lg-9 ps-0">
                    <div class="content">
                        <!-- img-title -->
                        <div class="img-title">
                            <div class="d-flex">
                                <div class="justify-content-start bg-green tree">
                                    <img src="./img/cay.png" alt="">
                                </div>
                                <div class="bg-green content p-2">
                                    <b>Tin tức</b>
                                </div>
                                <div class="icon flex-grow-1 bg-gray">
                                    <img src="./img/icon_section1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- main-content -->
                        <div class="main-content">
                            <a href="./tintuc.html">
                                <div class="card">
                                    <div class="row g-0 py-4">
                                        <div class="img col-4">
                                            <img src="./img/tin05.png" class="w-100 h-100" alt="...">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body p-0 ps-2">
                                                <p class="card-text m-0"><b>Tác dụng của cây lưỡi hổ trong chữa bệnh</b></p>
                                                <p class="card-text text-content">
                                                    <small class="text-muted">
                                                        <img src="./img/clock.png" alt="">
                                                        <span><i>28/6/2016</i></span>
                                                    </small>
                                                </p>
                                                <p class="card-text text-content">Cây Lưỡi Hổ có tác dụng thanh lọc không khí, hấp thụ chất gây ô nhiễm, cải thiện không gian sống vào ban đêm cây nhà oxi nên rất phù hợp để phòng ngủ. Cây mang ý nghĩa phong thủy trừ tà xua đuổi ma quỹ, chống lại sự bỏ bùa để đem lại may mắn và tài lộc cho gia chủ.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="./tintuc.html">
                                <div class="card">
                                    <div class="row g-0 py-4">
                                        <div class="img col-4">
                                            <img src="./img/tin05.png" class="w-100 h-100" alt="...">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body p-0 ps-2">
                                                <p class="card-text m-0"><b>Tác dụng của cây lưỡi hổ trong chữa bệnh</b></p>
                                                <p class="card-text text-content">
                                                    <small class="text-muted">
                                                        <img src="./img/clock.png" alt="">
                                                        <span><i>28/6/2016</i></span>
                                                    </small>
                                                </p>
                                                <p class="card-text text-content">Cây Lưỡi Hổ có tác dụng thanh lọc không khí, hấp thụ chất gây ô nhiễm, cải thiện không gian sống vào ban đêm cây nhà oxi nên rất phù hợp để phòng ngủ. Cây mang ý nghĩa phong thủy trừ tà xua đuổi ma quỹ, chống lại sự bỏ bùa để đem lại may mắn và tài lộc cho gia chủ.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="./tintuc.html">
                                <div class="card">
                                    <div class="row g-0 py-4">
                                        <div class="img col-4">
                                            <img src="./img/tin05.png" class="w-100 h-100" alt="...">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body p-0 ps-2">
                                                <p class="card-text m-0"><b>Tác dụng của cây lưỡi hổ trong chữa bệnh</b></p>
                                                <p class="card-text text-content">
                                                    <small class="text-muted">
                                                        <img src="./img/clock.png" alt="">
                                                        <span><i>28/6/2016</i></span>
                                                    </small>
                                                </p>
                                                <p class="card-text text-content">Cây Lưỡi Hổ có tác dụng thanh lọc không khí, hấp thụ chất gây ô nhiễm, cải thiện không gian sống vào ban đêm cây nhà oxi nên rất phù hợp để phòng ngủ. Cây mang ý nghĩa phong thủy trừ tà xua đuổi ma quỹ, chống lại sự bỏ bùa để đem lại may mắn và tài lộc cho gia chủ.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="./tintuc.html">
                                <div class="card">
                                    <div class="row g-0 py-4">
                                        <div class="img col-4">
                                            <img src="./img/tin05.png" class="w-100 h-100" alt="...">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body p-0 ps-2">
                                                <p class="card-text m-0"><b>Tác dụng của cây lưỡi hổ trong chữa bệnh</b></p>
                                                <p class="card-text text-content">
                                                    <small class="text-muted">
                                                        <img src="./img/clock.png" alt="">
                                                        <span><i>28/6/2016</i></span>
                                                    </small>
                                                </p>
                                                <p class="card-text text-content">Cây Lưỡi Hổ có tác dụng thanh lọc không khí, hấp thụ chất gây ô nhiễm, cải thiện không gian sống vào ban đêm cây nhà oxi nên rất phù hợp để phòng ngủ. Cây mang ý nghĩa phong thủy trừ tà xua đuổi ma quỹ, chống lại sự bỏ bùa để đem lại may mắn và tài lộc cho gia chủ.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="./tintuc.html">
                                <div class="card">
                                    <div class="row g-0 py-4">
                                        <div class="img col-4">
                                            <img src="./img/tin05.png" class="w-100 h-100" alt="...">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body p-0 ps-2">
                                                <p class="card-text m-0"><b>Tác dụng của cây lưỡi hổ trong chữa bệnh</b></p>
                                                <p class="card-text text-content">
                                                    <small class="text-muted">
                                                        <img src="./img/clock.png" alt="">
                                                        <span><i>28/6/2016</i></span>
                                                    </small>
                                                </p>
                                                <p class="card-text text-content">Cây Lưỡi Hổ có tác dụng thanh lọc không khí, hấp thụ chất gây ô nhiễm, cải thiện không gian sống vào ban đêm cây nhà oxi nên rất phù hợp để phòng ngủ. Cây mang ý nghĩa phong thủy trừ tà xua đuổi ma quỹ, chống lại sự bỏ bùa để đem lại may mắn và tài lộc cho gia chủ.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection