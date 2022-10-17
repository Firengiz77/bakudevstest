@extends('front.layout.app')

@section('container')

   <!-- breadcrumb -->
   <section id="breadcrumb">
    <div class="container">
        <div class="title-div">
            <h2 class="title">Əlaqə</h2>
        </div>
        <ul class="breadcrumb breadcrumb-style-2">
            <li><a href="{{route('index')}}">Əsas səhifə</a><i class="fas fa-circle"></i></li>
            <li>Əlaqə</li>
        </ul>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up">
                <div class="card">
                    <i class="fas fa-phone-alt"></i>
                    <p>Telefon</p>
                    @foreach ($contact as $c)
                    <a href="tel:{{$c->phone}}">{{$c->phone}}</a>
                    @endforeach
                  
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up">
                <div class="card">
                    <i class="fas fa-envelope"></i>
                    <p>Email</p>
                    @foreach ($contact as $c )
                    <a href="mailto:{{$c->email}}">{{$c->email}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up">
                <div class="card">
                    <i class="fab fa-whatsapp"></i>
                    <p>Whatsapp</p>
                    @foreach ($contact as $c )
                    <a href="https://wa.me/{{$c->whatsapp}}" target="_blank">{{$c->whatsapp}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up">
                <div class="card">
                    <i class="fas fa-share-alt"></i>
                    <p>Sosial şəbəkələr</p>
                    <div class="social-link">
                        @foreach ($contact as $c)
                     @if($c->facebook != null)
                        <a href="{{$c->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      @endif
                      @if($c->whatsapp != null)
                        <a href="https://wa.me/{{$c->whatsapp}}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        @endif
                        @if($c->instagram != null)
                        <a href="{{$c->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                        @endif
                        @if($c->telegram != null)
                        <a href="{{$c->telegram}}" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact-form">
    <div class="container">
        <div class="shape-contact"></div>
        <h2 class="title" data-aos="fade-up">Suallarınız var?</h2>
        <p class="subtitle" data-aos="fade-up">Formu doldurun. Yaxın zamanda sizinlə əlaqə saxlayacayıq.</p>
     
    <form action="{{route('sendemail')}}" method="post">
        @csrf
            <div class="form-row">
                <div class="col-12 col-lg-5" data-aos="fade-right">
                    <input class="form-control"  name="name" type="text" placeholder="Adınız və Soyadınız">
                    @if($errors->has('name'))
                    <p class="alert alert-success">{{ $errors->first('name') }}</p>
                @endif

                    <input class="form-control" type="email" name="email" placeholder="Email ünvanı">
                    @if($errors->has('email'))
                    <p class="alert alert-success">{{ $errors->first('email') }}</p>
                @endif

                    <input class="form-control" type="number" name="phone" placeholder="Əlaqə nömrəsi">
                    @if($errors->has('phone'))
                    <p class="alert alert-success">{{ $errors->first('phone') }}</p>
                @endif

                </div>
                <div class="col-12 col-lg-5" data-aos="fade-left">
                    <textarea class="form-control" name="msj" placeholder="Mesajınız"></textarea>
                    @if($errors->has('msj'))
                    <p class="alert alert-success">{{ $errors->first('msj') }}</p>
                @endif
                </div>
                <div class="col-12 form-btn" data-aos="fade-up">
                    <button class="button" type="submit">Göndər <i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </form>
    </div>
</section>



@endsection