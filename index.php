<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./Public/css/fontawesome.css">
    <script src="js/js.js"></script>
</head>

<body>
    <div id="header">
        <div class="header-top">
            <div class="header-container">
                <div class="left">
                    <div class="header-menu-left">
                        <div class="knb"><a href="" style="text-decoration: none;font-size: 13px;color: #fff;line-height: 13px;">Kênh Người Bán</a></div>
                        <div class="tud"><a href="" style="text-decoration: none;font-size: 13px;color: #fff;line-height: 13px">Tải Ứng Dụng</a></div>
                        <div class="kn">Kết Nối</div>
                        <div class="fb">
                            <a href="">
                                <div class="logo-fb"><img src="img/icons8-facebook-24.jpg" alt=""></div>
                            </a>
                        </div>
                        <div class="insta">
                            <a href="">
                                <div class="logo-insta"><img src="img/icons8-instagram-24.jpg" alt=""></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="header-menu-right">
                        <div><img src="img/icons8-bell-64.jpg" alt="" width="20px" height="20px"></div>
                        <div class="tb"><a href="" style="text-decoration: none;color: #fff;font-size: 13px;line-height: 22px;">Thông báo</a></div>
                        <div><img src="img/icons8-help-32.jpg" alt="" width="20px" height=20px"></div>
                        <div class="ht"><a href="" style="text-decoration: none;color: #fff;font-size: 13px;line-height: 22px;">Hỗ Trợ</a></div>
                        <div class="tk"><a href="" style="text-decoration: none;color: #fff;font-size: 13px;line-height: 22px;">Tài Khoản</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-banner">
            <div class="header-banner-container">
                <div class="header-banner-left">
                    <div class="header-logo"><a href=""><img src="img/shopee-logo.png" alt=""></a></div>
                    <div class="header-title"><a href="">Shopee</a></div>
                    <div class="a-stick"></div>
                    <div class="header-controller"><a href="">Giỏ Hàng</a></div>
                </div>
                <div class="header-banner-right">
                    <div class="header-search">
                        <form action="" method="">
                            <input type="text" placeholder="MUA E-VOUCHER CHỈ TỪ 1K">
                            <button type="submit"><img src="img/icons8-search-16.png" alt="" style="background-repeat: no-repeat;" width="16px" height="16px"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="mid">
            <div class="mid-one">
                <div class="mid-cart">
                    <div class="code-free">
                        <div class="container">
                            <div class="free-shopping-truck"><img src="img/freeship-truck.png" alt="" width="22px" height="22px" style="margin-top: 3px;"></div>
                            <div class="code-free-content">Nhấn vào mục Mã giảm giá ở cuối trang để hưởng miễn phí vận chuyển bạn nhé!</div>
                        </div>
                    </div>
                    <div class="mid-title">
                        <div class="square"><input type="checkbox" name="cc" id="c1">
                            <label for="c1"><span></span>Sản Phẩm</label>
                        </div>
                        <div class="mid-title1">
                            <div class="dongia">Đơn Giá</div>
                            <div class="soluong">Số Lượng</div>
                            <div class="sotien">Số Tiền</div>
                            <div class="thaotac">Thao Tác</div>
                        </div>
                    </div>
                    <div class="mid-sp">
                        <div class="mid-sp1">
                            <div class="square1"><input type="checkbox" name="cc" id="c2">
                                <a href="">Yêu thích+</a>
                                <label for="c2"><span></span>ỐP LƯNG IPHONE - SHIN CASE</label>
                            </div>
                            <div class="mid-sanpham-detail">
                                <div class="square2">
                                    <input type="checkbox" name="cc" id="c3">
                                    <div><img src="img/sanpham1.jpg" alt="" width="100px" style="padding-left: 20px;padding-right: 10px;"></div>
                                    <label for="c3"><a href="">Ốp lưng iphone England cạnh vuông 6/6plus/6s/6splus/7/7plus/8/8plu...</a>
                                        <img src="img/extrafreeship.jpg" alt="">
                                    </label>
                                </div>
                                <div class="phanloai"></div>
                                <div class="mid-sp-detail">
                                    <div class="dongia">
                                        <div class="dongia1">₫44.000</div>
                                        <div class="dongia2">₫22.000</div>
                                    </div>
                                    <div class="soluong" style="padding-left: 30px;">
                                        <div class="tang"><input onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1); result.value--;return false;" type='button' value='-' /></div>
                                        <div class="blank-tang-giam"><input id='quantity' min='1' name='quantity' type='text' value='1' /></div>
                                        <div class="giam"><input onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' /></div>
                                    </div>
                                    <div class="sotien">
                                        <p>₫22.000</p>
                                    </div>
                                    <div class="thaotac">
                                        <div class="chucnang-xoa"><a href="">Xóa</a></div>
                                        <div class="chuc-nang-noi-chung">
                                            <div class="timkiemsanphantuongtu">
                                                <button onclick="myFunction()" class="dropbtn">Tìm kiếm sản phẩm tương tự</button>
                                                <div id="myDropdown" class="dropdown-content">
                                                    <div class="table-product">
                                                        <?php
                                                        include('./connect_db.php');
                                                        ?>
                                                        <?php
                                                        $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 6;
                                                        $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
                                                        $offset = ($current_page - 1) * $item_per_page;
                                                        $sqlsanpham = "SELECT * FROM products ORDER BY id ASC LIMIT " . $item_per_page . " OFFSET " . $offset . " ";
                                                        $pro = mysqli_query($con, $sqlsanpham);
                                                        $totalRecords = mysqli_query($con, "SELECT * FROM products ");
                                                        $totalRecords = $totalRecords->num_rows;
                                                        $totalPages = ceil($totalRecords / $item_per_page);
                                                        ?>
                                                        <?php while ($row = mysqli_fetch_array($pro)) { ?>
                                                            <div class="table-menu-product">
                                                                <a href="">
                                                                    <div class="menu-product-content-item">
                                                                        <img src="img/<?php echo $row['image1'] ?>" alt="">
                                                                    </div>
                                                                    <div class="menu-product-content-detail">
                                                                        <div class="menu-product-content-detail-name">
                                                                            <span><?= $row['name'] ?></span>
                                                                        </div>
                                                                        <div class="menu-product-content-detail-price">
                                                                            <span>đ <?= number_format($row['price'], 0, ",", ".") ?></span>
                                                                            <img src="img/freeship-truck.png" alt="">
                                                                        </div>
                                                                        <div class="menu-product-content-detail-sold">
                                                                            <div class="menu-product-content-detail-sold-i">
                                                                                <i class="far fa-heart"></i>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                            </div>
                                                                            <span>Đã bán 12,2k</span>
                                                                        </div>
                                                                        <div class="menu-product-content-detail-address">
                                                                            <span>Hà Nội</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                        <div class="pagination">
                                                            <ul class="pagination-home-product-pagination">
                                                                <?php
                                                                include('pagination.php');
                                                                ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-muiten">
                                                <a href="">
                                                    <div class="button-mui-ten"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mid-sanpham-detail">
                                <div class="square2">
                                    <input type="checkbox" name="cc" id="c3">
                                    <div><img src="img/sanpham2.jpg" alt="" width="100px" style="padding-left: 20px;padding-right: 10px;"></div>
                                    <label for="c3"><a href="">Ốp lưng iphone Ống nhòm cạnh vuông 6/6plus/6s/6splus/7/7plus/8/8plus/x/xr...</a>
                                        <img src="img/extrafreeship.jpg" alt="">
                                    </label>
                                </div>
                                <div class="phanloai"></div>
                                <div class="mid-sp-detail">
                                    <div class="dongia">
                                        <div class="dongia1">₫40.000</div>
                                        <div class="dongia2">₫32.000</div>
                                    </div>
                                    <div class="soluong1" style="padding-left: 30px;">
                                        <div class="tang1"><input onclick="var result = document.getElementById('quantity1'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1); result.value--;return false;" type='button' value='-' /></div>
                                        <div class="blank-tang-giam1"><input id='quantity1' min='1' name='quantity' type='text' value='1' /></div>
                                        <div class="giam1"><input onclick="var result = document.getElementById('quantity1'); var qty = result.value ; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' /></div>
                                    </div>
                                    <div class="sotien">
                                        <p>₫32.000</p>
                                    </div>
                                    <div class="thaotac">
                                        <div class="chucnang-xoa"><a href="">Xóa</a></div>
                                        <div class="chuc-nang-noi-chung">
                                            <div class="timkiemsanphantuongtu">
                                                <button onclick="myFunction1()" class="dropbtn1">Tìm kiếm sản phẩm tương tự</button>
                                                <div id="myDropdown1" class="dropdown-content1">
                                                    <div class="table-product">
                                                        <?php
                                                        include('./connect_db.php');
                                                        ?>
                                                        <?php
                                                        $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 6;
                                                        $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
                                                        $offset = ($current_page - 1) * $item_per_page;
                                                        $sqlsanpham = "SELECT * FROM products ORDER BY id ASC LIMIT " . $item_per_page . " OFFSET " . $offset . " ";
                                                        $pro = mysqli_query($con, $sqlsanpham);
                                                        $totalRecords = mysqli_query($con, "SELECT * FROM products ");
                                                        $totalRecords = $totalRecords->num_rows;
                                                        $totalPages = ceil($totalRecords / $item_per_page);
                                                        ?>
                                                        <?php while ($row = mysqli_fetch_array($pro)) { ?>
                                                            <div class="table-menu-product">
                                                                <a href="">
                                                                    <div class="menu-product-content-item">
                                                                        <img src="img/<?php echo $row['image1'] ?>" alt="">
                                                                    </div>
                                                                    <div class="menu-product-content-detail">
                                                                        <div class="menu-product-content-detail-name">
                                                                            <span><?= $row['name'] ?></span>
                                                                        </div>
                                                                        <div class="menu-product-content-detail-price">
                                                                            <span>đ <?= number_format($row['price'], 0, ",", ".") ?></span>
                                                                            <img src="img/freeship-truck.png" alt="">
                                                                        </div>
                                                                        <div class="menu-product-content-detail-sold">
                                                                            <div class="menu-product-content-detail-sold-i">
                                                                                <i class="far fa-heart"></i>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                            </div>
                                                                            <span>Đã bán 12,2k</span>
                                                                        </div>
                                                                        <div class="menu-product-content-detail-address">
                                                                            <span>Hà Nội</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                        <div class="pagination">
                                                            <ul class="pagination-home-product-pagination">
                                                                <?php
                                                                include('pagination.php');
                                                                ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-muiten">
                                                <div class="button-mui-ten"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="more-detail1"><img src="img/ticket.png" alt=""> Shop Voucher giảm đến ₫50k<a href="">Xem thêm voucher</a></div>
                            <div class="more-detail2"><img src="img/freeship-truck.png" alt="">Giảm ₫25.000 phí vận chuyển đơn tối thiểu ₫50.000; Giảm ₫70.000 phí vận chuyển đơn tối thiểu ₫300.000 <a href="">Tìm hiểu thêm</a></div>
                        </div>
                        <div class="mid-thanhtoan">
                            <div class="mid-thanhtoan1">
                                <div class="voucher"><img src="img/ticket.png" alt="">Shopee Voucher</div>
                                <div class="nhapma"><a href="">Chọn Hoặc Nhập Mã</a></div>
                            </div>
                            <div class="mid-thanhtoan2">
                                <div class="sudung-shopee-xu">
                                    <input type="checkbox" name="cc" id="c3">
                                    <div class="dollar-symbol"><img src="img/dollar-symbol.png" alt=""></div>
                                    <div class="shopee-xu">Shopee Xu</div>
                                    <div class="shopee-xu-on-off">Không thể sử dụng Xu</div>
                                    <div class="question-mark"><img src="img/question-mark.png" alt="" width="14px" height="14px"></div>
                                </div>
                                <div class="tien">-₫0</div>
                            </div>
                            <div class="mid-thanhtoan3">
                                <div class="mid-thanhtoan3-left">
                                    <div><input type="checkbox" name="cc" id="c3"></div>
                                    <div class="chon-tat-ca"><a href="">Chọn Tất Cả (2)</a></div>
                                    <div class="xoa"><a href="">Xóa</a></div>
                                    <div class="luu"><a href="">Lưu vào mục Đã th...</a></div>
                                </div>
                                <div class="mid-thanhtoan3-right">
                                    <div class="tongthanhtoan">Tổng thanh toán (0 Sản phẩm):</div>
                                    <div class="Tien">₫0</div>
                                    <div><input type="button" value="Mua Hàng"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid-two">
                <div class="container">
                    <?php
                    include('./connect_db.php');
                    ?>
                    <?php
                    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 6;
                    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
                    $offset = ($current_page - 1) * $item_per_page;
                    $sqlsanpham = "SELECT * FROM products ORDER BY id ASC LIMIT " . $item_per_page . " OFFSET " . $offset . " ";
                    $pro = mysqli_query($con, $sqlsanpham);
                    $totalRecords = mysqli_query($con, "SELECT * FROM products ");
                    $totalRecords = $totalRecords->num_rows;
                    $totalPages = ceil($totalRecords / $item_per_page);
                    ?>
                    <?php while ($row = mysqli_fetch_array($pro)) { ?>
                        <div class="table-menu-product1">
                            <a href="">
                                <div class="menu-product-content-item1">
                                    <img src="img/<?php echo $row['image1'] ?>" alt="">
                                </div>
                                <div class="menu-product-content-detail1">
                                    <div class="menu-product-content-detail-name1">
                                        <span><?= $row['name'] ?></span>
                                    </div>
                                    <div class="menu-product-content-detail-price1">
                                        <span>đ <?= number_format($row['price'], 0, ",", ".") ?></span>
                                        <img src="img/freeship-truck.png" alt="">
                                    </div>
                                    <div class="menu-product-content-detail-sold1">
                                        <div class="menu-product-content-detail-sold-i1">
                                            <i class="far fa-heart"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span>Đã bán 12,2k</span>
                                    </div>
                                    <div class="menu-product-content-detail-address1">
                                        <span>Hà Nội</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="pagination1">
                        <ul class="pagination-home-product-pagination1">
                            <?php
                            include('pagination.php');
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mid-three"></div>
        </div>
        <!-- <div id="footer">
            <div class="footer1">
                <div>CHÍNH SÁCH BẢO MẬT</div>
                <div>QUY CHẾ HOẠT ĐỘN</div>
                <div>CHÍNH SÁCH VẬN CHUYỂN</div>
                <div>CHÍNH SÁCH TRẢ HÀNG VÀ HOÀN TIỀN</div>
            </div>
            <div class="footer2"></div>
            <div class="footer3"></div>
        </div> -->
</body>

</html>