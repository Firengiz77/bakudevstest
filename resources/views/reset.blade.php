<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset</title>
    @toastr_css
</head>
<body>
<h4>Reset Password</h4>


<form action="{{route('resetpass')}}" method="post">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">

    <input type="email" name="email" placeholder="email" value="{{ $email ?? old('email') }}">
    <input type="password" name="password" placeholder="New password">
    <input type="password" name="confirmpassword" placeholder="Confirm Password">

<button type="submit"> Reset Password </button>


</form>



@jquery
@toastr_js
@toastr_render
</body>
</html>