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
    
    <h1 class="text-center">Liệt kê mã</h1>
    <section class="intro">
        <div class="gradient-custom-2 h-100">
            <div class="mask d-flex align-items-center h-100">
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-12">
                    <div class="table-responsive">
                    <table class="table  table-bordered mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Tên mã </th>
                            <th scope="col">Mã</th>
                            <th scope="col">% giảmg</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($code as $key => $value)
                        <tr>
                            
                            <td>{{ $value->code_name}}</td>
                            <td>{{ $value->code}}</td>
                            <td>{{$value->code_tinhnang}}</td>
                        </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>




	 
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	
</body>

</html>