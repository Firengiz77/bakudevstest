<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
</head>
<body>

<h2>forgot password</h2>
    <form action="{{route('forgot.password.link')}}" method="post">
        @csrf
        <input type="email" name="email" value="{{ old('email') }}">
        <button type="submit">Send Reset Password Link</button>

    </form>

    
</body>
</html>