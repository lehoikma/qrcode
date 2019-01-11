<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    @media screen and (max-width: 600px) {
        .form {
            display: none;
        }
    }
</style>
<div class="col-md-offset-4 col-md-4">
    <div class="col-md-12" style="text-align: center">
        <img src="logo.png">
    </div>
    <h3 style="text-align: center; color: red">CÔNG TY CỔ PHẦN TRUYỀN THÔNG AGRI PLUS</h3>
    <form action="{{route('login')}}" method="post" class="form">
        {{csrf_field()}}
        <div class="form-group">
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder=" Email address" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder=" Password" required>
        </div>
        <div class="col-md-12" style="text-align: center; padding-bottom: 20px">
            <button type="submit" class="btn btn-primary" style="width: 150px;height: 40px;">Đăng Nhập</button>
        </div>
    </form>
    <div>
        <strong>Địa chỉ:</strong> Số 50 phố Hòa Mã, Phường Ngô Thì Nhận, Quận Hai Bà Trưng, Hà Nội<br>
        <strong>Email:</strong> agrimediaplus@gmail.com<br>
        <strong>Website:</strong> agriplus.vn<br>
        <strong>Điện thoại:</strong> 0977715411<br>
        <strong>Lĩnh vực hoạt động :</strong><br>
        - Thiết kế website<br>
        - Làm phim tài liệu, phim TVC quảng cáo<br>
        - Tổ chức even báo chí<br>
        - Viết bài, book đăng bài PR trên báo<br>
        - Thiết kế mã QR Code<br>
    </div>
</div>



</body>
</html>
