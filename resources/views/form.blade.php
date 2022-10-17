<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>From Blade</title>
    @toastr_css
</head>
<body>

    <form action="{{route('sendemail')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name" >

        @if($errors->has('name'))
        <p class="alert alert-success">{{ $errors->first('name') }}</p>
    @endif
        <input type="email" name="email" placeholder="Email" >
        @if($errors->has('email'))
        <p class="alert alert-success">{{ $errors->first('email') }}</p>
    @endif
        <input type="phone" name="phone" placeholder="0708888888" >
        @if($errors->has('phone'))
        <p class="alert alert-success">{{ $errors->first('phone') }}</p>
    @endif
        <input type="text" name="msj" placeholder="Messages" >
        @if($errors->has('msj'))
        <p class="alert alert-success">{{ $errors->first('msj') }}</p>
    @endif



        <button type="submit">Send</button>
    </form>
    
    
    @jquery
    @toastr_js
    @toastr_render

</body>
</html>