<!DOCTYPE html>
<html>
<head>
	<title>Futsal Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/theme.js') }}" defer></script>
        <script src="{{ asset('js/bs-init.js') }}" defer></script>
        <script src="{{asset('js/jquery.min.js') }}" defer></script>
        <script src="{{ asset('js/Image-Tab-Gallery-Horizontal.js') }}" defer></script>
        <script src="{{ asset('js/chart.min.js') }}" defer></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg py-3" style="">
        <div class="container">
            <a class="navbar-brand" href="/" style="font-size: 25px; color: #F1F0C0;"><span><b>Futsal Online</b> </span></a>
          <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/futaldetails">Futsal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Futsal Accessories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="border-radius:8px 0px 0px 8px">
              <button class="btn btn-warning" type="submit" style="border-radius:0px 8px 8px 0px">Search</button>
            </form>
            <div class="ms-auto">
                @if (Route::has('login'))
                <div class="ms-auto navbar-text actions">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-1000 dark:text-gray-500"style="color: #EC994B; padding-right: 5px; text-decoration: none;"><b>Log in</b></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-light action-button"style="color: rgba(0,0,0,0.9);background: #B1BCE6;border-radius: 10px;border-style: solid;border-color: #B1BCE6;font-size: 16px;padding: 5px 8px;">Register</a>
                        @endif
                    @endauth
                </div>
            @endif  
            </div>
          </div>
        </div>
      </nav>
	<div style="background-color: #9789A9;">
		@yield('home')
		@yield('display')
        @yield('futsal-list')
	</div>
	<footer class="footer-basic text-center text-white py-3" >
		    <ul class="list-inline" style="text-decoration: none; ">
		        <li class="list-inline-item px-3"><a href="#" style="text-decoration: none;font-size: 20px;">Home</a></li>
		        <li class="list-inline-item px-3"><a href="#" style="text-decoration: none;font-size: 20px;">Services</a></li>
		        <li class="list-inline-item px-3"><a href="#" style="text-decoration: none;font-size: 20px;">About</a></li>
		        <li class="list-inline-item px-3"><a href="#" style="text-decoration: none; font-size: 20px;">Terms</a></li>
		        <li class="list-inline-item px-3"><a href="#" style="text-decoration: none; font-size: 20px;">Privacy Policy</a></li>
		    </ul>
		    <p class="copyright">Futsal Online © 2022</p>
	</footer>
	
</body>
</html>