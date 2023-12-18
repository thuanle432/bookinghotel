<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<title>Admin TK Hotel</title>
</head>
<body>
	<!-- menu -->
	<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-shop me-2"></i> 
				<strong>
					<?php 
                        $fullname = Session::get('admin_fullname');
                        echo $fullname;
                    ?>
				</strong>
		</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ms-auto">
               <li class="nav-item">
                  <a class="nav-link" href="{{URL::to('/trangchuadmin')}}">Trang chủ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Phòng
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{URL::to('/themphong')}}">Thêm phòng</a>
                        <a class="dropdown-item" href="{{URL::to('/lietkephong')}}">Liệt kê phòng</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Khách hàng
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{URL::to('/lietkekhachhang')}}">Liệt kê</a>
                        
                    </div>
                    
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Mã giảm giá
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{URL::to('/themma')}}">Thêm mã</a>
                        <a class="dropdown-item" href="{{URL::to('/lietkema')}}">Liệt kê</a>
                    </div>
                    
                </li>
            </ul>
            <ul class="navbar-nav ms-auto ">
				<li class="nav-item">
				    <a class="nav-link mx-2 text-uppercase" href="{{URL::to('admin')}}"> Đăng xuất</a>
				</li>   
			</ul>
        </div>
    </nav>
    <!-- form -->
    @foreach($edit_product as $key => $edit_value)
    <form class="form-horizontal"  method="post" action="{{URL::to('/chinhsua/'. $edit_value->id)}}" id="form">
		{{csrf_field() }}
        <fieldset>
        <legend class="text-center">Sửa phòng</legend>

            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">Tên phòng</label>  
                <div class="col-md-4">
                    <input id="product_name" value="{{ $edit_value->product_name}}" name="product_name" placeholder="Nhập tên phòng" class="form-control input-md" required="" type="text">
            
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="product_infor">Thông tin phòng</label>  
                <div class="col-md-4">
                    <input id="product_infor" value="{{ $edit_value->product_infor}}" name="product_infor" placeholder="Nhập thông tin phòng" class="form-control input-md" required="" type="text">
            
                </div>
            </div>
       
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_price">Giá Phòng</label>  
                <div class="col-md-4">
                    <input id="product_price" value="{{ $edit_value->product_price}}" name="product_price" placeholder="Nhập giá phòng" class="form-control input-md" required="" type="text">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="product_image">Ảnh</label>  
                <div class="col-md-4">
                    <input id="product_image" value="{{ $edit_value->product_image}}" name="product_image" placeholder="Ảnh" class="form-control input-md" required="" type="file">
            
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
				<input class="submit-btn btn btn-primary btn-block cd-popup-trigger" type="submit" value="Thêm phòng">
                </div>
            </div>
        </fieldset>
    </form>
    @endforeach




	 
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	
</body>

</html>