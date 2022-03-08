<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css file  -->
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <!-- link or cdn font awsaen  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="{{asset("images/image-main.jpg")}}" type="image/x-icon">
    <title>مصطفى مطرود</title>
</head>

<body>
    <section class="home">
   <!-- Start Navbar  -->
   <nav>
    <div class="container">
        <div class="logo">
            <h1><a href="/">Portfo<span>lio.</span></a></h1>
        </div>
        <div>
            <i class="fa-solid fa-bars-staggered" id="show_list"></i>
        </div>
        <ul class="menu-list-items" id="menu-list-items">
            <li><a href="/">الرئيسية </a></li>
            <li><a href="/services">خدمات </a></li>
            <li><a href="/previous">اعمال سابقة </a></li>
            <li><a href="/#about">عني </a></li>
            <li><a href="/#contact">تواصل معنى</a></li>
        </ul>
        <div class="menu-list" id="list_modeli">
            <i class="fa-solid fa-xmark" id="remove_list"></i>
            <div class="menu">
                <div class="logo">
                    <h1>Portfo<span>lio.</span></h1>
                </div>
                <div class="list-links">
                    <ul>
                        <li><a href="/">الرئيسية </a></li>
                        <li><a href="/services">خدمات </a></li>
                        <li><a href="/previous">اعمال سابقة </a></li>
                        <li><a href="">عني </a></li>
                        <li><a href="">تواصل معنى</a></li>
                    </ul>
                </div>
                <div class="icons-links">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-solid fa-envelope"></i></a>
                    <a href=""><i class="fa-solid fa-phone"></i></a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar  -->
        @yield('contact')
</section>
  {{-- jQuery cdn or link script  --}}
  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  {{-- main file js  --}}
    <script src="{{asset("js/main.js")}}"></script>
    
</body>

</html>