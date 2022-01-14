<?php
include('.//partials-front/header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header class="container" style="margin-top: 66px;">
        <div class="row">
            <h1>Giỏ hàng</h1>
            <p>Tour(1)</p>
            <div class="col-md border border-1 p-3 cart-content bg-white">
                <div class="col-md-2 mt-3">
                    <img src="images/Tour/DaNang_BaNa_NguHanhSon_HoiAn.png" class="img-fluid" alt="" style="max-width: 150px; max-height: 100%">
                </div>
                <div class="col-md-3 me-5" style="text-align: justify;">
                    <h4>003: Đà Nẵng – Sơn Trà – Hội An – Rừng Dừa 7 Mẫu – Bà Nà (4N3Đ)</h4>
                    <p>Lịch trình <br>
                        Thành phố Đà Nẵng, Vietnam - Thành phố Đà Nẵng, Vietnam<br>
                        Số khách: 1 người lớn<br>
                        Loại tour: Trong nước</p>
                </div>
                <div class="col-md-3 cart-days">
                    <div class="p-1 border border-radius">
                        <div class="d-flex flex-row justify-content-center">
                            <div class="d-flex flex-column text-center me-5">
                                <p>Ngày khởi hành</p>
                                <b>24/12/2021</b>
                            </div>
                            <hr width="1px" height="30px">
                            <div class="d-flex flex-column text-center">
                                <p>Ngày kết thúc</p>
                                <b>27/12/2021</b>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <p class="text-center mt-2">3 ngày, 2 đêm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-column justify-content-end">
                        <h3 class="text-end"> 1.936.000 ₫ </h3>
                        <i class="text-end mb-2">Đã bao gồm thuế và phí</i>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary rounded-pill" type="submit" style="max-width: 90px">Đặt Tour</button>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <?php
    include('.//partials-front/footer.php');
    ?>