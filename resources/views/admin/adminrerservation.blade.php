<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  	@include("admin.admincss")
  </head>
  <body>
    <div style="background-color:brown;" class="container-scroller">
    @include("admin.navbar")
    <div style="position:relative; top:60px; right:-150px">
    <table bgcolor="black">
      <tr>      
      <th style="padding:60px">Name</th>
      <th style="padding:60px;">Email</th>
      <th style="padding:60px">Phone</th>
      <th style="padding:60px">Date</th>
      <th style="padding:60px">Message</th>
    </tr>
    @foreach($data as $data)
    <tr align="center">
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->date}}</td>
      <td>{{$data->message}}</td>
    </tr>
    @endforeach
    </table>
</div>
  </div>
    @include("admin.adminscript")
  </body>
</html>