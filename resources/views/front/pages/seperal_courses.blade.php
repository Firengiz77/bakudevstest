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
                <li><a data-toggle="tab" >{{$category2->name}}</a></li>
            </ul>
 
        <div class="tab-content">


            <div class="tab-pane fade in active show" >
                <div class="row">

                    @foreach ($sub as $s)
                    @foreach ($kurs as $other)
                    @if( $other['kcat']['subcategory_name'] === $s->subcategory_name )

                    <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
                        <div class="card">
                            <a href="{{route('single_page',['kurs_id' => $other->id ,'id'=> $ders->id ])}}" class="card-link"></a>
                            <div class="card-header">
                                <img src="{{Voyager::image($other->image)}}">
                            </div>
                            <div class="card-body">
                                <div class="card-top">
                                    <span class="card-subtitle">{{$s['subcat']['name']}}</span>
                                    <span class="card-info"><img src="{{asset('/assets/images/icon/play.svg')}}"/>8 dərs</span>
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
    





                </div>
            </div>




        </div>
    </div>
</section>
@endsection