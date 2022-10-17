<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qeydiyyat</title>
    
    @toastr_css
</head>

<body>
  <h3>Qeydiyyat formu </h3>
    <form action="{{route('sendqeyd')}}" method="post">
        @csrf

        <input type="text" name="name" placeholder="Ad ve soyad">
        <input type="text" name="email" placeholder="Emailiniz">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="confirm_password" placeholder="confirm_password">
        <button type="submit"> Qeydiyyat </button>
         </a>
    </form>
 
    <a href="{{route('forgot.password.form')}}"><button type="submit">Reset Password</button></a>

    <a href="{{ url('/auth/redirect') }}"> 
        Sign in with Gmail Account
    </a>


    <h3>Login formu</h3>

    <form action="{{route('login')}}" method="post">
        @csrf
        <input type="text" name="email" placeholder="Emailiniz">
        <input type="password" name="password" placeholder="password">
        <button type="submit" > Login </button>
    </form>

    <input type="checkbox" value="remember_me" id="remember_me" name="remember_me">
    <label for="remember_me">Remember ME</label>


    <a href="{{ url('auth/redirect') }}"> 
        Sign in with Gmail Account
    </a>

    
    <br> <br> <br>
    <label for="cars">Front end:</label>

<select name="cars" id="cars">
    @foreach ($category as $c)
  <option value="{{$c->name}}" style="font-weight:900;">{{$c->name}}</option>
  @foreach ($subcategory as $s)
  @if($s->category_id === $c->id)

  <option value="{{$s->subcategory_name}}">{{$s->subcategory_name}}</option>
  @endif
  @endforeach
  @endforeach

</select>
    @jquery
    @toastr_js
    @toastr_render


</body>
</html>
