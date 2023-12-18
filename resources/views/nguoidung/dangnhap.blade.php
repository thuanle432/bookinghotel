<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Đăng nhập</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    </head>
    <body>


        <div class="container">
            
            <div class="card bg-light">
                <article class="card-body mx-auto" style="max-width: 400px;">
	                <h4 class="card-title mt-3 text-center">Đăng nhập</h4>
	                
	                
                    <form method="post" action="{{URL::to('/nguoidungdangnhap')}}">
                        {{ csrf_field() }}
                        
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa-regular fa-envelope"></i> </span>
                            </div>
                            <input id="email" name="email" class="input-text js-input form-control" type="email" placeholder="Nhập Email" required>
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input id="password" name="password" class="input-text js-input form-control" type="password"  placeholder="Nhập Mật khẩu" required>
                        </div>
                        
                        
                        <div class="form-field col-lg-12">
                            <input class="submit-btn btn btn-primary btn-block" type="submit" value="Đăng nhập">
                        </div>
                        <p class="text-center">Bạn chưa có tài khoản? <a href="{{URL::to('/dangky')}}">Đăng ký</a> </p>
                        <p class="text-center"> <a href="{{URL::to('/')}}">Quay lại</a> trang chủ </p>
                        
                    </form>
                </article>
            </div>
        </div> 
    
    


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </body>
</html>