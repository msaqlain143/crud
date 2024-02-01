<!doctype html>
<html lang="en">

<head>
    <title>Laravel Crud :</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand mt-2 text-white" href="#"><strong>Product</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mr-2" href="{{ route('services-page') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  mr-3" href="{{ route('contactUs-page') }}">Contact Us</a>
                </li>
                <li class="nav-item mt-3">
                    <form class="form-inline my-2 my-lg-0" action="{{ route('find-product') }}">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <h2><strong>{{ $message }}</strong></h2>
        </div>
    @endif
    @yield('main');
<footer id="footer" class="bg-primary text-white d-flex-column text-center">
  <hr class="mt-0">
  <!--Social buttons-->
  <div class="text-center">
    <h4>You can find us at</h4>
    <ul class="list-unstyled list-inline">
      <li class="list-inline-item">
        <a href="#!" class="sbtn btn-large mx-1" title="Facebook">
          <i class="fab fa-facebook-square fa-2x"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="#!" class="sbtn btn-large mx-1" title="Linkedin">
          <i class="fab fa-linkedin fa-2x"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="#!" class="sbtn btn-large mx-1" title="Twitter">
          <i class="fab fa-twitter-square fa-2x"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="#!" class="sbtn btn-large mx-1" title="Youtube">
          <i class="fab fa-youtube-square fa-2x"></i>
        </a>
      </li>
    </ul>
  </div>
  <!--/.Social buttons-->
  <hr class="mb-0">
  <!--Footer Links-->
  <div class="container text-left text-md-center">
    <div class="row">
      <!--First column-->
      <div class="col-md-3 mx-auto shfooter">
        <h5 class="my-2 font-weight-bold d-none d-md-block">Product</h5>
        <div class="d-md-none title" data-target="#Product" data-toggle="collapse">
          <div class="mt-3 font-weight-bold">Product
            <div class="float-right navbar-toggler">
              <i class="fas fa-angle-down"></i>
              <i class="fas fa-angle-up"></i>
            </div>
          </div>
        </div>
        <ul class="list-unstyled collapse" id="Product">
          <li><a href="#">Create Websites</a></li>
          <li><a href="#">Secure Cloud Hosting</a></li>
          <li><a href="#">Engage Your Audience</a></li>
          <li><a href="#">Website Support</a></li>
        </ul>
      </div>
      <!--/.First column-->
      <hr class="clearfix w-100 d-md-none mb-0">
      <!--Second column-->
      <div class="col-md-3 mx-auto shfooter">
        <h5 class="my-2 font-weight-bold d-none d-md-block">Company</h5>
        <div class="d-md-none title" data-target="#Company" data-toggle="collapse">
          <div class="mt-3 font-weight-bold">Company
            <div class="float-right navbar-toggler">
              <i class="fas fa-angle-down"></i>
              <i class="fas fa-angle-up"></i>
            </div>
          </div>
        </div>
        <ul class="list-unstyled collapse" id="Company">
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Support</a></li>
          <li><a href="#">Pricing</a></li>
        </ul>
      </div>
      <!--/.Second column-->
      <hr class="clearfix w-100 d-md-none mb-0">
      <!--Third column-->
      <div class="col-md-3 mx-auto shfooter">
        <h5 class="my-2 font-weight-bold d-none d-md-block">Resources</h5>
        <div class="d-md-none title" data-target="#Resources" data-toggle="collapse">
          <div class="mt-3 font-weight-bold">Resources
            <div class="float-right navbar-toggler">
              <i class="fas fa-angle-down"></i>
              <i class="fas fa-angle-up"></i>
            </div>
          </div>
        </div>
        <ul class="list-unstyled collapse" id="Resources">
          <li><a href="#">Blog</a></li>
          <li><a href="#">eBooks</a></li>
          <li><a href="#">Whitepapers</a></li>
          <li><a href="#">Comparison Guide</a></li>
          <li><a href="#">Website Grader</a></li>
        </ul>
      </div>
      <!--/.Third column-->
      <hr class="clearfix w-100 d-md-none mb-0">
      <!--Fourth column-->
      <div class="col-md-3 mx-auto shfooter">
        <h5 class="my-2 font-weight-bold d-none d-md-block">Get Help</h5>
        <div class="d-md-none title" data-target="#Get-Help" data-toggle="collapse">
          <div class="mt-3 font-weight-bold">Get Help
            <div class="float-right navbar-toggler">
              <i class="fas fa-angle-down"></i>
              <i class="fas fa-angle-up"></i>
            </div>
          </div>
        </div>
        <ul class="list-unstyled collapse" id="Get-Help">
          <li><a href="#" target="_blank">Help Center</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </div>
      <!--/.Fourth column-->
    </div>
  </div>
  <!--/.Footer Links-->
  <hr class="mb-0">
  <!--Copyright-->
  <div class="py-3 text-center">
    Copyright
    <script>
      document.write(new Date().getFullYear())
    </script> <a href="#">Muhammad Saqlain Sherliyat :</a> | It is free for use
  </div>
  <!--/.Copyright-->
</footer>

    <style>
        a {
          color: white;
        }
        .shfooter .collapse {
          display: inherit;
        }
        @media (max-width: 767px) {
          .shfooter ul {
            margin-bottom: 0;
          }

          .shfooter .collapse {
            display: none;
          }

          .shfooter .collapse.show {
            display: block;
          }

          .shfooter .title .fa-angle-up,
          .shfooter .title[aria-expanded="true"] .fa-angle-down {
            display: none;
          }

          .shfooter .title[aria-expanded="true"] .fa-angle-up {
            display: block;
          }

          .shfooter .navbar-toggler {
            display: inline-block;
            padding: 0;
          }
        }

        .resize {
          text-align: center;
        }
        .resize {
          margin-top: 3rem;
          font-size: 1.25rem;
        }
        /*RESIZESCREEN ANIMATION*/
        .fa-angle-double-right {
          animation: rightanime 1s linear infinite;
        }

        .fa-angle-double-left {
          animation: leftanime 1s linear infinite;
        }
        @keyframes rightanime {
          50% {
            transform: translateX(10px);
            opacity: 0.5;
          }
          100% {
            transform: translateX(10px);
            opacity: 0;
          }
        }
        @keyframes leftanime {
          50% {
            transform: translateX(-10px);
            opacity: 0.5;
          }
          100% {
            transform: translateX(-10px);
            opacity: 0;
          }
        }

        </style>
        <style>
            .card{
                transition: all 0.3s;
                box-shadow: 10px 10px 10px 0 rgb(99, 98, 98);
            }
            .card:hover{
                transform: scale(1.14)


            }
        </style>
</body>

</html>
