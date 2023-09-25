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
            height: 1875px;
        }

        .btnSearch{
            position: absolute;
            background: white;
            border: none;
            width: 37px;
            height: 27px;
            left: 331px;
            top: 46px;
        }

        .form-control{
            position: relative;
            width: 279px;
            height: 47px;
            left: 99px;
            top: 40px;
            border-radius: 10px;
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

        .logoCreate{
            position: absolute;
            width: 35px;
            height: 35px;
            left: 1352px;
            top: 47px;
        }

        .div1{
            /*position: fixed ;*/
            /*border-bottom:solid black;*/
            height: 200px;
            -moz-box-shadow: 3px 3px 5px 0px #666;
            -webkit-box-shadow: 3px 3px 5px 0px #666;
            box-shadow: 3px 3px 5px 0px #666;
        }

        .div2{
            position: relative;
            width: 100%;
            height: 63px;
            left: 0px;
            top: 110px;
            background: #D9D9D9;
        }

        .menu{
            display: flex;
            align-items: center;
        }


        .menuItem1:hover .menuChild1{
            position: absolute;
            opacity: 1;
            visibility: visible;
        }

        .menuItem2:hover .menuChild2{
            position: absolute;
            opacity: 1;
            visibility: visible;
        }

        .menuChild1{
            position: absolute;
            top: 70px;
            left: 350px;
            width: 100%;
            background: white;
            display: flex;
            opacity: 0;
            visibility: hidden;
            transition: 0.25s linear;
        }

        .menuChild2{
            position: absolute;
            top: 70px;
            left: 850px;
            width: 100%;
            background: white;
            display: flex;
            opacity: 0;
            visibility: hidden;
            transition: 0.25s linear;
        }

        .menuChildItem{
            width: 25%;
        }

        .menuChildList li{
            padding: 1.5rem;
            border-top: 1px solid white;
        }

        .category1{
            text-decoration: none;
            position: absolute;
            width: 214px;
            height: 13px;
            left: 396px;
            top: 20px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 26px;
            line-height: 31px;
            color: #000000;
        }

        .home{
            text-decoration: none;
            position: absolute;
            width: 214px;
            height: 13px;
            left: 690px;
            top: 20px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 26px;
            line-height: 31px;
            color: #000000;
        }

        .category2{
            left: 900px;
            text-decoration: none;
            position: absolute;
            width: 214px;
            height: 13px;
            top: 20px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 26px;
            line-height: 31px;
            color: #000000;
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
            left: 614px;
            top: 970px;
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
            top: 1504px;
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
    </style>
    <title>Home</title>
</head>
<body>
<div class="div1">
<table >
    <tr>
        <td>
            <form method="GET" id="searchForm">
                <input type="text" name="kw" class="form-control" placeholder="Nhập từ khóa...">
                <button type="submit" class="btnSearch">
                    <img src="Image/search.png">
                </button>
            </form>
        </td>

        <td>
            <img class="logo" src="Image/logo.png">
        </td>

        <td>
            <p class="nameShop">CHARMANT</p>
            <br>
            <p class="nameShop1">DE' PRINCE</p>
        </td>

        <td>
            <a class="btnOrderList" href="../orderList.php">
                <img class="logoCart" src="Image/logoCart.png">
            </a>
        </td>

        <td>
            <a class="btnCreate" href="products/createProduct.php">
                <img class="logoCreate" src="Image/logoCreate.png">
            </a>
        </td>
    </tr>
</table>

    <div class="div2">
        <ul class="menu">
            <li class="menuItem1">
                <a href="" class="category1">LOUIS VUITTON</a>
                <div class="menuChild1">
                    <div class="menuChildItem">
                        <ul class="menuChildList">
                            <li>Item 1</li>
                            <li>Item 1</li>
                            <li>Item 1</li>
                            <li>Item 1</li>
                            <li>Item 1</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="menuItem2">
                <a href="" class="category2">DIOR</a>
                <div class="menuChild2">
                    <div class="menuChildItem">
                        <ul class="menuChildList">
                            <li>Item 1</li>
                            <li>Item 1</li>
                            <li>Item 1</li>
                            <li>Item 1</li>
                            <li>Item 1</li>
                        </ul>
                    </div>
                </div>
            </li>
            <a class="home" href="home.php">HOME</a>
        </ul>
    </div>
</div>

<div class="slideshow-container">
    <div class="mySlides fade">
        <img src="../Image/banner1.jfif" style="width:100%">
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

    <h2>FLASH SALES</h2>


<div class="div3">
    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
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

<a href="index.php?controller=customer">Customer</a>
<a href="index.php?controller=product">Product</a>
<a href="index.php?controller=order">Order</a>
<a href="index.php?controller=staff&action=logout">Logout</a>


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
            setTimeout(showSlides, 3000);
        }
    </script>
</body>
</html>