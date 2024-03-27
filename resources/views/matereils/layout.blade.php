<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title' , 'Unknow page')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
  <link rel="stylesheet" href="@yield('style')">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .bg-custom-color{
        background-color: #176B87;
    }
    .nav-link{
      color: white;
      font-weight: bold;
      font-family: verdana
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-custom-color">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('matereils')}}">Gestion Matereils</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="" id="">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{url('matereils')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('matereils/create')}}">Add</a>
        </li>   
      </ul>
    </div>
  </div>
</nav>
@yield('content')

</body>
</html>


