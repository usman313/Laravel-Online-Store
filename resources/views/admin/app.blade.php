<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- My Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/myStyle.css') }}" />
    <title>Index</title>
</head>
<body style="{{asset('images/background/backgroundImage,jpg')}}">
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row pt-2 shadow-sm">
            <div class="col-12 col-md-4">
                <div class="d-flex pt-4 justify-content-center">
                    <i class="bi bi-search pt-1 px-2 border-bottom fs-5"></i>
                    <input type="text" class="w-50 border-0 border-bottom fs-5" placeholder="Type here to search">
                </div>
            </div>
            <div class="col-12 col-md-4 cursor-pointer">
                <a href="{{URL('/')}}">
                    <img src="{{asset('images/logo/brandLogo.png')}}" alt="Logo Not Found" class="img-fluid logoCss">
                </a>
            </div>
            <div class="col-12 col-md-4 pt-4">
                <div class="d-flex justify-content-md-end justify-content-sm-center pe-4">
                    <!-- <a href="{{URL('admin.adminPanel')}}" class="me-4 fs-4 text-decoration-none text-dark">View Admin Panel</a> -->
                    <a href="{{URL('signInPage')}}" class="me-4 fs-4 text-decoration-none text-dark">Accounts</a>
                    <button class="fs-4 btn btn-outline-dark border-0 p-0"><i class="bi bi-handbag"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Admin Options Navbar -->
    <div class="container-fluid">
        <div class="row shadow-sm pt-2">
            <nav>
                <ul class="d-flex list-unstyled justify-content-center">
                    <li class=""><a href="{{URL('admin/dashboard')}}" class="text-decoration-none text-warning">Admin Home</a></li>
                    <li class=""><a href="#" class="text-decoration-none text-warning">View Data</a></li>
                    <li class=""><a href="#" class="text-decoration-none text-warning">Sales Dashboard</a></li>
                    <li class=""><a href="#" class="text-decoration-none text-warning">Manage Employee</a></li>
                    <li class=""><a href="#" class="text-decoration-none text-warning">Stock Management</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Admin Options Navbar -->

    <!-- Header End -->

    <!-- Content Yield-->
        @yield('content')
    <!-- Content Yield -->

    <!-- Footer Start -->
    <div class="container-fluid bg-light p-5">
        <div class="row p-auto">
            <div class="col-12 col-md-3 justify-content-center">
                <a href="#" class="fs-7 text-decoration-none text-dark anchor">FAQs</a><br>
                <a href="#" class="fs-7 text-decoration-none text-dark anchor">Measurement Guide</a><br>
                <a href="#" class="fs-7 text-decoration-none text-dark anchor">Exchange & Return</a><br>
                <a href="#" class="fs-7 text-decoration-none text-dark anchor">Privacy & Policy</a>
            </div>
            <div class="col-12 col-md-3">
            <a href="#" class="fs-7 text-decoration-none text-dark anchor">About Brand</a><br>
            <a href="#" class="fs-7 text-decoration-none text-dark anchor">Store Location</a><br>
            <a href="#" class="fs-7 text-decoration-none text-dark anchor">Contact Us</a><br>
            <a href="#" class="fs-7 text-decoration-none text-dark anchor">Disclaimers</a><br>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex justify-content-end">
                    <h3>Sign up for NewsLetter</h3>
                </div>
                <div class="d-flex justify-content-end">
                    <input type="email" class="w-50" name="newLetterEmail" id="newsLetterEmail" title="Enter Email Here" placeholder="enter email here">
                    <button class="btn btn-outline-dark">SUBSCRIBE</button>
                </div>
            </div>
        </div>
        <div class="row mt-4 border-2 border-bottom">
            <div class="col-6 col-md-2">
                <a href="callto:+923314099914" class="text-decoration-none text-dark fw-bold"><i class="bi bi-telephone"></i> +92-331-4099914</a>
            </div>
            <div class="col-6 col-md-2">
                <a href="mailto:m.usman990@yahoo.com" class="text-decoration-none text-dark fw-bold"><i class="bi bi-envelope"></i> help@usman.com</a>
            </div>            
            <div class="col-12 col-md-6 d-md-flex justify-content-end">
                <a href="#" class="text-decoration-none text-dark fw-bold me-3"><i class="bi bi-facebook"></i>  facebook</a>
                <a href="#" class="text-decoration-none text-dark fw-bold me-3"><i class="bi bi-instagram"></i>  instagram</a>
                <a href="#" class="text-decoration-none text-dark fw-bold me-3"><i class="bi bi-twitter"></i>twitter</a>
            </div>
        </div>
    </div>
    <!-- Footer End -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>