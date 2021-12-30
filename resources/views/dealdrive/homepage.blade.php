<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/ddStyle.css" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
    <link rel="icon" href="images/dd1.png">
    <title>DealDrive|Home</title>
</head>
<body class="body">

    {{-- nav bar --}}
    <nav class="navbar navbar-expand-lg navbar-dark nav fixed-top">
        <a class="navbar-brand" href="/">DealDrive</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-menu " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
                    <div class="dropdown-menu d-menu2">
                        <a class="dropdown-item" href="#">Branding</a>
                        <a class="dropdown-item" href="#">Web development</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Mobile App development</a>
                    </div>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link " href="aboutUs">AboutUs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" >Contact</a>
                </li>

            </ul>
        </div>
    </nav>


    {{-- first header --}}

    <section class="container-fluid sect1">
        <div class="container">
            <div class="row"  style="margin-top: 5%">
                <div class="col-md-6">
                    <p class="m-0 p-0  para1">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum tempore 
                        dolor qui ipsam. Eos dolorum esse pariatur ullam cumque ipsam quia cum? 
                        Nobis voluptatibus quidem ex animi repudiandae earum laborum.
                    </p>
                    <button class="btn btn-outline-dark mt-5" type="submit">ReadMore</button>
                </div>

                <div class="col-md-6 mt-5 img1">
                    <img class="img-fluid" src="images/img1.png" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- end of first header --}}




        {{-- first header for mobile --}}
        <div id="demo" class="carousel slide caro1" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            </ul>
        
            <!-- The slideshow -->
            <div class="carousel-inner" style="margin-top: 13%">

            <div class="carousel-item active">
                <img src="{{asset ('images/img1.png') }}" class="d-block w-100"  alt="Los Angeles">
                <p class="m-0 p-0 para2">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum tempore 
                    dolor qui ipsam. Eos dolorum esse pariatur ullam cumque ipsam quia cum? 
                    Nobis voluptatibus quidem ex animi repudiandae earum laborum.
                </p>
                <button class="btn btn-outline-dark mt-3" type="submit">ReadMore</button>
            </div>

            <div class="carousel-item">
                <img src="{{asset('images/img2.jpg')}}" class="d-block w-100"  alt="Los Angeles">
                <p class="m-0 p-0 para2">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum tempore 
                    dolor qui ipsam. Eos dolorum esse pariatur ullam cumque ipsam quia cum? 
                    Nobis voluptatibus quidem ex animi repudiandae earum laborum.
                </p>
                <button class="btn btn-outline-dark mt-3" type="submit">ReadMore</button>
            </div>

            </div>
        
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
      
        </div>
        {{-- end first header for mobile --}}


            {{-- our intro --}}
        <div class="outText_holder">
            <h5 class="text-center outText">WHO WE ARE</h5>
          
              <div class="container">
                <p class="text-center outText2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>
                     Facilis voluptate iusto doloribus quo ratione, commodi autem sapiente, 
                </p>

                <div class="col text-center">
                    <button class="btn btn-outline-dark">Explore our services</button>
                </div>

              </div>
          </div>
        </div>
        {{-- end of our intro --}}


        {{-- our services section --}}
       
        <section style="margin-top: 15% !important">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" >
                            <img class="card-img-top" src="images/mobile.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                    Excepturi commodi cumque, repudiandae cum, sunt, odio quibusdam 
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card" >
                            <img class="card-img-top" src="images/web.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                Excepturi commodi cumque, repudiandae cum, sunt, odio quibusdam 
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card" >
                            <img class="card-img-top" src="images/brand.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                    Excepturi commodi cumque, repudiandae cum, sunt, odio quibusdam 
                                </p>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>
        {{--end of our services section --}}


       




       <section style="margin-top: 15% !important">
           <div class="container">
               <div class="row m-0 p-0">
                   <div class="col-md-6">
                        <h4 class="outText3">
                            FIND YOUR SOLUTION
                        </h4>
                        <h3 class="outText4">
                            Let's find a solution that fits your challange
                        </h3>
                        <p class="para3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Rerum delectus perferendis quibusdam expedita neque, 
                            possimus nihil eos numquam qui maxime quod dignissimos, 
                            hic illo nulla velit? Voluptate quisquam iste assumenda!
                        </p>
                        <a href="#">Learn more</a>
                   </div>
                   <div class="col-md-6">
                    <img class="img-fluid" src="images/exo2.png" alt="">
                   </div>
               </div>
           </div>
       </section>



       <!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

    <div style="background-color: #d1cde7;">
      <div class="container">
  
        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">
  
          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">
  
            <!-- Facebook -->
            <a class="btn  btn-small btn-floating rounded-circle mr-1"
            style="background-color: #2b34ac;">
            <i class="fab fa-facebook-f text-light"></i>
            </a>
            <!-- Twitter -->
            <a class="btn btn-small btn-floating rounded-circle mr-2"
            style="background-color: #5081c9">
              <i class="fab fa-twitter text-light"> </i>
            </a>
            <!-- Google +-->
            <a class="btn btn-small btn-floating rounded-circle mr-2"
            style="background-color: #df4719;">
              <i class="fab fa-google text-light"> </i>
            </a>
            <!--Linkedin -->
            <a class="btn  btn-small rounded-circle btn-floating mr-2"
            style="background-color: #3278fc;">
              <i class="fab fa-linkedin-in white-text"> </i>
            </a>
            <!--Instagram-->
            <a class="btn  btn-small btn-floating rounded-circle"
            style="background-color: #ac2b9b">
              <i class="fab fa-instagram text-light"> </i>
            </a>
  
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row-->
  
      </div>
    </div>
  
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
  
      <!-- Grid row -->
      <div class="row mt-3">
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
  
          <!-- Content -->
            <h6 class="text-uppercase font-weight-bold">
              <img class="img-fluid" src="images/dd1.png" alt="" style="width: 150px;">
            </h6>
          
          
          {{-- <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> --}}
          <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Products</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">Bootstrap</a>
          </p>
          <p>
            <a href="#!">WordPress</a>
          </p>
          <p>
            <a href="#!">BrandFlow</a>
          </p>
          <p>
            <a href="#!">Bootstrap Angular</a>
          </p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">Your Account</a>
          </p>
          <p>
            <a href="#!">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!">Shipping Rates</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p>
            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="#"> DealDriveTech.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->


 

    
    
    <script src="{{asset('js/bootstrap.min.js')}} bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="css/all.min.css" rel="stylesheet"> </script>
</body>
</html>