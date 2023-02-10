<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<x-app-layout>
{{-- <h1>Edit Menu</h1>

<form action="{{route('menu.update',$menu->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <input type="text" name="title" value="{{$menu->title}}">
    </div>
    <div>
        <input type="text" name="day" value="{{$menu->day}}">
    </div>
    <div>
        <textarea name="description" id="description"   cols="30" rows="10">{{$menu->description}}</textarea>
    </div>
    <button type="submit">Update</button>
</form> --}}
<div class="py-12">

  <form class="container" action="{{route('menu.update',$menu->id)}}"  method="POST">
    @csrf
    @method('PUT')

    <div class="form-group ">
      <label for="title">Title</label>
      <input  class="form-control mt-2" name="title" id="title" value="{{$menu->title}}">
    </div>
    <div class="form-group mt-3">
      <label for="day">Day</label>
      <select class="form-control mt-2"  name="day" id="day">
        <option disabled>Select Day</option>
        <option @if ($menu->day == "Monday") selected @endif>Monday</option>
        <option @if ($menu->day == "Tuesday") selected @endif>Tuesday</option>
        <option @if ($menu->day == "Wednesday") selected @endif>Wednesday</option>
        <option @if ($menu->day == "Thursday") selected @endif>Thursday</option>
        <option @if ($menu->day == "Friday") selected @endif>Friday</option>
      </select>
    </div>
    <div class="form-group mt-3">
      <label for="description">Description</label>
      <textarea class="form-control mt-2" name="description" id="description" rows="3">{{$menu->description}}</textarea>
    </div>
    <div class="">
    <a href="" class="btn btn-primary mt-4 px-5"><button type="submit" >Update</button></a>
    <a href="{{URL('dashboard')}}" class="btn btn-secondary mt-4 px-5">Return</a>
    </div>
  </form>
</div>
</x-app-layout>