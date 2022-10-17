@extends('front.layout.app')
@section('container')



    <!-- breadcrumb -->
    <section id="breadcrumb">
        <div class="container">
            <div class="title-div">
                <h2 class="title">{{$ders['subcat']['name']}}</h2>
            </div>
        </div>
    </section>
    
    <section id="single-course">
        <div class="container">
            <div class="share">
                <i class="fas fa-share-alt"></i>
                <img src="{{asset('/assets/images/fb.png')}}">
                <img src="{{asset('/assets/images/insta.png')}}">
                <img src="{{asset('/assets/images/wp.png')}}">
                <img src="{{asset('/assets/images/tg.png')}}">
            </div>
            <ul class="breadcrumb breadcrumb-style-2">
                <li><a href="{{route('index')}}">Əsas səhifə</a><i class="fas fa-circle"></i></li>
                <li><a href="{{route('courses')}}">Kurslar</a><i class="fas fa-circle"></i></li>
                <li>{{$ders['subcat']['name']}}</li>
            </ul>
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-top">
                        <span class="course-top-subtitle">Backend</span>
                        <span class="course-top-info"><img src="{{asset('/assets/images/icon/play.svg')}}"/>{{ $ders1->count() }} dərs</span>
                    </div>
                    <div class="course-title">
                        <img src="{{Voyager::image($ders['subcat']['image'])}}">
                        <h2 class="title">{{$ders['subcat']['name']}} / #1 - {{$ders->name}}</h2>
                    </div>


                    <div class="course-content">
                        <p class="text">{{$ders->title}}</p>
                        <h4 class="subtitle">Videodərs</h4>
                      
                            <video src="{{Voyager::image(json_decode($ders->video)[0]->download_link)}}" controls  width="320" height="240">
                                <source  src="{{Voyager::image(json_decode($ders->video)[0]->download_link)}}" type="video/mp4">
                                </video>
                        <p class="text">{!! $ders->video_title !!}</p>
                        <h4 class="subtitle">Android Development</h4>
                        <img src="{{asset('/assets/images/single2.jpg')}}">
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum rem cupiditate explicabo impedit mollitia illo non aperiam eius beatae. Sed accusantium tempore repudiandae est repellat minima animi magnam aspernatur nostrum?</p>
                        <h4 class="subtitle">Цикл For</h4>
                        <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore ad, a reprehenderit eligendi qui necessitatibus officia eveniet non recusandae similique odio magnam animi ut nulla architecto veritatis nesciunt temporibus excepturi?</p>
                        <div class="course-code">
                            <p>for ($i = 0; $i < 10; $i++)</p>
                            <p>echo $i;</p>
                        </div>
                        <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore ad, a reprehenderit eligendi qui necessitatibus officia eveniet non recusandae similique odio magnam animi ut nulla architecto veritatis nesciunt temporibus excepturi?</p>
                        <div class="course-code">
                            <p>$i = 1; // Создание переменной</p>
                            <p>while ($i <= 10) { // Здесь только условие</span>
                            <p>echo $i;</p>
                            <p>$i++; // Увеличение переменной</p>
                            <p>}</p>
                        </div>
                        <h4 class="subtitle">Исходный код</h4>
                        <p class="course-code-title">Операторы в циклах</p>
                        <div class="course-code">
                            <p>for($el = 100; $el > 10; $el /= 2) {</p>
                            <p>if($el < 15)</p>
                            <p>break;</p>
                            <p>if($el % 2 == 0)</p>
                            <p>continue;</p>
                            <p>echo $el.;</p>
                            <p>}</p>
                        </div>
                    </div>
                    <div class="solution-content">
                        <h2><i class="fa-solid fa-file-lines"></i> Задание к уроку</h2>
                        <div class="solution-div">
                            <h4 class="subtitle">Вывести в цикле</h4>
                            <p>Выведите столбец чисел от 16 до 23 с пропуском числа 21. Используйте цикл for, а также сделайте тоже самое с циклом while.</p>
                            <button class="solution-btn">Cavaba bax </button>
                            <div class="solution">
                                <h5>Код для цикла for:</h5>
                                <div class="solution-code">
                                    <p>$i = 1; // Создание переменной</p>
                                    <p>while ($i <= 10) { // Здесь только условие</span>
                                    <p>echo $i;</p>
                                    <p>$i++; // Увеличение переменной</p>
                                    <p>}</p>
                                </div>
                                <h5>Код для цикла for:</h5>
                                <div class="solution-code">
                                    <p>$i = 1; // Создание переменной</p>
                                    <p>while ($i <= 10) { // Здесь только условие</span>
                                    <p>echo $i;</p>
                                    <p>$i++; // Увеличение переменной</p>
                                    <p>}</p>
                                </div>
                            </div>
                        </div>
                        <div class="solution-div">
                            <h4 class="subtitle">Вывести в цикле</h4>
                            <p>Выведите столбец чисел от 16 до 23 с пропуском числа 21. Используйте цикл for, а также сделайте тоже самое с циклом while.</p>
                            <button class="solution-btn">Cavaba bax </button>
                            <div class="solution">
                                <h5>Код для цикла for:</h5>
                                <div class="solution-code">
                                    <p>$i = 1; // Создание переменной</p>
                                    <p>while ($i <= 10) { // Здесь только условие</span>
                                    <p>echo $i;</p>
                                    <p>$i++; // Увеличение переменной</p>
                                    <p>}</p>
                                </div>
                                <h5>Код для цикла for:</h5>
                                <div class="solution-code">
                                    <p>$i = 1; // Создание переменной</p>
                                    <p>while ($i <= 10) { // Здесь только условие</span>
                                    <p>echo $i;</p>
                                    <p>$i++; // Увеличение переменной</p>
                                    <p>}</p>
                                </div>
                            </div>
                        </div>
                        <div class="solution-div">
                            <h4 class="subtitle">Вывести в цикле</h4>
                            <p>Выведите столбец чисел от 16 до 23 с пропуском числа 21. Используйте цикл for, а также сделайте тоже самое с циклом while.</p>
                            <button class="solution-btn">Cavaba bax </button>
                            <div class="solution">
                                <h5>Код для цикла for:</h5>
                                <div class="solution-code">
                                    <p>$i = 1; // Создание переменной</p>
                                    <p>while ($i <= 10) { // Здесь только условие</span>
                                    <p>echo $i;</p>
                                    <p>$i++; // Увеличение переменной</p>
                                    <p>}</p>
                                </div>
                                <h5>Код для цикла for:</h5>
                                <div class="solution-code">
                                    <p>$i = 1; // Создание переменной</p>
                                    <p>while ($i <= 10) { // Здесь только условие</span>
                                    <p>echo $i;</p>
                                    <p>$i++; // Увеличение переменной</p>
                                    <p>}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="course-menu-btn">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="course-menu">
                        <p class="menu-title">Kursun dərsləri</p>
                        <ul>

                            @foreach ($ders1 as $d1)
                                
                           
                            <li
                            @if( Request::segment(3) == $d1->id )
                             class="active"
                             @else
                              class=""
                             @endif
                             >
                                <label><input type="checkbox">
                                <span class="checkmark"></span></label>
                             <a href="{{route('single_page',['kurs_id'=> $d1->kurs_id, 'id'=> $d1->id])}}">   <p>
                                    <span class="menu-text">#1 - {{$d1->name}}</span>
                                    <span class="menu-time"><i class="far fa-clock"></i>12 dəq</span>
                                </p></a>
                            </li>
                            @endforeach




                            <li class="lock">
                                <i class="fas fa-lock-alt"></i>
                                <p>
                                    <span class="menu-text">#1 - Creating a chat program on Android</span>
                                    <span class="menu-time"><i class="far fa-clock"></i>12 dəq</span>
                                </p>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            
            
        </div>
    </section>
    
    <section id="courses" class="related-courses">
        <div class="container">
            <h2 class="title">Oxşar kurslar</h2>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
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
                <div class="col-12 col-sm-6 col-lg-3">
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
                <div class="col-12 col-sm-6 col-lg-3">
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
                <div class="col-12 col-sm-6 col-lg-3">
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