
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

        body{
            position: relative;
            width: 100%;
            background-image: url('https://sacbaongoc.net/wp-content/uploads/2022/08/300-hinh-anh-bau-troi-dep-lam-hinh-nen-dien-thoai-may-tinh-1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1{
            position: absolute;
            width: 358px;
            height: 48px;
            left: 650px;
            top: 66px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 40px;
            line-height: 48px;
        }

        .formCreate{
            position: absolute;
            top: 150px;
            left: 30px;
        }
    </style>
</head>
<body>
<h1 > Sửa sản phẩm </h1>
<?php
foreach ($array['products'] as $product){
?>

<form class="formCreate" action="index.php?controller=product&action=update" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $product['ID_product'] ?>">
    <label for="productName"> <p>Tên sản phẩm </p> </label>
    <br>
    <input type="text" id="productName" value="<?= $product['Product_name'] ?>" name="productName" required>
    <br>
    <label for="productPrice"> <p>Mức giá</p></label>
    <br>
    <input type="number" id="productPrice" name="productPrice" value="<?= $product['Product_price'] ?>" required>
    <br>
    <label for="productBrand"><p>Thương hiệu: </p> </label>
    <br>
    <select id="productBrand" class="from-control" name="productBrand" required>
        <?php
        foreach ($array['brands'] as $brand){
            ?>

            <option value="<?= $brand['ID_brand'] ?>"> <?= $brand['Brand_name'] ?> </option>
            <?php
        }
        ?>
    </select>
    <br>
    <label for="productQuantity"> <p>Số lượng</p></label>
    <br>
    <input type="number" id="productQuantity" name="productQuantity" value="<?= $product['Product_quantity'] ?>" required>
    <br>
    <label for="productDescriptions"><p>Mô tả sản phẩm:</p></label>
    <br>
    <input type="text"  id="productDescriptions" value="<?= $product['Product_description'] ?>" name="productDescriptions" required>
    <br>
    <br>
    <input  type="File" name="imageFile" required accept="image/*"/>
    <br>
    <br>
    <button type="submit" name="submit" style="width: 150px" class="btn btn-info">Sửa sản phẩm</button>
    <br>
</form>
<?php
}
?>
</body>
</html>