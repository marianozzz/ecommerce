<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<style>
 body {
 font-family: 'Nunito', sans-serif;
 }
.footer {
  
  background-position: bottom;
  background-repeat: no-repeat;
  width: 100%;
  min-height: 50px;
}

</style>
</head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar scroll</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Link
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
                  </li>
                </ul>
               
                  <ul class="navbar-nav">
                    @if (Route::has('login')) 
                    @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                     <li style="padding-left: 15px;padding-right: 15px;">
                        <a  class="btn btn-outline-success" href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                     </li>
                     @if (Route::has('register'))
                      <li>
                        <a class="btn btn-outline-success" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                      </li>
                      @endif
                      @endauth
                      @endif
                  </ul>
                 
               
              </div>
            </div>
        </nav>

     
    <div class="container-fluid mt-4">
        <div class="row  justify-content-center ">
            <div class="col-md-3 ">
                <div class="card" style="width: 18rem;">
                    <img src="https://soprema.us/wp-content/uploads/2014/12/200x200.gif" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 " style="padding-left: 15px;padding-right: 15px;">
                <div class="card" style="width: 18rem;">
                    <img src="https://soprema.us/wp-content/uploads/2014/12/200x200.gif" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://soprema.us/wp-content/uploads/2014/12/200x200.gif" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-4 py-3 bg-dark fixed-bottom ">
        <div class="container">
          <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer>
    </body>
</html>
