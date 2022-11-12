<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 4.5.2 -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
    <!-- Bootstrap 5.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- My Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/myStyle.css') }}" />
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Index</title>
</head>
<body>
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
                    <!-- <a href="{{URL('adminView.adminPanel')}}" class="me-4 fs-4 text-decoration-none text-dark">View Admin Panel</a> -->
                    <a href="{{URL('/logIn')}}" class="me-4 fs-4 text-decoration-none text-dark">Accounts</a>
                    <!-- <button class="btn btn-outline fs-4 pt-0" id="bagButton"> -->
                    <p type="button" class="btn btn-demo p-0" data-toggle="modal" data-target="#shoppingBag">
                        <i class="bi bi-handbag" style="font-size: 24px"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Shopping Bag Rejected-->
        <!-- <div class="position-fixed d-none" id="shoppingBag" style="float: right;">
            <header class="bg-dark fw-bold text-white py-2 position-relative">
                <div class="d-flex justify-content-center">
                    <div class="text-center mt-2">
                        <a class="lh-lg text-center text-decoration-none text-white" href="{{URL('/checkout')}}">
                            My Bag
                        </a>
                    </div>
                    <button id="bagCloseButton" onclick="closeBagDiv()" class="btn btn-dark position-absolute end-0 top-0 mt-2 fw-bold">Close</button>
                </div>
            </header>
            <div class="position-absolute bottom-0">
                <div class="bg-light lh-lg pt-2 px-1 py-2 d-flex justify-content-end">
                    <div class="text-uppercase fw-bold" style="font-size: 14px">Subtotal:</div>
                    <div class="ms-4 fs-6 fw-bold justify-content-end d-flex">
                        <label class="p-0">PKR: </label>
                        <input type="number" id="subtotalText" value="" class="ms-1 w-50 h-75 mt-1">
                    </div>
                </div>
                <div>
                    <a href="{{URL('/checkout')}}" class="btn btn-dark w-100">Check Out</a>
                </div>
            </div>
        </div> -->
    <!-- Shopping Bag Rejected-->

    
    <div class="container-fluid">
        <!-- Category Header -->
            @yield('categoryHeader')
        <!-- Category Header -->
        <!-- Header End -->
        
        <!-- Client Panel Yields -->
            <!-- Body Data Yield -->
            @yield('content')
            <!-- Body Data Yield-->
        <!-- Client Panel Yields -->
    </div>


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

    <!-- Modal Shopping Bag -->
    <div class="modal fade" id="shoppingBag" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="fs-4">Shopping Bag</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> 
                </div>
                <div class="modal-body">
                    <p>
                        Bag is Empty
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Shopping Bag -->
    <!-- product divs to display in bag -->
    <div class="productBagDiv" id="productBagDiv">
        <div class="d-flex float-right">
            <button class="btn btn-outline-dark p-3 fs-4">X</button>
        </div>
        <div class="row">
            <div class="col-4 col-md-4">
                <img src="" alt="Image Not Found" class="img-fluid">
            </div>
            <div class="col-12 col-md-8">
                <h2>Product Name</h2>
                <h3 class="text-muted">Product Code</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <label for="color" class="ms-2">Color:</label>
                                <label for="dbColor"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="color" class="ms-2">Size:</label>
                                <label for="dbSize"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex my-3">
                                    <label for="quantity" class=" mt-1 me-3 fw-bold fs-5">Qantity:</label>
                                    <div class="btn btn-outline rounded-circle p-0 fs-3 border-0 m-0" onclick="changeQuantity(false)"
                                    type="button" id="decreaseQuantity">
                                        <i class="bi bi-arrow-down-square"></i>
                                    </div>

                                    <input type="number" value="1" name="quantity" id="quantity"
                                    class="mt-2 text-center border-0" readonly style="width: 50px; height:27px">
                                    
                                    <div class="btn btn-outline rounded-circle p-0 fs-3 border-0 m-0" onclick="changeQuantity(true)"
                                    type="button" id="increaseQuantity">
                                        <i class="bi bi-arrow-up-square p-0"></i>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- product divs to display in bag -->



    <!-- JavaScript Functions -->
    <script type="text/javascript">
        // Shopping Bag close Button
        console.log(document.getElementById(''))
        function closeBagDiv(){
            document.getElementById('shoppingBag').style.display = "none";
        }

        // Toggle Bag Button on Product Divs
        function viewBagButton(mouseState, buttonId){
            // debugger;
            if(mouseState == true){
                document.getElementById(buttonId).style.display = "block";
            }else if(mouseState == false){
                document.getElementById(buttonId).style.display = "none";
            }
        }

        // Change Quantity Buttons Functionality on Detail page
        function changeQuantity(buttonState){
            var inputId = document.getElementById('quantity');
            if(buttonState == true){   //increase condition
                inputId.value = parseInt(inputId.value) + 1;
            }else if(buttonState == false){  //decrease condition
                if(inputId.value > 1){
                    inputId.value = parseInt(inputId.value) - 1;
                }else{
                    alert("Quantity cannot be less than 1");
                }
            }
        }

        // Add product to Bag
        function addProduct(){
            document.getElementById('shoppingBag').style.display('block');
        }
    </script>
    <!-- JavaScript Functions -->

    <!-- jQuery Script -->
    <script type="text/javascript">
        // Bag Cart Toggle Function
        $(document).ready(function(){
            $("#bagButton").click(function(){
                $("#shoppingBag").toggle("fast", "linear");
            });
        });

        // Product Cards Bag Button Toggle
        $(document).ready(function(){
            
        });
    </script>
    <!-- jQuery Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
</body>
</html>