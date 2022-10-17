<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wishlist</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <style>
      body{
          color: black;
      }
  </style>

</head>
<body>
 <h2>All course which you had been added wishlist :</h2>
 @include('sevimlisayi')
 @foreach ($wishlist as $w )


 <h1>Kursun adi: {{$w['wishlist']['name']}}</h1>
 <h2>Image : </h2>

 @csrf
 @if(Auth::guard('all_users')->check())
   <span>Sevimlilere elave et :</span>

 <button type="button"  onclick="addtoWish('{{route('addtowish')}}','{{ $w['wishlist']['id'] }}')"  id="{{ $w['wishlist']['id'] }}" >
     <img src="{{asset('/front/icons8-heart-50 (1).png')}}" alt="">
 </button>  
 </form>

 @else
 <a href="{{route('qeydiyyat')}}">Go to Login Page</a>
 @endif


<img src="{{Voyager::image($w['wishlist']['image'])}}" alt="err" width="100px" height="100px">

 @endforeach


 <a href="{{route('kurslar')}}">Kurslara qayit</a>
 
 <script src="{{asset('/front/js/own.js')}}"></script>
    

    
 <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>
</html>