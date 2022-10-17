@extends('front.layout.app')

@section('container')


<section id="member-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <ul class="member-area-menu">
                    <li class="member-area-title">Şəxsi kabinet</li>
                    <li><a href="{{route('member_area_profil')}}"><img src="{{asset('/assets/images/icon/member-1.svg')}}"> <span>Profil</span></a></li>
                    <li><a href="{{route('member_area_abune')}}"><img src="{{asset('/assets/images/icon/member-2.svg')}}"><span>Abunəlik</span></a></li>
                    <li><a href="{{route('invoice')}}"><img src="{{asset('/assets/images/icon/member-3.svg')}}"><span>Qəbzlər</span></a></li>
                    <li class="active"><a href="{{route('wish_list')}}"><img src="{{asset('/assets/images/icon/member-4.svg')}}"><span>İstək siyahısı</span></a></li>
                    <li><a href="{{route('logout')}}"><img src="{{asset('/assets/images/icon/member-5.svg')}}"><span>Çıxış</span></a></li>
                </ul>
            </div>
                   
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                    <a href="" class="card-link"></a>
                    <div class="card-header">
                        <img src="{{asset('/assets/images/card-1.jpg')}}">
                    </div>
                    <div class="card-body">
                        <div class="card-top">
                            <span class="card-subtitle">Frontend</span>
                            <span class="card-info"><img src="{{asset('/assets/images/icon/play.svg')}}"/>8 dərs</span>
                        </div>
                        <div class="card-bottom">
                            <p class="card-title">3D shooter with multiplayer in Unity</p>
                            <i class="fas fa-play"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                    <a href="" class="card-link"></a>
                    <div class="card-header">
                        <img src="{{asset('/assets/images/card-2.jpg')}}">
                    </div>
                    <div class="card-body">
                        <div class="card-top">
                            <span class="card-subtitle">Backend</span>
                            <span class="card-info"><img src="{{asset('/assets/images/icon/play.svg')}}"/>6 dərs</span>
                        </div>
                        <div class="card-bottom">
                            <p class="card-title">Android program development.</p>
                            <i class="fas fa-play"></i>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                    <a href="" class="card-link"></a>
                    <div class="card-header">
                        <img src="{{asset('/assets/images/card-3.jpg')}}">
                    </div>
                    <div class="card-body">
                        <div class="card-top">
                            <span class="card-subtitle">Frontend</span>
                            <span class="card-info"><img src="{{asset('/assets/images/icon/play.svg')}}"/>8 dərs</span>
                        </div>
                        <div class="card-bottom">
                            <p class="card-title">3D shooter with multiplayer in Unity</p>
                            <i class="fas fa-play"></i>
                        </div>
                        
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section>


@endsection