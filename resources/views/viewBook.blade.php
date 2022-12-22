<!DOCTYPE html>
<html>
  <head>
    <title>View Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
       .body-bg-color{
  
  background-color: #FFBE5E; /* For browsers that do not support gradients */
  background-image: linear-gradient(to bottom right, #FFBE5E, #FFF8F0);
}
    </style>
  </head>
  <body class="body-bg-color">

  <nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.honestsol.com/">
      <img src="{{ asset('img/Hone-ST-Logo.png') }}" alt="Logo" width="80" height="40" class="d-inline-block align-text-top">
       Hone ST Solutions
    </a>
    <!-- <a class="nav-link" onclick="window.location.href='https://www.honestsol.com/'" >Home</a> -->
    <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
  </div>
</nav>

<center><div class="card mt-5" style="width: 20rem;">
  <img src="{{ asset('img/book_cover.png') }}" class="card-img-top" alt="book-frontpage">
  <div class="card-body">
    <h5 class="card-title">BhagavadGita Kahani Swaroop</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a onclick="window.location.href='http://127.0.0.1:8000/BhagavadGita_Kahani_Swaroop'" class="btn btn-success">Read Book</a>
  </div>
</div>
</center>

    <!-- <button type="button" onclick="window.location.href='http://127.0.0.1:8000/BhagavadGita_Kahani_Swaroop'" class="btn btn-success">View Book</button> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>