<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Trang chủ</title>
</head>
<body>
<div class="container-fluid">
        <div class="row-fluid">
            <div class="col-md-offset-4 col-md-4" id="box">
            @if (session("user"))
                <h2>Xin chào {{session("user")}} !</h2>
                <hr>
            @else
                <h2>Xin chào!</h2>
                <hr>
                <div class="form-group">
                    <div class="col-md-12">
                        <a href="{{asset('login')}}" class="btn btn-md btn-info">Đăng nhập ngay </a>
                    </div>
                </div>
            @endif
            </div>
        </div>
    </div>
</body>
</html>