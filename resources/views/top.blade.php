<!DOCTYPE html>
<html lang="en">
<head>
    <title>QR Code</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h2>Trang Tạo Mã QR Code</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-offset-3 col-md-6">
            <form method="post" action="{{route('download')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="usr" style="color: #5cb85c">Nhập URL:</label>
                    <input type="text" class="form-control" id="usr" name="url">
                </div>
                <div class="form-group">
                    <label for="usr" style="color: #5cb85c">Chọn kích thước mã QR code:</label>
                </div>
                <div class="form-group">
                    <label class="radio-inline"><input type="radio" value="100" name="qr_size">100 px</label>
                    <label class="radio-inline"><input type="radio" value="200" name="qr_size" checked>200 px</label>
                </div>
                <button type="submit" class="btn btn-success">Download Mã QRCode</button>
                <a href="{{route('logout')}}">
                    <button type="button" class="btn btn-warning" style="float: right">Đăng Xuất</button>
                </a>

            </form>
        </div>
    </div>
</div>

</body>
</html>

