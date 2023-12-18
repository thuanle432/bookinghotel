<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<title>TK HOTEL</title>
</head>
<body>
	<!-- menu -->
	<div class="superNav border-bottom py-2 bg-light">
		<div class="container">
		    <div class="row">
			    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
			        <span class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"><strong>tkhotel@gmail.com</strong></span>
			        <span class="me-3"><i class="fa-solid fa-phone me-1 text-warning"></i> <strong>84-086-533-1920</strong></span>
			    </div>
			      
		    </div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
		<div class="container">
		    <a class="navbar-brand" href="#"><strong>TK HOTEL</strong></a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    	<div class=" collapse navbar-collapse" id="navbarNavDropdown">
				    <ul class="navbar-nav ms-auto ">
				        <li class="nav-item">
				          	<a class="nav-link mx-2 text-uppercase active" aria-current="page" href="#">Trang chủ</a>
				        </li>
				        <li class="nav-item">
				          	<a class="nav-link mx-2 text-uppercase" href="#">Phòng</a>
				        </li>
				        <li class="nav-item">
				          	<a class="nav-link mx-2 text-uppercase" href="#">Blog</a>
				        </li>
				        <li class="nav-item">
				         	<a class="nav-link mx-2 text-uppercase" href="#">Đánh giá</a>
				        </li>
				    </ul>
				    <ul class="navbar-nav ms-auto ">
				        <li class="nav-item">
				         	<a class="nav-link mx-2 text-uppercase" href="#"><i class="fa-solid fa-cart-shopping me-1"></i> Cart</a>
				        </li>
				        <li class="nav-item">
				          	<a class="nav-link mx-2 text-uppercase" href="{{URL::to('/dangnhap')}}"><i class="fa-solid fa-circle-user me-1"></i> Đăng nhập</a>
				        </li>
				    </ul>
		    	</div>
                
		</div>
	</nav>
	<!-- Carousel wrapper -->
	<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  		<div class="carousel-inner">
    		<div class="carousel-item active">
      			<img src="{{('public/frontend/image/slider.jpg')}}" class="d-block w-100" alt="Sunset Over the City" />
    		</div>
    	</div>
  	</div>
    <!-- ROOM -->
	<h2 class="h1-responsive font-weight-bold text-center my-4">Phòng</h2>
	<section style="background-color: #eee;">
    @foreach ($product as $key => $value)
	    <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12 col-xl-10">
               
                    <div class="card shadow-0 border rounded-3">
                        <div class="card-body">
                            <div class="row">
                            
                                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                    <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                        <img src="{{URL::to('public/frontend/image/'.$value->product_image)}}" class="w-100" />
                                        <a href="#!">
                                            <div class="hover-overlay">
                                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <h5>{{$value->product_name}}</h5>
                        
                    
                                    <p class="text-truncate mb-4 mb-md-0">
                                    {{$value->product_infor}}
                                    </p>
                                </div>
                                <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                    <div class="d-flex flex-row align-items-center mb-1">
                                        <h4 class="mb-1 me-1">{{number_format( $value->product_price). ' VNĐ/ Ngày'}}</h4>
                                    </div>
                                
                                    <div class="d-flex flex-column mt-4">
                                    
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                                            Thêm phòng
                                        </button>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
	    </div>
        @endforeach
	</section>
    <!-- BLOG -->
	<h2 class="h1-responsive font-weight-bold text-center my-4">BLOG</h2>
	<div class="container py-3">
		<div class="title h1 text-center">TK HOTEL</div>
		<div class="card">
    		<div class="row ">

      			<div class="col-md-7 px-3">
        			<div class="card-block px-6">
          				
          				<p class="card-text">
            				Mang đến một thế giới mới, một phong cách hiện đại
         				</p>
        			</div>
      			</div>
      			<div class="col-md-5">
        			<div id="CarouselTest" class="carousel slide" data-ride="carousel">
          				<div class="carousel-inner">
            				<div class="carousel-item active">
              					<img class="d-block w-100" src="{{('public/frontend/image/slider_contact.jpg')}}" alt="">
            				</div>
            				
          				</div>
        			</div>
      			</div>
    		</div>
  		</div>
	</div>
    <!-- CONTACT -->
	<h2 class="h1-responsive font-weight-bold text-center my-4">Đáng giá</h2>
	<section class="mb-4 container">
        <div class="row">
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Họ và tên</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Email</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Tiêu đề đánh giá</label>
                            </div>

                        </div>
                    </div>
                </form>
                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                <div class="status"></div>
            </div>
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>567 Lê Duẩn,TP BMT, DAKLAK</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 84 865 331 920</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>tkhotl@gmail.com</p>
                    </li>
                </ul>
            </div>
        </div>

    </section>
    <!-- FOOTER -->
    <footer class="text-white text-center text-lg-start" style="background-color: #23242a;">
        <div class="container p-4">
            <div class="row mt-4">
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4 pb-1">Search something</h5>

                <div class="form-outline form-white mb-4">
                    <input type="text" id="formControlLg" class="form-control form-control-lg">
                    <label class="form-label" for="formControlLg" style="margin-left: 0px;">Search</label>
                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 48.8px;"></div><div class="form-notch-trailing"></div></div></div>

                <ul class="fa-ul" style="margin-left: 1.65em;">
                    <li class="mb-3">
                    <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">567 Lê Duẩn, TP BMT, DAKLAK</span>
                    </li>
                    <li class="mb-3">
                    <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">tkhotel@gmail.com</span>
                    </li>
                    <li class="mb-3">
                    <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 84 865 331 920</span>
                    </li>
                    <li class="mb-3">
                    <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">+ 84 234 567 89</span>
                    </li>
                </ul>
                </div>
            </div>
        </div>
        
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 TK HOTEL:
            <a class="text-white" href="https://mdbootstrap.com/">tkhotel@gmail.com</a>
        </div>
    </footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>