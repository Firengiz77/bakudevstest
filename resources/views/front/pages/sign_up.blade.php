@extends('front.layout.app')
@section('container')




<section id="sign-up">
    <div class="container">
        <div class="shape-sign"></div>
        <h2 class="title">Qeydiyyatdan keçin</h2>
        <form action="{{route('sendqeyd')}}" method="post">
            @csrf
            <div class="form-row">
                <div class="col-12 col-md-12 col-lg-12 facebook">
                    <input type="text" class="form-control" placeholder="Facebook ilə qeydiyyatdan keç">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="col-12 col-md-12 col-lg-12 google">
                    <input type="text" class="form-control" placeholder="Google ilə qeydiyyatdan keç">
                    <i class="fab fa-google"></i>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <label>Adınız və Soyadınız</label>
                    <input type="text" class="form-control" name="name" placeholder="Adınız və Soyadınız">
                    <i class="fas fa-user"></i>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email ünvanı">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <label>Şifrə</label>
                    <input type="password" class="form-control" name="password" placeholder="Şifrə">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <label>Şifrənin təkrarı</label>
                    <input type="password" class="form-control" name="confirm_password" placeholder="Şifrə">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="col-12 col-md-12 col-lg-12 checkbox-div">
                    <label for="1">
                        <input type="checkbox" id="1" name="remember_me">
                        <span class="checkmark"></span>
                        Yadda saxla
                    </label>
                </div>
                <div class="col-12 col-md-12 col-lg-12 form-button">
                    <button class="button" type="submit">Qeydiyyatdan keç <i class="fas fa-chevron-right"></i></button>
                </div>
                <div class="col-12 col-md-12 col-lg-12 sign-up-div">
                    <span>Hesabınız var?</span> <a href="{{route('sign_in')}}">Daxil olun</a>
                </div>
            </div>
        </form>
    </div>
</section>



@endsection