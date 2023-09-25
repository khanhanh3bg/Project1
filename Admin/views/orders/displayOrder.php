<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <style>
        html {
            height: 100%;
        }

        body {
            height: 100vh;
            background-image: url('https://sacbaongoc.net/wp-content/uploads/2022/08/300-hinh-anh-bau-troi-dep-lam-hinh-nen-dien-thoai-may-tinh-1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .logo {
            position: absolute;
            width: 80px;
            height: 100px;
            left: 665px;
            top: 30px;
        }

        .nameShop {
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

        .nameShop1 {
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
            color: #D9D9D9;
        }

        h1 {
            position: relative;
            color: white;
            text-align: center;
            top: 180px;
        }

        .div2 {
            position: relative;
            width: 50%;
            height: 40px;
            left: 325px;
            top: 40px;
            background: #f2f2f2;
            border: black 0.5px solid;
            border-radius: 5px;
        }

        .customer {
            text-decoration: none;
            position: absolute;
            width: 214px;
            height: 13px;
            left: 50px;
            top: 7px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 26px;
            line-height: 31px;
            color: #000000;
        }

        .product {
            text-decoration: none;
            position: absolute;
            width: 214px;
            height: 13px;
            left: 200px;
            top: 7px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 26px;
            line-height: 31px;
            color: #000000;
        }

        .order {
            text-decoration: none;
            position: absolute;
            width: 214px;
            height: 13px;
            left: 350px;
            top: 7px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 26px;
            line-height: 31px;
            color: #000000;
        }

        .cart {
            text-decoration: none;
            position: absolute;
            width: 214px;
            height: 13px;
            left: 500px;
            top: 7px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 26px;
            line-height: 31px;
            color: #000000;
        }

        #logout {
            position: absolute;
            width: 130px;
            left: 1180px;
        }

        .container {
            position: relative;
        }

        #productsTable {
            position: relative;
            top: 100px;
        }
    </style>
</head>
<body>
<div class="div1">
    <table>
        <tr>
            <td>
                <img class="logo" src="Image/logo.png">
            </td>
            <td>
                <p class="nameShop">CHARMANT</p>
                <br>
                <p class="nameShop1">DE' PRINCE</p>
            </td>

        </tr>
    </table>
</div>
<div class="container">

    <form action="index.php?controller=staff&action=logout" method="POST" id="logout">
        <button name="submit" class="btn btn-secondary btn-lg btn-block" type="submit">Đăng xuất</button>
    </form>
    <h1> Đơn hàng</h1>
    <!--    <form  action="index.php?controller=order&action=create" method="POST" >-->
    <!--        <button type="submit" name="submit" style="width: 150px" class="btn btn-info">Thêm đơn hàng</button>-->
    <!--    </form>-->
    <br>
    <div class="div2">
        <ul class="menu">
            <a class="customer" href="index.php?controller=customer">Khách hàng</a>
            <a class="product" href="index.php?controller=product">Sản phẩm</a>
            <a class="order" href="index.php?controller=order">Đơn hàng</a>
            <a class="cart" href="index.php?controller=cart">Giỏ hàng</a>
        </ul>
    </div>
    <br>
    <table id="productsTable" class="table table-border table-hover">
        <thead>
        <tr class="table-primary">
            <th>ID</th>
            <th>Khách hàng</th>
            <th>Số điện thoại</th>
            <th>Ngày đặt</th>
            <th>Tình trạng</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($orders as $order) {
            echo "<tr>";
            $id = $order['ID_order'];
            echo "<td>" . $order['ID_order'] . "</td>";
            echo "<td>";
            echo "<b>" . $order['Customer_name'] . "</b>";
            echo "</td>";
            echo "<td>" . $order['Customer_phone'] . "</td>";
            echo "<td>" . $order['Order_date'] . "</td>";
            ?>
                <td>
            <form method="post" action="index.php?controller=order&action=update&id=<?=$id?>">
                <select class="from-control" name="status">
                    <?php
                    if ($order['Order_status'] == 0) {
                        ?>
                        <option value="<?= $order['Order_status'] = 0 ?>" class='form-control'>Pending</option>
                        <option value="<?= $order['Order_status'] = 1 ?>" class='form-control'>Success</option>
                        <?php
                    } elseif ($order['Order_status'] == 1) {
                        ?>
                        <option value="<?= $order['Order_status'] = 1 ?>" class='form-control'>Success</option>
                        <option value="<?= $order['Order_status'] = 0 ?>" class='form-control'>Pending</option>
                        <?php
                    }
                    ?>
                </select>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
                </td>
            <?php
            echo "<td><form hidden='hidden' onsubmit='return confirmDelete()' method='POST' action='index.php?controller=order&action=delete'>";
            echo "<input name='id_order' hidden value='" . $order['ID_order'] . "'/>";
            echo "<button type='submit' name='submit' class='btn btn-danger'>Xóa</button>";
            echo "</form>";

            echo "<br>";
            echo "<a href='index.php?controller=order&action=detail&id=$id' class='btn btn-warning'>Chi tiết</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <br>

    <script>
        function confirmDelete() {
            return confirm('Bạn muốn xóa sản phẩm không?');
        }
    </script>
</div>

</body>
</html>