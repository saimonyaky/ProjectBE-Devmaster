@extends('users.layouts.main')
<link rel="stylesheet" href="{{url('')}}/css/sanphamchitiet.css">
@section('content')
<div class="mid">
    <div class="container ">
        <div class="banner">
            <div class="row">
                <div class="">
                    <!-- list -->
                    <div class="collapse list" id="list">
                        <div id="list-example" class="list-group">
                            <a class="list-group-item list-group-item-action" href="./sanpham.html">
                                <img src="./img/icon_mnuL.png" alt="">
                                <span class="ps-2">Cây trang trí trong nhà</span>
                            </a>
                            <a class="list-group-item list-group-item-action" href="./sanpham.html">
                                <img src="./img/icon_mnuL.png" alt="">
                                <span class="ps-2">Cây trang trí sân vườn</span>
                            </a>
                            <a class="list-group-item list-group-item-action" href="./sanpham.html">
                                <img src="./img/icon_mnuL.png" alt="">
                                <span class="ps-2">Cây phong thủy</span>
                            </a>
                            <a class="list-group-item list-group-item-action" href="./sanpham.html">
                                <img src="./img/icon_mnuL.png" alt="">
                                <span class="ps-2">Cây cổ thụ</span>
                            </a>
                            <a class="list-group-item list-group-item-action" href="./sanpham.html">
                                <img src="./img/icon_mnuL.png" alt="">
                                <span class="ps-2">Cây bóng mát</span>
                            </a>
                            <a class="list-group-item list-group-item-action" href="./sanpham.html">
                                <img src="./img/icon_mnuL.png" alt="">
                                <span class="ps-2">Dịch vụ vật tư</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="">
                    <!-- direct -->
                    <div class="direct">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb mb-2">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="{{route('product')}}">Sản phẩm</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        <div class="introduce">
            <div class="d-flex">
                <!-- slide -->
                <div class="col-5">
                    <section class="slide-ctsp">
                        <div class="slider-for">
                            <div>
                                <img src="./img/spct01.png" alt="">
                            </div>
                            <div>
                                <img src="./img/spct02.png" alt="">
                            </div>
                            <div>
                                <img src="./img/spct03.png" alt="">
                            </div>
                            <div>
                                <img src="./img/spct04.png" alt="">
                            </div>
                        </div>
                        <div class="slider-nav">
                            <div class="slide-img selected">
                                <img src="./img/spct01.png" alt="">
                            </div>
                            <div class="slide-img">
                                <img src="./img/spct02.png" alt="">
                            </div>
                            <div class="slide-img">
                                <img src="./img/spct03.png" alt="">
                            </div>
                            <div class="slide-img">
                                <img src="./img/spct04.png" alt="">
                            </div>
                        </div>
                    </section>
                </div>
                <!-- des -->
                <div class="col-7">
                    <div class="title">
                        <h4>Cây kim ngân</h4>
                        <ul>
                            <li><b>Mã sản phẩm:</b></li>
                            <li><b>Tình trạng:</b></li>
                        </ul>
                    </div>
                    <div class="info">
                        <table>
                            <tr class="title">
                                <td>Giá bán:</td>
                                <td>Số lượng:</td>
                            </tr>
                            <tr>
                                <td class="price pe-4"><h3><b>159,000 đ</b></h3></td>
                                <td class="pe-3"><input type="number" value="1" min="1"></td>
                                <td><button type="submit"><i class='fas fa-shopping-cart px-2'></i><b class="pe-2">ĐẶT HÀNG</b></button></td>
                            </tr>
                        </table>
                    </div>
                    <div class="des">
                        <p><b>MÔ TẢ NGẮN</b></p>
                        <p>Cây kim ngân hay còn gọi là cây thắt bím, cây bím tóc phù hợp với gia chủ muốn mua cây
                            đặt ở phòng khách, phòng hội họp, văn phòng công sở, nhà hàng, khách sạn, hoặc dùng làm
                            quà tặng trong những dịp mừng lễ, tết, thăng chức, khai trương. Các cây nhỏ có thể để
                            bàn ngoài tác dụng đem lại tài lộc nó lại còn có thể đuổi muỗi.</p>
                    </div>
                    <div>
                        <p>Tags: </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <button class="nav-link active"><b>THÔNG TIN SẢN PHẨM</b></button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link"><b>ĐÁNH GIÁ</b></button>
                        </li>
                    </ul>
                </div>
                <div class="card-body active">
                    <p class="card-text">Cây kim ngân có tên khoa học là Pachira aquatica, xuất xứ từ Mexico. Brazill Nam Mỹ và đầm lầy Trung Mỹ. Đối với người tây phương thì họ gọi cây kim ngân là money tree có nghĩa là cây ăn, có thể chính vì lý do đó mà nó nhanh chóng phát triển và được đưa đến Việt Nam để làm cây cảnh văn phòng hoặc trang trí trong nhà. Với ý nghĩa khi gia chủ sở hữu cây kim ngân sẽ có nhiều tiền vàng, sự may mắn và thịnh vượng. Ngoài ra kim ngân còncó các tên khác như cây thắt bim và một tác dụng nữa mà ít người biết đến chính là nó có thể đuổi muỗi.</p>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-6">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Đặc điểm của cây kim ngân</b></h5>
                                    <p class="card-text">Kim ngân có thể cao được hơn 6m, thân dẻo dai, bền chắc. Ở bên Anh và Mỹ nó được dùng để làm bột giấy để in tiền. Lá kim ngân xòe rộng như bàn tay, xanh quanh năm. Một số tài liệu ghi chép thì cây nở hoa từ tháng 4 đến tháng 11. Hoa gồm những cánh lớn màu kem nhạt, nở về đêm và toả hương thoang thoảng, đài hoa màu nâu nhạt hình bầu dục với 5 cánh màu xanh vàng, dài 15cm. Quả kim ngân có hình trứng, đường kính khoảng 10cm. Khi chín quả có màu nâu nhạt. Quả khô nứt dụng ra khoảng 10 - 20 hạt. Tuy nhiên có thể ở mỗi trường và điều kiện không phù hợp mà rất hiếm khi thấy kim ngân nở hoa</p>
                                    <p class="card-text">Cây kim ngân còn được gọi là cây thắt bím hay bím tóc vì ở giai đoạn cây con, người ta trồng chung từ 3 - 5 cây vào một chỗ rồi đan thắt như một cái bím tóc trông rất ngộ nghĩnh. Một chậu kim ngân nhỏ xinh có thể để trên bàn làm việc, quầy thu ngân, hoặc gắn lên đó chiếc nơ trang trí, sẽ trở thành món quà sinh nhật để tặng cho người thân.</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <img src="./img/ttsp01.png" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-6">
                                <img src="./img/ttsp02.png" alt="..." class="img-fluid rounded-start">
                            </div>
                            <div class="col-6">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Cách chăm sóc và ý nghĩa của cây kim ngân</b></h5>
                                    <p class="card-text"><b>Nhiệt độ:</b>
                                        <br>
                                        Cây sống được ở nhiệt độ từ 4°C đến 40°C phát triển thích hợp ở nhiệt độ 18°C đến 26°C. Như vậy đối với cây được trồng trong nhà hoặc trồng trong phòng lạnh cây vẫn sinh trưởng bình thường. Tuy nhiên để cây tồn tại lâu cần phải điều chỉnh nhiệt độ phù hợp.</p>
                                    <p class="card-text"><b>Ánh sáng:</b>
                                        <br>
                                        Cây đặt trong nhà với ánh sáng của đèn huỳnh quang thì cây vẫn đáp ứng được với điều kiện sinh trưởng và phát triển. nhiên để cây phát triển tốt, thình thoảng ta nên đưa cây ra ngoài trời dưới tán cây lớn với chu kỳ 10 ngày/lần, như vậy cây sẽ hấp thụ được ánh sáng và phát triển tốt hơn.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="other">
            <!-- img-title -->
            <div class="img-title">
                <div class="d-flex">
                    <div class="justify-content-start bg-green tree">
                        <img src="./img/cay.png" alt="">
                    </div>
                    <div class="bg-green content p-2">
                        <b>Sản phẩm liên quan</b>
                    </div>
                    <div class="icon flex-grow-1 bg-gray">
                        <img src="./img/icon_section1.png" alt="">
                    </div>
                </div>
            </div>
            <!-- slide -->
            <div class="slide">
                <section class="">
                    <div class="autoplay">
                        <div class="sp">
                            <a href="./sanphamchitiet.html">
                                <div class="card px-1">
                                    <img src="./img/Cay-kim-tien.png" class="" alt="...">
                                    <div class="card-body">
                                        <p class="card-text name">Cây Kim Tiền</p>
                                        <p class="card-text price">1.810.000đ</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="sp">
                            <a href="./sanphamchitiet.html">
                                <div class="card px-1">
                                    <img src="./img/Cay-van-nien-thanh.png" class="" alt="...">
                                    <div class="card-body">
                                        <p class="card-text name">Cây Vạn Thiên Thanh</p>
                                        <p class="card-text price">1.810.000đ</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="sp">
                            <a href="./sanphamchitiet.html">
                                <div class="card px-1">
                                    <img src="./img/Cay-thuong-xuan.png" class="w-100 h-100" alt="...">
                                    <div class="card-body">
                                        <p class="card-text name">Cây Thường Xuân</p>
                                        <p class="card-text price">1.810.000đ</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="sp">
                            <a href="./sanphamchitiet.html">
                                <div class="card px-1">
                                    <img src="./img/Cay-canh-dep.png" class="" alt="...">
                                    <div class="card-body">
                                        <p class="card-text name">Cây cảnh đẹp</p>
                                        <p class="card-text price">1.810.000đ</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="sp">
                            <div class="card px-1">
                                <img src="./img/Cay-kim-tien.png" class="" alt="...">
                                <div class="card-body">
                                    <p class="card-text name">Cây Kim Tiền</p>
                                    <p class="card-text price">1.810.000đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="sp">
                            <a href="./sanphamchitiet.html">
                                <div class="card px-1">
                                    <img src="./img/Cay-van-nien-thanh.png" class="" alt="...">
                                    <div class="card-body">
                                        <p class="card-text name">Cây Vạn Thiên Thanh</p>
                                        <p class="card-text price">1.810.000đ</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="sp">
                            <a href="./sanphamchitiet.html">
                                <div class="card px-1">
                                    <img src="./img/Cay-thuong-xuan.png" class="" alt="...">
                                    <div class="card-body">
                                        <p class="card-text name">Cây Thường Xuân</p>
                                        <p class="card-text price">1.810.000đ</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="sp">
                            <a href="./sanphamchitiet.html">
                                <div class="card px-1">
                                    <img src="./img/Cay-canh-dep.png" class="" alt="...">
                                    <div class="card-body">
                                        <p class="card-text name">Cây cảnh đẹp</p>
                                        <p class="card-text price">1.810.000đ</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection