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
            height: 2900px;
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

        .logoCreate{
            position: absolute;
            width: 35px;
            height: 35px;
            left: 1230px;
            top: 50px;
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


        ul{
            list-style-type: none;
        }

        .slideshow-container {
            /*position: absolute;*/
            top: 25px;
            width: 100%;
            height: 700px;
            position: relative;
            /*margin: auto;*/
            overflow: hidden;
            padding-left: 100px;
            padding-right: 100px;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 3s;
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

        .dior{
            position: absolute;
            width: 244px;
            height: 59px;
            left: 700px ;
            top: 1750px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 35px;
            line-height: 42px;
            color: #000000;
        }

        .div4{
            position: absolute;
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

        .div4{
            border-top:2px solid black;
        }

        .div5{
            height: 500px;
            width: 100%;
            padding-left: 50px;
            padding-right: 50px;
        }

        .listProduct{
            display: flex;
            flex-wrap: wrap;
        }

        .product{
            position: relative;
            width: 25%;
            justify-content: center;
            text-align: center;
            top: 40px;
        }

        .product1{
            position: relative;
            width: 25%;
            justify-content: center;
            text-align: center;
            top: 410px;
        }

        .nameProduct{
            text-decoration: none;
            color: black;
            width: 70%;
            text-align: center;
            padding-left: 40px;
        }

        .imageProduct{
            height: 50%;
            width: 50%;
        }

        .price{
            color: red;
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
            <a href="products/createProduct.php">
                <img class="logoCreate" src="Image/logoCreate.png">
            </a>
        </td>

        <td>
            <a class="cart" href="index.php?controller=cart">
                <img class="logoCart" src="Image/logoCart.png">
            </a>
        </td>
        <?php
        if(isset($_SESSION['email'])){
            ?>
            <td>
                <a class="logout" href="index.php?controller=customer&action=logout">
                    Đăng xuất
                </a>
            </td>
        <?php
        }else{
            ?>
            <td>
                <a class="logout" href="index.php?controller=customer&action=login">
                    Đăng nhập
                </a>
            </td>
        <?php
        }
        ?>
    </tr>
</table>
</div>

<div class="slideshow-container">
    <div class="mySlides fade">
        <img src="Image/banner1.jfif" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="https://image.freepik.com/free-vector/lipstick-template-banner_33099-1943.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="https://4.bp.blogspot.com/-_UQ0GszLL8o/XFnGMY_TbMI/AAAAAAAAB9o/YfEXhdJ2hhoQX3MzuAdIJEJR-x_9dVWjACLcBGAs/w1200-h630-p-k-no-nu/51509284_2181152911943861_1091999785809870848_n.png" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<div class="div5">
    <h2>SON GUCCI</h2>
    <br>
    <br>
    <br>
    <br>
    <ul class="listProduct">
        <?php
        foreach ($array['products1'] as $product){
            $id = $product['ID_product']
            ?>
            <li class="product">
                <a href="index.php?controller=product&action=product_detail&id=<?=$id?>">
                    <img class="imageProduct" src="<?= $product['Product_image'] ?>">
                    <br>
                </a>
                <a href="index.php?controller=product&action=product_detail&id=<?=$id?>" class="nameProduct">
                    <?= $product['Product_name'] ?>
                </a>
                <p class="price"> <?= $product['Product_price'] .'vnđ' ?></p>
                <a <?php if(isset($_SESSION['email'])){
                    ?>
                    onclick="return addCart()"
                        <?php
                }else{?>
                    onclick="return login() "
                        <?php
                        }
                        ?>href="index.php?controller=cart&action=add_cart&id=<?= $id ?>">
                    <button type="button" class="btn btn-danger">Thêm vào giỏ hàng</button>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>

<div class="div5">
    <h2 class="dior">SON DIOR</h2>
    <ul class="listProduct">
        <?php
        foreach ($array['products2'] as $product){
            $id = $product['ID_product']
            ?>
            <li class="product1">
                <a href="index.php?controller=product&action=product_detail&id=<?=$id?>">
                    <img class="imageProduct" src="<?= $product['Product_image'] ?>" >
                    <br>
                </a>
                <a href="index.php?controller=product&action=product_detail&id=<?=$id?>" class="nameProduct">
                    <?= $product['Product_name'] ?>
                </a>
                <p class="price"> <?= $product['Product_price'] .'vnđ' ?></p>
                <a <?php if(isset($_SESSION['email'])){
                    ?>
                    onclick="return addCart()"
                    <?php
                }else{?>
                    onclick="return login() "
                    <?php
                }
                ?> href="index.php?controller=cart&action=add_cart&id=<?= $id ?>">
                    <button type="button" class="btn btn-danger">Thêm vào giỏ hàng</button>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
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

<br>
<br>
<br>
<br>

    <script>
        var slideIndex = 0;
        showSlides();

        // Next/previous controls
        function plusSlides(n) {
            showSlides2(slideIndex += n);
        }

        function showSlides2(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");

            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex-1].style.display = "block";
        }

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 2000);
        }

        function addCart(){
            return alert('Đã thêm sản phẩm vào giỏ hàng!');
        }

        function login(){
            return alert('Vui lòng đăng nhập để tiếp tục!');
        }
    </script>
</body>
</html>