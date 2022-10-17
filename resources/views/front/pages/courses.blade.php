@extends('front.layout.app')
@section('container')
   <!-- breadcrumb -->
   <section id="breadcrumb">
    <div class="container">
        <div class="title-div">
            <h2 class="title">Kurslar</h2>
        </div>
        <ul class="breadcrumb breadcrumb-style-2">
            <li><a href="{{route('index')}}">Əsas səhifə</a><i class="fas fa-circle"></i></li>
            <li>Kurslar</li>
        </ul>
    </div>
</section>


<section id="courses" class="listing-course">
    <div class="container">
        
            <ul class="nav nav-tabs courses-tab" data-aos="fade-up">
                <li><a data-toggle="tab" href="#menu4" class="active">Hamısı</a></li>
              
                <li><a data-toggle="tab" href="#menu1">Frontend</a></li>
                <li><a data-toggle="tab" href="#menu2">Backend</a></li>
                <li><a data-toggle="tab" href="#menu3">UI/UX</a></li>
            </ul>
 
        <div class="tab-content">


            <div class="tab-pane fade in active show" id="menu1">
                <div class="row">

                    @foreach ($sub2 as $s)
                    @foreach ($othercourses as $other)
                   
                    @if( $other['kcat']['subcategory_name'] === $s->subcategory_name )
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
                        <div class="card">
                            @foreach ($ders as $d ) 
                            <a href="{{route('single_page',['kurs_id'=> $other->id, 'id'=> $d->id])}}" class="card-link"></a>          
                              @endforeach
                        
                            <div class="card-header">
                                <img src="{{Voyager::image($other->image)}}">
                            </div>
                            <div class="card-body">
                                <div class="card-top">
                                    <span class="card-subtitle">{{$s['subcat']['name']}}</span>
                                    <span class="card-info"><img src="{{asset('/assets/images/icon/play.svg')}}"/>@if($other->id == $d->kurs_id) {{$d->count()}} @endif   dərs</span>
                                </div>
                                <div class="card-bottom">
                                    <p class="card-title">{{$other->name}}</p>
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endforeach

                </div>
            </div>


            <div class="tab-pane fade" id="menu2">
                <div class="row">

                    @foreach ($sub3 as $s)
                    @foreach ($othercourses as $other)
                    @if( $other['kcat']['subcategory_name'] === $s->subcategory_name )

                    <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
                        <div class="card">
                            @foreach ($ders as $d ) 
                            <a href="{{route('single_page',['kurs_id'=> $other->id, 'id'=> $d->id])}}" class="card-link"></a>          
                              @endforeach
                            <div class="card-header">
                                <img src="{{Voyager::image($other->image)}}">
                            </div>
                            <div class="card-body">
                                <div class="card-top">
                                    <span class="card-subtitle">{{$s['subcat']['name']}}</span>
                                    <span class="card-info"><img src="{{asset('/assets/images/icon/play.svg')}}"/>@if($other->id == $d->kurs_id) {{$d->count()}} @endif   dərs</span>
                                </div>
                                <div class="card-bottom">
                                    <p class="card-title">{{$other->name}}</p>
                                    <i class="fas fa-play"></i>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    @endif
                    @endforeach
                    @endforeach
                


                </div>
            </div>

            <div class="tab-pane fade" id="menu3">
                <div class="row">
                    @foreach ($sub4 as $s)
                    @foreach ($othercourses as $other)
                    @if( $other['kcat']['subcategory_name'] === $s->subcategory_name )

                    <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
                        <div class="card">
                                  
                            @foreach ($ders as $d ) 
                            <a href="{{route('single_page',['kurs_id'=> $other->id, 'id'=> $d->id])}}" class="card-link"></a>          
                              @endforeach
                        
                            <div class="card-header">
                                <img src="{{Voyager::image($other->image)}}">
                            </div>
                            <div class="card-body">
                                <div class="card-top">
                                    <span class="card-subtitle">{{$s['subcat']['name']}}</span>
                                    <span class="card-info"><img src="{{asset('/assets/images/icon/play.svg')}}"/>@if($other->id == $d->kurs_id) {{$d->count()}} @endif  dərs</span>
                                </div>
                                <div class="card-bottom">
                                    <p class="card-title">{{$other->name}}</p>
                                    <i class="fas fa-play"></i>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                  


                </div>
            </div>

            <div class="tab-pane fade" id="menu4">
                <div class="row">

                    @foreach ($subcategory as $s)
                    @foreach ($allcourse as $all)
                    @if( $all['kcat']['subcategory_name'] === $s->subcategory_name )
                  
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
                        <div class="card">
                            @foreach ($ders as $d ) 
                            <a href="{{route('single_page',['kurs_id'=> $all->id, 'id'=> $d->id])}}" class="card-link"></a>          
                              @endforeach
                            <div class="card-header">
                                <img src="{{Voyager::image($all->image)}}">
                            </div>
                            <div class="card-body">
                                <div class="card-top">
                                    <span class="card-subtitle">{{$s['subcat']['name']}}</span>
                                    <span class="card-info"><img src="{{asset('/assets/images/icon/play.svg')}}"/> {{$countsub2}} dərs</span>
                                </div>
                                <div class="card-bottom">
                                    <p class="card-title">{{$all->name}}</p>
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endforeach


                </div>
            </div>




        </div>
    </div>
</section>
@endsection