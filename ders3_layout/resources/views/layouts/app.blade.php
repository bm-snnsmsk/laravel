@include('layouts.aa.list')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>laravel | @yield('title')</title>   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    @yield('css')

</head>
  <body>
   
  <!--top start--> 
  
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  <!--top end--> 

    <!--main start-->  
    @yield('content')

<!-- if-else kullanımı start  -->
    @php
    $sayi = 1 ;
    @endphp

    @if($sayi == 1)
    sayi 1
    @else
    sayi 1 değildir
    @endif
    <!-- if-else kullanımı end  -->



    <br/> <br/>
    
    <!-- for - foreach kullanımı start  --> 
    @for($i = 1 ; $i < 5 ; $i++)

    geçerli değer  {{ $i }} <br/>
    
    @endfor
    <!--for - foreach kullanımı end  -->

    <br/> <br/>
    
    <!-- for - foreach kullanımı start  --> 
    @php
    $users = ['sinan', 'baran', 'kendal']
    @endphp

    @if(count($users))
    @foreach($users as $user)

   <li>geçerli kullanıcı  {{ $user }}</li> 
    
    @endforeach
    @endif
    <!--for - foreach kullanımı end  -->

    <br/> <br/>
    
    <!-- switch kullanımı start  --> 
    @php
    $data = 20 ;
    @endphp

    @switch($data)
    @case(1)   numara 1   @break
    @case(2)   numara 2  @break
    @case(3)   numara 3  @break

    @default   geçersiz değer
    @endswitch
    <!--switch kullanımı end  -->

   


   
   <!--main end--> 

   <br/> <br/>

    <!--footer start--> 
  
<div>footer alanı</div>
  <!--footer end--> 





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>

