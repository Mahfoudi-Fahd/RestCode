
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href={{url('css/style.css')}}>

<x-app-layout>
    <section class="d-flex justify-content-center">
        <div class="container  mt-5" style="width: 40rem;">
            <img src="../../img/299999752_392313242960766_7814705602697265711_n.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
                {{-- @dump($menu[0]); --}}
                <h2>{{ $menu[0]->title}}</h2>
                <p>{{$menu[0]->day}}</p>
                <p class="card-text">{{$menu[0]->description}}</p>
            </div>
          </div>
    </section>
</x-app-layout>