<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <ul>
  
   @for($i=0;$i<count($keys);$i++)
   	<li>{{$keys[$i]}}: {{$data[$keys[$i]]}}</li>
   	@endfor
   

   @foreach($keys as $key)
   	<li>{{$key}}:{{$data[$key]}}</li>
   @endforeach

   </ul>
</body>
</html>