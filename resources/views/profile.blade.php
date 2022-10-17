<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    <h2 style="color: black">Welcome</h2>
    <h2 style="color: black" > welcome :  {{ $admindata->id }}   </h2>
    <h2 style="color: black" > welcome :  {{ $admindata->name }}   </h2>
    <h2 style="color: black"> welcome :  {{ $admindata->email }}   </h2>
    <h2 style="color: black"> welcome :  {{ $admindata->password}}   </h2>



    <h3>Update Password</h3>
    
    <form action="{{route('updatepassword')}}" method="post" >
        @csrf

        <input type="password" name="oldpassword" placeholder="Old Password">
        <input type="password" name="password" placeholder="New Password">
       
        <button type="submit"> Update Password </button>

    </form>

    <a href="{{route('logout')}}">
        <button type="submit">Logout</button>
        </a>


<a href="{{route('kurslar')}}"> <span>Go to Kurslar:</span>  </a>


</body>
</html>