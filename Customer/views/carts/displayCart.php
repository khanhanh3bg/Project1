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
            height: 1500px;
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

        h1{
            position: relative;
            text-align: center;
            top: 40px;
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

        #productsTable{
            position: relative;
            top: 50px;
        }

        .form-control{
            position: relative;
            width: 15%;
            top: 20px;
        }

        .btn_update{
            position: relative;
            top: 20px;
            left: 825px;
        }

        .btn_delete{
            position: relative;
            top: -18px;
            left: 1221px;
        }

        .form_order{
            position: relative;
            top: -50px;
            left: 100px;
        }

        .cart{
            padding-left: 100px;
            padding-right: 100px;
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

<h1>Giỏ hàng</h1>

<form class="cart" method="post" action="index.php?controller=cart&action=update_cart">
    <table id="productsTable" class="table table-border table-hover">
        <thead>
        <tr class="table-primary">
            <th>ID</th>
            <th>Sản Phẩm</th>
            <th>Giá </th>
            <th>Số lượng</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(isset($temp['cart'])){
            foreach ($temp['cart'] as $product_id => $value){
                ?>
                <td>
                    <?= $product_id ?>
                </td>
                <td>
                    <?= $value['name'] ?>
                </td>
                <td>
                    <?= $value['price'] ?>
                </td>
                <td>

                    <input type="number" name="amount[<?= $product_id ?>]" value="<?= $value['amount'] ?>">
                </td>

                <td>
                    <a onclick='return deleteProduct()' href='index.php?controller=cart&action=delete_product&product_id=<?= $product_id ?>' class='btn btn-warning'>Xóa sản phẩm</a>
                </td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
    <br>
    <button class="btn btn-primary btn_update">Cập nhật số lượng</button>
</form>
<a onclick="return deleteCart()" class="btn btn-danger btn_delete" href="index.php?controller=cart&action=delete_cart">Xóa giỏ hàng</a>
<form onsubmit="return order()" method="post" action="index.php?controller=cart&action=order_cart" class="form_order">
    <button class="btn btn-info">Đặt hàng</button>
</form>


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
    function deleteProduct(){
        return confirm("Bạn có muốn xóa sản phẩm khỏi giỏ hàng?");
    }

    function deleteCart(){
        return confirm("Bạn có muốn xóa sản phẩm khỏi giỏ hàng?");
    }

    function updateQuantity(){
        return alert("Đã cập nhật số lượng sản phẩm!");
    }

    function order(){
        return alert("Đã gửi đơn đặt hàng!");
    }

    function reAmount(){
        return alert("Vui lòng nhập lại số lượng!");
    }
</script>
</body>
</html>