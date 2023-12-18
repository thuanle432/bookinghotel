<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<title>Thông tin phòng</title>
</head>
<body>
	<!-- menu -->
    @foreach($product as $key=>$value)
	<div class="container py-4 my-4 mx-auto d-flex flex-column">
        <form action="{{URL::to('/luugiohang')}}" method="post">
            {{ csrf_field() }}
        <div class="header">
            <div class="row r1">
                <div class="col-md-9 abc">
                    <h1 name="product_name">{{ $value->product_name }}</h1>
                </div>
                <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                <p class="text-right para" name="product_price">{{number_format( $value->product_price). ' VNĐ / Ngày'}}</p>
            </div>
        </div>
        <div class="container-body mt-4">
            <div class="row r3">
                <div class="col-md-5 p-0 klo">
                    Thông tin phòng:
                    <p>{{ $value->product_infor }}</p>
                    <br>
                    <br>
                    Số lượng:
                    <p>
                        <input type="number" name="qty" value="1" min="1">  
                    </p>
                    <p>
                        <input type="hidden" name="productid_hidden" value="{{ $value->id }}">
                    </p>

                </div>
                
                <div class="col-md-7" name =""> <img src="{{URL::to('public/frontend/image/'.$value->product_image)}}" width="90%" height="95%"> </div>
                
            </div>

        </div>
       
        <div class="footer d-flex flex-column mt-5">
            <div class="row r4">
                <div class="col-md-2 myt "><button type="submit" class="btn btn-outline-warning">Đưa vào giỏ hàng</button></div>
            </div>
            <div class="row r4">
                <div class="col-md-2 myt "><button type="button" class="btn btn-outline-warning"><a href="{{URL::to('/trangchunguoidung')}}">Trang chủ</a></button></div>
            </div>
        </div>
        </form>
    </div>
    @endforeach
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>