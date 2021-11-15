<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Shopee</title>
</head>

<body>
    <div class="header">
        <div class="header-top">
            <div class="heafer-top-le">
                <div class="heafer-top-le-menu">
                    <a href="">Kênh Người Bán</a>
                    <a href="">Trở thành Người bán Shopee</a>
                    <a href="">Tải ứng dụng</a>
                </div>
                <div class="heafer-top-le-menu-icon-ketnoi">
                    <span>Kết nối</span>
                    <a href=""><img src="./Public/img/icons8-facebook-24.png" alt=""></a>
                    <a href=""><img src="./Public/img/icons8-instagram-24.png" alt=""></a>
                </div>
            </div>
            <div class="heafer-top-ri">
                <ul>
                    <a href="">
                        <img src="./Public/img/icons8-bell-64.png" alt="">
                        <span>Thông Báo</span>
                    </a>
                </ul>
                <ul>
                    <a href="">
                        <img src="./Public/img/icons8-help-32.png" alt="">
                        <span>Hỗ Trợ</span>
                    </a>
                </ul>
                <ul>
                    <a class="dang-ky" href="">
                        <span>Đăng Ký</span>
                    </a>
                </ul>
                <ul>
                    <a href="">
                        <span>Đăng Nhập</span>
                    </a>
                </ul>
            </div>
        </div>
        <div class="header-bottom">
            <div class="logo">
                <a href="">
                    <img src="./Public/img/icons8-shopee-50.png" alt="">
                    <span>Shopee</span>
                </a>
            </div>
            <div class="search">
                <div class="form-search">
                    <div class="form-search-key">
                        <form action="">
                            <input class="input-search" type="text" placeholder="Tìm trong Shop này" name="search">

                        </form>
                        <div class="form-chon">
                            <a href="">Trong Shop này
                                <ul class="form-chon-sub-menu">
                                    <li><a href="">Trong Shop này</a></li>
                                    <li><a href="">Trong Shopee</a></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <button>
                        <img src="./Public/img/icons8-search-24.png">
                    </button>
                </div>
                <div class="menu-search">
                    <a href="">Áo Khoác</a>
                    <a href="">Váy</a>
                    <a href="">Quần</a>
                    <a href="">Túi Xách Nữ</a>
                    <a href="">Dép</a>
                    <a href="">Chân Váy</a>
                    <a href="">Dép Nữ</a>
                    <a href="">Tai Nghe</a>
                </div>
            </div>
            <div class="cart">
                <a href=""><img src="./Public/img/icons8-shopping-cart-48.png" alt=""></a>
            </div>
        </div>
    </div>
    <div class="home">
        <div class="list">
            <div class="shop-seller">
                <div class="logo-shop-seller">
                    <div class="blur"></div>
                    <img src="./Public/img/logo-shop-seller.jpg">
                </div>
                <div class="shop-like">
                    <span>Yêu Thích +</span>
                </div>
                <div class="name-shop-seller">ỐP LƯNG IPHONE- SH...</div>
            </div>
            <div class="list-pro">
                <div class="list-pro-header">
                    <span>DANH MỤC SHOP</span>
                </div>
                <div class="list-pro-body">
                    <div class="list-pro-body-title">
                        <span>Sản Phẩm</span>
                    </div>
                    <div class="list-pro-body-product">
                        <a>💗 New Arrival 💗</a>
                        <a>💗 Top Bán Chạy 💗</a>
                        <a>⚡ Giá 5K Hủy Diệt ⚡</a>
                        <a>🔥 9K Hủy Diệt 🔥</a>
                        <a>💖 Size XR 💖</a>
                        <a>🍒 Cạnh Vuông 12 🍒</a>
                        <a>🍀 Ốp Bảo Vệ Cam 🍀</a>
                        <a>🎁 Ốp Trong Dẻo 🎁</a>
                        <a>🎉 Chất IMD Hịn Hò 🎉</a>
                        <a>🍊 Sọc Chất Varnish 🍊</a>
                        <a>🎈🎈Case Airpods 🎈🎈</a>
                        <a>🌈🌈 Phụ Kiện 🌈🌈</a>
                        <a>⭐ Trending 2021 ⭐</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="menu-sort-bar-pro">
                <span>Sắp xếp theo</span>
                <div class="menu-sort-bar-pro-sub">
                    <ul class="menu-sort-bar-pro-sub-choose">
                        <a href="">Phổ Biến</a>
                    </ul>
                    <ul class="menu-sort-bar-pro-sub-choose">
                        <a href="">Mới Nhất</a>
                    </ul>
                    <ul class="menu-sort-bar-pro-sub-choose">
                        <a href="">Bán chạy</a>
                    </ul>
                    <ul class="menu-sort-bar-pro-sub-money">
                        <a href="">
                            <span>Giá</span>
                        </a>
                    </ul>
                </div>
                <div class="menu-sort-bar-pro-mini-page"></div>
            </div>
            <div class="menu-product"></div>
        </div>
    </div>
    <div class="footer"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.js"> </script>

<script >
    $(document).ready(function() {
        $('.form-chon-sub-menu').parent('a').addClass('has-child')
    }); 
</script>
</body>

</html>