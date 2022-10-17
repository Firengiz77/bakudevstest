<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('/assets/images/icon/favicon.svg')}}">
    <!-- AOS -->
    <link rel="stylesheet" href="{{asset('/assets/aos/aos.css')}}"/>
    <title>Baku Devs</title>

    
    @toastr_css

</head>
<body>
    <header class="homepage">
        <div class="container">
            <div class="header-left">
                <a href="{{route('index')}}" class="logo"><img src="{{asset('assets/images/logo-black.svg')}}"/></a>
                <div id="menu">
                    <div class="menu-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <span>Kurslar</span>
                </div>
            </div>
            
            <div class="header-right">
                <a href="{{route('wish_list')}}" class="wish-list-btn"><i class="fas fa-heart"></i> istək siyahısı</a>
                <a href="{{route('sign_in')}}" class="sign-in-btn"><i class="fas fa-sign-in"></i> Daxil ol</a>
                <a href="{{route('sign_up')}}" class="sign-up-btn"><i class="fas fa-pen-square"></i> Qeydiyyatdan keç</a>
            </div>
        </div>
        <div id="menu-nav">
            <div class="container">
                <nav>
                    <div class="menu-ul">
                        <div class="dropdown-li">
                            <a href="#" class="menu-link ">Frontend</a>
                            <ul class="sub-menu">
                                <li><a href="" class="sub-menu-link">HTML</a></li>
                                <li><a href="" class="sub-menu-link">CSS</a></li>
                                <li><a href="" class="sub-menu-link active">Bootstrap</a></li>
                                <li><a href="" class="sub-menu-link">Javascript</a></li>
                                <li><a href="" class="sub-menu-link">JQuery</a></li>
                                <li><a href="" class="sub-menu-link">React.JS</a></li>
                            </ul>
                        </div>
                        <div class="dropdown-li">
                            <a href="#" class="menu-link active">Backend</a>
                            <ul class="sub-menu">
                                <li><a href="" class="sub-menu-link">PHP</a></li>
                                <li><a href="" class="sub-menu-link">Laravel</a></li>
                                <li><a href="" class="sub-menu-link active">Rest Api</a></li>
                            </ul>
                        </div>
                        <div class="dropdown-li">
                            <a href="#" class="menu-link ">UI/UX</a>
                            <ul class="sub-menu">
                                <li><a href="" class="sub-menu-link">Photoshop</a></li>
                                <li><a href="" class="sub-menu-link">Figma</a></li>
                                <li><a href="" class="sub-menu-link active">Adobe XD</a></li>
                                <li><a href="" class="sub-menu-link">Illustrator</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="header-right">
                        <a href="{{route('wish_list')}}" class="wish-list-btn"><i class="fas fa-heart"></i> istək siyahısı</a>
                        <a href="{{route('sign_in')}}" class="sign-in-btn"><i class="fas fa-sign-in"></i> Daxil ol</a>
                        <a href="{{route('sign_up')}}" class="sign-up-btn"><i class="fas fa-pen-square"></i> Qeydiyyatdan keç</a>
                    </div>
                    
                    <!-- <ul>
                        <li class="dropdown-li"><a href="#" class="menu-link ">Frontend</a>
                            <ul class="sub-menu">
                                <li><a href="" class="sub-menu-link">HTML</a></li>
                                <li><a href="" class="sub-menu-link">CSS</a></li>
                                <li><a href="" class="sub-menu-link active">Bootstrap</a></li>
                                <li><a href="" class="sub-menu-link">Javascript</a></li>
                                <li><a href="" class="sub-menu-link">JQuery</a></li>
                                <li><a href="" class="sub-menu-link">React.JS</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-link ">Backend</a>
                            <ul class="sub-menu">
                                <li><a href="" class="sub-menu-link">PHP</a></li>
                                <li><a href="" class="sub-menu-link">Laravel</a></li>
                                <li><a href="" class="sub-menu-link active">Rest Api</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-link active">UI/UX</a>
                            <ul class="sub-menu">
                                <li><a href="" class="sub-menu-link">Photoshop</a></li>
                                <li><a href="" class="sub-menu-link">Figma</a></li>
                                <li><a href="" class="sub-menu-link active">Adobe XD</a></li>
                                <li><a href="" class="sub-menu-link">Illustrator</a></li>
                            </ul>
                        </li>
                    </ul> -->
                </nav>
            </div>
        </div>
    </header>

@yield('container')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 footer-logo">
                    <a href="{{route('index')}}"><img src="{{asset('/assets/images/logo.svg')}}"/></a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nam aut modi odio cum vel quibusdam ea fugit ducimus</p>
                </div>
                <div class="col-12 col-lg-2">
                    <ul class="footer-menu">
                        @foreach ($category as $c )
                        <li><a href="{{route('seperal_courses',['id'=>$c->id])}}">{{ $c->name }}</a></li>
                     
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-lg-2">
                   <ul>
                        <li><a href="{{route('index')}}">Əsas səhifə</a></li>
                        <li><a href="{{route('courses')}}">Kurslar</a></li>
                        <li><a href="{{route('about')}}">Haqqımızda</a></li>
                        <li><a href="{{route('contact')}}">Əlaqə</a></li>
                   </ul>
                </div>
                <div class="col-12 col-lg-4 subscribe">
                    <p>Yeniliklərdən xəbərdar olmaq üçün <span>Qeydiyyatdan</span> keçin</p>
                    <form>
                        <input type="email" placeholder="Email"/>
                        <button><img src="{{asset('/assets/images/arrow-right.svg')}}"/></button>
                    </form>
                </div>
                <div class="col-lg-12 copyright">
                    <p>© 2022 BakuDevs.net. Müəllif hüquqları qorunur</p>
                    <a href="https://jedai.az/az/saytlarin-hazirlanmasi" target="_blank" class="jedai">Site By <img src="{{asset('/assets/images/jedai.png')}}"></a>
                </div>
            </div>
            
        </div>
    </footer>

    <div class="whatsapp"><a href="https://wa.me/" target="blank"><i class="fab fa-whatsapp"></i></a></div>
    <div class="phone-btn"><a href="tel:"><i class="fas fa-phone-alt"></i></a></div>
    <div class="back-to-top"><i class="fas fa-chevron-up"></i></div>
    
    @jquery
    @toastr_js
    @toastr_render

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="{{asset('assets/aos/aos.js')}}"></script>
    <script src="{{asset('/assets/js/main.js')}}"></script>
</body>
</html>