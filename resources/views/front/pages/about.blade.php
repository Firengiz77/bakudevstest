@extends('front.layout.app')
@section('container')

    <!-- breadcrumb -->
    <section id="breadcrumb">
        <div class="container">
            <div class="title-div">
                <h2 class="title">Haqqımızda</h2>
            </div>
            <ul class="breadcrumb breadcrumb-style-2">
                <li><a href="{{route('index')}}">Əsas səhifə</a><i class="fas fa-circle"></i></li>
                <li>Haqqımızda</li>
            </ul>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="shape-1"></div>
                    <div class="shape-3"><span></span></div>
                    <div  class="about-img">
                        <img src="{{asset('/assets/images/about.jpg')}}"/>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <h2 class="title">BakuDevs haqqında məlumat</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus sed turpis risus molestie auctor vel. Iaculis augue diam tempus aliquet eu, pulvinar feugiat. Suscipit non viverra dignissim dolor augue morbi. Odio maecenas dolor, hac sodales non donec. Felis, non venenatis massa tincidunt massa quis libero in odio. Sapien, quis a viverra odio orci. Pretium molestie blandit faucibus eu, placerat sagittis, odio duis molestie. Sagittis, pretium, mi, faucibus lectus posuere pharetra amet, in.</p>
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
                        <img src="{{asset('/assets/images/ustunluk.png')}}" class="benefit-imgs"/>
                        <div class="shape-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection