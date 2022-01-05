<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  	@include("admin.admincss")
  </head>
  <body>
  	<div class="container-scroller">
    @include("admin.navbar")
    <div style="position:relative; top:60px; right:-150px;">
      <div><h2 style="padding:10px">Add New Item:</h2></div>
      <form action="{{url('/addcar')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div>
        <label>Model</label>
        <input style="color:blue;" type="text" name="model" placeholder="Write the Model" required>
      </div>

      <div>
        <label>Base Fare</label>
        <input style="color:blue; type="num" name="price" placeholder="Input the Price" required>
      </div>

      <div>
        <label>Image</label>
        <input type="file" name="image" required>
      </div>

      <div>
        <label>Total Capacity</label>
        <input style="color:blue; type="num" name="capacity" placeholder="Total Capacity" required>
      </div>

      <div>
        <label>Description</label>
        <input style="color:blue; type="text" name="description" placeholder="Write a Description" required>
      </div>

      <div>
        <input type="submit" value="Save">
      </div>

      </form>
      
      <div><h2 style="padding:10px">View/Edit Item:</h2></div>
      <div>
        <table bgcolor="black">
          <tr>
          <th style="padding:30px">Car Model</th>
          <th style="padding:30px">Base Fare</th>
          <th style="padding:30px">Immage</th>
          <th style="padding:30px">Total Capacity</th>
          <th style="padding:30px">Description</th>
          <th style="padding:30px">Action</th>
          <th style="padding:30px">Change</th>
        </tr>
        @foreach($data as $data)
        <tr align="center">
          <td>{{$data->model}}</td>
          <td>{{$data->price}}$</td>
          <td><img height="200" width="200" src="/carimage/{{$data->image}}"></td>
          <td>{{$data->capacity}}</td>
          <td>{{$data->description}}</td>
          <td><a href="{{url('/deletecar',$data->id)}}">Delete</a></td>
          <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
        </tr>
        @endforeach
        </table>
      </div>
    </div>
</div>
    @include("admin.adminscript")
  </body>
</html>