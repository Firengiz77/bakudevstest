@extends('front.layout.app')

@section('container')

    <!-- Home -->
    <section id="home">
        <div class="container">
            <div class="home-text">
                <h1 class="home-title"><span>Proqramlaşdırmanı</span> onlayn olaraq bizdən öyrənin</h1>
                <a href="" class="button">Kurslar <i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="home-img">
                <div class="shape-1"></div>
                <div class="shape-2"></div>
                <img src="{{asset('/assets/images/girl-1.png')}}" class="homepage-image"/>
            </div>
        </div>
    </section>

    <!-- Courses -->
    <section id="courses">
        <div class="container">
            <div class="courses-top">
                <h2 class="title" data-aos="fade-up">Populyar kurslar</h2>
                <ul class="nav nav-tabs" data-aos="fade-up">
                    <li><a data-toggle="tab" href="#menu4" class="active">Hamısı</a></li>
                    <li><a data-toggle="tab" href="#menu1">Frontend</a></li>
                    <li><a data-toggle="tab" href="#menu2">Backend</a></li>
                    <li><a data-toggle="tab" href="#menu3">UI/UX</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade in active show" id="menu1">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-1.jpg')}}">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="card-body">
                                    <div class="card-top">
                                        <span class="card-subtitle">Frontend</span>
                                        <span class="card-info"><img src="{{asset('assets/images/icon/play.svg')}}"/>8 dərs</span>
                                    </div>
                                    <div class="card-bottom">
                                        <p class="card-title">3D shooter with multiplayer in Unity</p>
                                        <i class="fas fa-play"></i>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
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
                <div class="tab-pane fade" id="menu2">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-2.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-1.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-1.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-2.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-1.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-2.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
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
                    </div>
                </div>
                <div class="tab-pane fade" id="menu3">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-3.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-2.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-3.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-2.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-3.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-2.jpg')}}">
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
                <div class="tab-pane fade" id="menu4">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-1.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-2.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-3.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-2.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-3.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="" class="card-link"></a>
                                <div class="card-header">
                                    <img src="{{asset('/assets/images/card-2.jpg')}}">
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefit -->
    <section id="benefit">
        <div class="container">
            <h2 class="title" data-aos="fade-up">BakuDevs ilə istədiyiniz biliklərə sahib olun!</h2>
            <p class="subtitle" data-aos="fade-up">Nə üçün tədrisinizi məhz bizdə keçməlisiniz? Bunun üçün ən azı dörd səbəb var:</p>
            <div class="row">
                <div class="col-lg-7">
                    <div class="card" data-aos="fade-up">
                        <div class="card-img"><img src="{{asset('/assets/images/icon/money.svg')}}"/></div>
                        <p class="card-title">Sərfəli qiymət</p>
                        <p class="card-subtitle">Ayda cəmi 10 AZN ödəniş etməklə saytımızdaki bütün kurslar sizin üçün tam açıq olacaq!</p>
                    </div>
                    <div class="card" data-aos="fade-up">
                        <div class="card-img"><img src="{{asset('/assets/images/icon/video.svg')}}"/></div>
                        <p class="card-title">Video və Yazılı format</p>
                        <p class="card-subtitle">Bizim saytımızda siz dərslərə həm video formatında, həm də yazılı izah formatında rahat baxa bilərsiniz </p>
                    </div>
                    <div class="card" data-aos="fade-up">
                        <div class="card-img"><img src="{{asset('/assets/images/icon/task.svg')}}"/></div>
                        <p class="card-title">Tapşırıqlar və Layihələr</p>
                        <p class="card-subtitle">Hər dərsin və kursun sonunda sizə tapşırıqlar və layihələr veriləcək. Siz onları yerinə yetirərək, praktik təcrübənizi artıracaqsınız və portfolionuzu yaratmış olacaqsınız</p>
                    </div>
                    <div class="card" data-aos="fade-up">
                        <div class="card-img"><img src="{{asset('/assets/images/icon/certificate.svg')}}"/></div>
                        <p class="card-title">Sertifikat veririk</p>
                        <p class="card-subtitle">Siz bizim saytımızda hər hansı bir kursu bitirdikdən sonra, avtomatik olaraq BakuDevs sertifikatı əldə edəcəksiniz. Bu sertifikat sizin bilik və bacarıqlarınızı təsdiq edəcək</p>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-up">
                    <div class="benefit-img">
                        <img src="assets/images/ustunluk.png" class="benefit-imgs"/>
                        <div class="shape-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection