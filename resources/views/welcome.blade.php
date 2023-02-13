<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href={{url('css/style.css')}}>

<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">    


        <!-- Styles -->
       

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="">

            <nav class="navbar navbar-dark bg-dark ">
               
                    
                
                <div class="container-fluid">
                    
                    <a class="navbar-brand" href="{{ URL('/') }}">
                        <img src="/img/logo-white.png" style="height:40px;" alt="">
                        <small style="font-size: 10px; font-weight: 700; margin-top: -20px;">RESTAURANT</small>
                    </a>
                        @if (Route::has('login'))
                      <div class=" ms-3 me-3 hidden fixed top-0 right-0 px-6 py-4 sm:block">
                          @auth
                              <a href="{{ url('/dashboard') }}" class="Logo ">Dashboard</a>
                          @else
                              <a href="{{ route('login') }}" class="ms-3 me-3 Logo">Log in</a>
      
                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}" class=" ms-3 me-3 Logo">Register</a>
                              @endif
                          @endauth
                      </div>
                  @endif
                </div>
              </nav>

            
            
           
                <section class="d-flex flex-wrap ms-4 justify-content-center col-12">
                    @foreach ($menus as $menu)
                    
                    <div class="card  mt-5  me-5" style="width: 20rem;">
                        <h2 class="title">{{$menu->day}}</h2>
                        <img src="/img/299999752_392313242960766_7814705602697265711_n.jpg" alt="">
                        <p class="card-desc">{{$menu->description}}</p>
                    </div>
                    
                    @endforeach   
                </section> 
             
              

                <!-- <section class="d-flex flex-wrap ms-5 justify-content-center col-12">
                    <div class="card mt-5  me-5" style="width: 20rem;">
                        <img src="../../img/299999752_392313242960766_7814705602697265711_n.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h2>TEST</h2>
                            <p>test</p>
                            <p class="card-text">test</p>
                        </div>
                      </div>
                    <div class="card mt-5 me-5" style="width: 20rem;">
                        <img src="../../img/299999752_392313242960766_7814705602697265711_n.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h2>TEST</h2>
                            <p>test</p>
                            <p class="card-text">test</p>
                        </div>
                      </div>
                    <div class="card mt-5 me-5" style="width: 20rem;">
                        <img src="../../img/299999752_392313242960766_7814705602697265711_n.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h2>TEST</h2>
                            <p>test</p>
                            <p class="card-text">test</p>
                        </div>
                      </div>
                </section> -->
                
                
            </div>
        </div>
    </body>
</html>
