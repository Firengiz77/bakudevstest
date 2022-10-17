<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dersler Videolu single</title>
</head>
<style>
    body{
        color: black;
    }
</style>
<body>

<h2>Welcome single video derleri</h2>
<h2>Ders adi : {{$ders->name}}</h2>
<h2>Kurs adi :{{$kurs->name}}</h2>
<h3>Ders title : {{$ders->title}}</h3>
<h3>Ders Description : {!! $ders->video_title !!}</h3>
<h1>Video Ders :</h1>




<video src="{{Voyager::image(json_decode($ders->video)[0]->download_link)}}" controls  width="320" height="240">
<source  src="{{Voyager::image(json_decode($ders->video)[0]->download_link)}}" type="video/mp4">
</video>



<h2>Sual cavab yeri :</h2>
@foreach ($sual_cavab as $sc)

<p>Sual :{{$sc->sual}}</p>
<span>Cavab: <br>
    {!! $sc->cavab !!}

</span>

@endforeach


<h2>Eyni kursun diger dersleri :</h2>

@foreach ($ders2 as $d2 )

<p> <a href="{{route('single',['kurs_id' => $d2->kurs_id,'id'=> $d2->id])  }}" >  {{$d2->name}}  </a>  </p>
    
@endforeach


    
</body>
</html>