<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Đặt phòng</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    </head>
    <body>

    <?php
        $data = Cart::content();
    ?>

    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">
                        <a href="{{URL::to('/trangchunguoidung')}}">Trang chủ</a>
                    </h3>
                    
                    </div>


                    @foreach ($data as $v_data)
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img
                                    src="{{URL::to('public/frontend/image/'.$v_data->options->image)}}"
                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">{{ $v_data->name}}</p>
                                    
                                </div>

                                <div class="col-md-1 col-lg-1 col-xl-1 d-flex">
                                    <form action="{{URL::to('/updateqty')}}" method="post">
                                        {{ csrf_field() }}
                                        <input style="width: 40px" type="number" name="quantity" min="1" max="10" value="{{ $v_data->qty}}">
                                        <input style="width: 40px" type="submit" name="update_qty" value="OK">
                                        <input style="width: 40px" type="hidden" name="rowid" min="1" max="10" value="{{ $v_data->rowId}}">
                                    </form>
                                </div>
                                
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0">
                                        <?php
                                            $subtotal = $v_data->price * $v_data->qty;
                                            echo number_format($subtotal).' '.'VNĐ';
                                        ?>
                                    </h5>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <a href="{{URL::to('/xoagiohang/'.$v_data->rowId)}}" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    



                    <form>
                        
                    <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                        <div class="card-body p-4">
                            <div class="col-md-6 col-lg-4 col-xl-6">
                                <div class="row">
                                    <div class="col-12 col-xl-6">
                                        <div class="form-outline mb-4 mb-xl-5">
                                            <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                                                placeholder="Nhập họ tên" />
                                            <label class="form-label" for="typeName">Họ tên</label>
                                        </div>
                                        <div class="form-outline mb-4 mb-xl-5">
                                            <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="Nhập SĐT"
                                                size="7" id="exp" minlength="7" maxlength="7" />
                                            <label class="form-label" for="typeExp">Số điện thoại</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="form-outline mb-4 mb-xl-5">
                                            <input type="date" id="typeName" class="form-control form-control-lg" siez="17"
                                                placeholder="" />
                                            <label class="form-label" for="typeName">Ngày vào</label>
                                        </div>
                                        <div class="form-outline mb-4 mb-xl-5">
                                            <input type="date" id="typeExp" class="form-control form-control-lg" placeholder=""
                                                size="7" id="exp" minlength="7" maxlength="7" />
                                            <label class="form-label" for="typeExp">Ngày trả</label>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3">
                                <div class="d-flex justify-content-between" style="font-weight: 500;">
                                <p class="mb-2">Tiền phòng</p>
                                <p class="mb-2"> 
                                    <?php
                                        $tienphong = $v_data->price * $v_data->qty;
                                        echo number_format($tienphong).' '.'VNĐ';
                                    ?>
                                </p>
                                </div>
                                <div class="d-flex justify-content-between" style="font-weight: 500;">
                                <p class="mb-0">Thuế</p>
                                <p class="mb-0">
                                    <?php
                                        $tienphong = (($v_data->price * $v_data->qty)/ 100)*3;
                                        echo number_format($tienphong).' '.'VNĐ';
                                    ?>
                                </p>
                                </div>
                                <hr class="my-4">
                                <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                <p class="mb-2">Tổng thanh toán</p>
                                <p class="mb-2">
                                    <?php
                                        $tienphong = ((($v_data->price * $v_data->qty)/ 100)*3) +($v_data->price * $v_data->qty);
                                        echo number_format($tienphong).' '.'VNĐ';
                                    ?>
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn btn-warning btn-block btn-lg">Đặt phòng</button>
                            </div>
                        
                        </div>
                    </div>
                    </form>



                    
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>