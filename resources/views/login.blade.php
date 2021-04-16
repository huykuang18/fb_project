<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Đăng nhập</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-md-offset-4 col-md-4" id="box">
                <h2>Đăng nhập tài khoản</h2>
                <hr>
                <form class="form-horizontal" method="post" id="login_form">
                    @csrf
                    @if(session('alert'))
                        <section class="alert alert-danger">{{session('alert')}}</section>
                    @endif
                    <fieldset>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group"> 
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="username" placeholder="Username" class="form-control" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group"> 
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
                                    <input name="password" placeholder="Password" class="form-control" type="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-md btn-success pull-right">Đăng nhập </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>

</html>