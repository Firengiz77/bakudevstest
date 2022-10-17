<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kurslar</title>
    @toastr_css

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>


@php
$user = auth()->guard('all_users')->user();
@endphp

<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<style>
    body{
        color: black;
    }
</style>

</head>
<body>


    <p> <a href="{{route('wishlist')}}">Wishlist sehifesine get :</a> </p>
@include('sevimlisayi')


    <h2>Kurslar</h2>

    @foreach ($subcategory as $s)
    @foreach ($kurs as $k)
        
    @if( $k['kcat']['subcategory_name'] === $s->subcategory_name )

        <h4> Aid oldugu Category : {{$s['subcat']['name']}}</h4>
     
 
    <h2>kursun adi :  {{$k->name}}</h2>

    {{-- <h4> Sub Category adi :  {{ $k['kcat']['subcategory_name'] }}</h4> --}}

     @csrf
     @if(Auth::guard('all_users')->check())
       <span>Sevimlilere elave et :</span>

    @if($k->id)
<button type="button"  onclick="addtoWish('{{route('addtowish')}}','{{ $k->id }}')"  id="{{ $k->id }}" >
    <img src="{{asset('/front/icons8-heart-50.png')}}" alt="">
</button>  
</form>
@endif

@else
<a href="{{route('qeydiyyat')}}">Go to Login Page</a>
@endif


  {{-- <span>{{$d->name}}</span> --}}
   <a href="{{route('kursun_dersleri',['kurs_id'=>$k->id])}}">
    <img src="{{Voyager::image($k->image)}}" alt="err" width="100px" height="100px">
</a>





    @endif
    @endforeach
    @endforeach

    {{-- @endforeach --}}

    <script src="{{asset('/front/js/own.js')}}"></script>
    

    
    <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

@jquery
    @toastr_js
    @toastr_render

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>
</html>