<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  	@include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
    <div style="position:relative; top:60px; right:-150px">
    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

        @csrf

        <div>
        <label>New Model</label>
        <input style="color:blue;" type="text" name="model" value="{{$data->model}}" required>
      </div>

      <div>
        <label>New Base Fare</label>
        <input style="color:blue; type="num" name="price" value="{{$data->price}}" required>
      </div>

      <div>
        <label>Total Capacity</label>
        <input style="color:blue; type="num" name="capacity" value="{{$data->capacity}}" required>
      </div>

      <div>
        <label>old Image</label>
        <img width="200" height="200" src="/carimage/{{$data->image}}">
      </div>

      <div>
        <label>Change Image</label>
        <input type="file" name="image" required>
      </div>

      <div>
        <label>Description</label>
        <input style="color:blue; type="text" name="description" value="{{$data->description}}" required>
      </div>

      <div>
        <input type="submit" value="Save">
      </div>

      </form>

  </div>
</div>
    @include("admin.adminscript")
  </body>
</html>