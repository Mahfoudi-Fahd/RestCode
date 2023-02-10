

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href={{url('css/style.css')}}>





<x-app-layout>
  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
        </h2>
    </x-slot>

   
    
    {{-- <form action="{{route('menu.store')}}" method="POST">
      @csrf
      <div>
          <input type="text" name="title" placeholder="Menu Title">
      </div>
      <div>
          <input type="text" name="day" placeholder="Day">
      </div>
      <div>
          <textarea name="description" id="description" placeholder="Description" cols="30" rows="10"></textarea>
      </div>
      <button type="submit" class="btn btn-light">create</button>
    </form> --}}
{{-- ---------------------------------- --}}
    <form class="container " action="{{route('menu.store')}}"  method="POST">
      @csrf
      <div class="form-group mt-4">
        <label for="title">Title</label>
        <input class="form-control mt-2" name="title" id="title" placeholder="Title">
      </div>
      <div class="form-group mt-3">
        <label for="day">Day</label>
        <select class="form-control mt-2" name="day" id="day">
          <option selected disabled>Select Day</option>
          <option>Monday</option>
          <option>Tuesday</option>
          <option>Wednesday</option>
          <option>Thursday</option>
          <option>Friday</option>
        </select>
      </div>
      <div class="form-group mt-3">
        <label for="description">Description</label>
        <textarea class="form-control mt-2" name="description" id="description" rows="3"></textarea>
      </div>
      <div class="d-flex justify-content-center">
        <a href="" class="btn btn-light mt-4 col-md-4 "><button type="submit" class="">create</button></a>

      </div>
    </form>
{{-- --------------------------------------------------------}}
    
    <div class="py-12">
        <div class="">
          <div class="container">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Image</th>
                  <th scope="col">Title</th>
                  <th scope="col">Day</th>
                  <th scope="col">Description</th>
                  <th scope="col" class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($menus as $menu)
                <tr>
                  <th scope="row">{{$menu->id}}</th>
                  <th scope="row"><img class="rounded-circle" src="../../img/299999752_392313242960766_7814705602697265711_n.jpg" alt="Img" style="width:50px;height:50px;"></th>
                  <td>{{$menu->title}}</td>
                  <td>{{$menu->day}}</td>
                  <td class=" text-truncate" style="max-width: 100px;">{{$menu->description}}</td>
                  <td class="text-center">
                    <a href="{{route('menu.show',$menu->id)}}" class="btn btn-outline-success"><i class='bx bx-show'></i></a>
                    <a href="{{route('menu.edit',$menu->id)}}" class="btn btn-outline-secondary"><i class='bx bxs-edit' ></i></a>
                    <a href="{{route('menu.delete',$menu->id)}}" class="btn btn-outline-danger"><i class='bx bx-trash bx-tada' ></i></a>
                  </td>
                </tr>
              @endforeach
          </tbody>
            </table>
            </div>
        </div>
    </div>
</x-app-layout>
