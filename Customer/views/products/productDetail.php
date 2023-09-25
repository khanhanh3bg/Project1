<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body{
            position: relative;
            width: 100%;
            height: 1100px;
        }

        .logo{
            position: absolute;
            width: 80px;
            height: 100px;
            left: 665px;
            top: 30px;
        }

        .nameShop{
            position: absolute;
            width: 237px;
            height: 46px;
            left: 730px;
            top: 27px;
            font-family: 'SeoulHangang CB';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 36px;
            color: #000000;
        }

        .nameShop1{
            position: absolute;
            width: 106px;
            height: 6px;
            left: 735px;
            top: 60px;
            font-family: 'Syne Tactile';
            font-style: normal;
            font-weight: 400;
            font-size: 23px;
            line-height: 36px;
            color: #A6A3A3;
        }

        .logoCart{
            position: absolute;
            width: 35px;
            height: 35px;
            left: 1289px;
            top: 47px;
        }

        .logout{
            position: absolute;
            width: 100px;
            height: 35px;
            left: 1352px;
            top: 47px;
            text-decoration: none;
            color: black;
            font-size: 20px;
        }

        .div1{
            /*position: fixed ;*/
            /*border-bottom:solid black;*/
            height: 200px;
            -moz-box-shadow: 3px 3px 5px 0px #666;
            -webkit-box-shadow: 3px 3px 5px 0px #666;
            box-shadow: 3px 3px 5px 0px #666;
        }

        .menuChildList li{
            padding: 1.5rem;
            border-top: 1px solid white;
        }

        ul{
            list-style-type: none;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        @-webkit-keyframes fade {
            from {opacity: .1}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .9}
            to {opacity: 1}
        }

        h2{
            position: absolute;
            width: 244px;
            height: 59px;
            left: 690px;
            top: 955px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 35px;
            line-height: 42px;
            color: #000000;
        }


        .div4{
            position: absolute;
            border-top:2px solid black;
            width: 100%;
            height: 371px;
            left: 0px;
            bottom:0px;
        }

        .img1{
            width: 50%;
            height: 50%;
        }

        .footer1{
            padding: 20px 30px 20px 20px;
            width: 25%;

        }

        .footer2{
            padding: 24px 30px 20px 20px;
            width: 25%;
        }

        .footer3{
            padding: 16px 30px 20px 20px;
            width: 25%;

        }

        .footer4{
            padding: 30px 30px 20px 20px;
            width: 25%;
        }

        .imageProduct{
            width: 347px;
            height: 396px;
        }

        .div2{
            padding-top: 40px;
            padding-right: 200px;
            padding-left: 200px;
        }

        .inforProduct{
            position: relative;
            top: -370px;
            left: 370px;
            width: 500px;
            padding-right: 20px;
            border-right:solid 1px black ;
        }

        .nameProduct{
            font-size: 23px;
        }

        .price{
            font-size: 23px;
            color: red;
        }

        .div3{
            position: relative;
            top: -665px;
            left: 900px;
        }

        h1{
            text-align: center;
        }
    </style>
    <title>Home</title>
</head>
<body>
<div class="div1">
    <table >
        <tr>
            <td>
                <a href="index.php?controller=product">
                <img class="logo" src="Image/logo.png">
                </a>
            </td>

            <td>
                <a href="index.php?controller=product">
                <p class="nameShop">CHARMANT</p>
                <br>
                <p class="nameShop1">DE' PRINCE</p>
                </a>
            </td>

            <td>
                <a class="cart" href="index.php?controller=cart">
                    <img class="logoCart" src="Image/logoCart.png">
                </a>
            </td>

            <td>
                <a class="logout" href="index.php?controller=customer&action=logout">
                    Đăng xuất
                </a>
            </td>


        </tr>
    </table>
</div>
<br>
<h1>CHI TIẾT SẢN PHẨM</h1>

<div class="div2">
    <?php
    foreach ($products as $product)
    {
    ?>
    <div>
        <img class="imageProduct" src="<?= $product['Product_image'] ?>">
    </div>

    <div class="inforProduct">
        <p class="nameProduct"> <?= $product['Product_name'] ?> </p>

        <p class="price"> <?= $product['Product_price'].'vnđ' ?> </p>
<!--        <br>-->
        <p> <?= $product['Product_description'] ?> </p>
        <a onclick="return addCart()" href="index.php?controller=cart&action=add_cart" class="btn btn-danger">Thêm vào giỏ hàng</a>
    </div>

    <div class="div3">
        <table>
            <tr>
                <td> <img src="https://lisa.vn/wp-content/uploads/2020/06/product-baohanh.png"> </td>
                <td>
                    <b>Bảo hành</b>
                    <br>
                    <p>Đổi trả trong 30 ngày</p>
                </td>
            </tr>

            <tr>
                <td> <img src="https://lisa.vn/wp-content/uploads/2020/06/product-installment.png"> </td>
                <td>
                    <b>Hoàn tiền 111%</b>
                    <br>
                    <p>Nếu phát hiện hàng giả</p>
                </td>
            </tr>

            <tr>
                <td> <img src="https://lisa.vn/wp-content/uploads/2020/06/product-shipping.png"> </td>
                <td>
                    <b>Miễn phí Ship</b>
                    <br>
                    <p>Đơn hàng > 800.000đ</p>
                </td>
            </tr>

        </table>
    </div>
    <?php
    }
    ?>
</div>

<div class="div4">
    <table>
        <tr>
            <td class="footer1">
                <h3><b>Về Charmant Shop</b></h3>
                <br>
                <p><b>Charmant Shop</b> là cửa hàng chuyên cung cấp các sản phẩm quà tặng, mỹ phẩm, sản phẩm làm đẹp, hàng hiệu chính hãng, của các thương hiệu nổi tiếng trên thế giới.</p>
                <br>
                <br>
                <p><b>Hotline:</b> 079 313 3888</p>
                <br>
                <p><b>Email:</b> khanhbi345@gmail.com</p>
                <br>
                <p><b>Địa chỉ:</b> T1, Tòa nhà N04B, Khu Ngoại giao đoàn, Bắc Từ Liêm, Hà Nội</p>
            </td>

            <td class="footer2">
                <h3><b>Thông tin cần biết</b></h3>
                <br>
                <p>Giới thiệu về Charmant</p>
                <br>
                <p>Điều khoản & Điều kiện</p>
                <br>
                <p>Chính sách bảo mật</p>
                <br>
                <p>Hướng dẫn mua hàng</p>
                <br>
                <p>Chính sách đổi trả</p>
                <br>
                <p>Giao hàng & thanh toán</p>
            </td>

            <td class="footer3">
                <h3><b>Blog làm đẹp</b></h3>
                <br>
                <p>Top list</p>
                <br>
                <p>Góc Review</p>
                <br>
                <p>Kinh Nghiệm Hay</p>
                <br>
                <p>Blog Quà Tặng</p>
                <br>
                <p></p>
                <br>
                <p></p>
                <br>
                <p></p>
            </td>

            <td class="footer4">
                <h3><b>Follow US</b></h3>
                <br>
                <img class="img1" src="Image/dathongbaobocongthuong.png">
                <br>
                <img src="Image/DMCA.png">
                <br>
                <img class="img1" src="Image/cloudflare.jpg">
                <br>
                <p></p>
                <br>
                <p></p>
                <br>
                <p></p>
                <br>
                <p></p>
                <br>
                <p></p>
                <br>
                <p></p>
            </td>
        </tr>
    </table>
</div>

<script>
    function addCart(){
        return alert('Đã thêm sản phẩm vào giỏ hàng!');
    }
</script>
</body>
</html>