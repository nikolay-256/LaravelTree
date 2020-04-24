
</<!DOCTYPE html>
<html>
<head>
   
</head>
<body>

<h1>All Information About Devices</h1>

@foreach ($devices as $device)
<li> {{ $device}}  </li>
@endforeach

<h1>Only Names Of Devices</h1>

@foreach ($devices as $device)

<li> {{ $device->name}}  </li>

@endforeach

<h1>Only Description Of Devices</h1>

@foreach ($devices as $device)

<li> {{ $device->description}}  </li>

@endforeach


    
</body>
</html>