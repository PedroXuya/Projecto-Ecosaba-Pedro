<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible" content= "IE-edge">
        <meta name="viewport" conten="width=device-widht, initial-scale=1.0">
        <title>PASTELES</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <style>
    body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    .color-container{
        width: 16px;
        height: 16px;
        display: inline-block;
        border-radiuas: 4px;
    }
    a{
        text-decoration: none;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PASTELERIA "TITAN EL NIÑO FELIZ"</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Ingredientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Precios de pasteles</a>
      </ul>
    </div>
  </div>
</nav>
    @yield('content')
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>PASTELES</option>
  <option value="1">Fresas con crema</option>
  <option value="2">Zanahoria con nueces</option>
  <option value="3">Tiramisu</option>
</select>
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>PRECIO</option>
  <option value="1">Pequeño Q99</option>
  <option value="2">Mediano Q150</option>
  <option value="3">Grande Q200</option>
</select>
</body>
</html>