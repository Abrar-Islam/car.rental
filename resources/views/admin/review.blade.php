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
    <div style="position:relative; top: 20px; right: -60px">
    	<table bgcolor="brown" border="3px">
    		<tr>
    			<th style="padding: 30px;">Name</th>
    			<th style="padding: 30px;">Email</th>
    			<th style="padding: 30px;">Phone</th>
          <th style="padding: 30px;">Message</th>
    		</tr>

    		@foreach($data as $data)
    		<tr align="center">
    			<td>{{$data->name}}</td>
    			<td>{{$data->phone}}</td>
          <td>{{$data->rating}}</td>
          <td>{{$data->message}}</td>
    		</tr>
    		@endforeach
    	</table>
    </div>
    </div>
    @include("admin.adminscript")
  </body>
</html>