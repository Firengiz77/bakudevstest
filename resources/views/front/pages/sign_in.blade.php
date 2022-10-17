@extends('front.layout.app')
@section('container')


<section id="sign-up">
    <div class="container">
        <div class="shape-sign"></div>
      
        <h2 class="title">Daxil olun</h2>
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="form-row">
                <div class="col-12 col-md-12 col-lg-12 facebook">
                    <input type="text" class="form-control" placeholder="Facebook ilə daxil ol">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="col-12 col-md-12 col-lg-12 google">
                    <input type="text" class="form-control" placeholder="Google ilə daxil ol">
                    <i class="fab fa-google"></i>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email ünvanı">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <label>Şifrə</label>
                    <input type="password" class="form-control"  name="password"  placeholder="Şifrə">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="col-12 col-md-12 col-lg-12 checkbox-div">
                    <label for="1">
                        <input type="checkbox" id="1" name="remember_me">
                        <span class="checkmark"></span>
                        Yadda saxla
                    </label>
                    <a href="{{route('forgot_password')}}" >Şifrənizi unutmusunuz?</a>
                </div>
                <div class="col-12 col-md-12 col-lg-12 form-button">
                    <button class="button" type="submit">Daxil ol <i class="fas fa-chevron-right"></i></button>
                </div>
                <div class="col-12 col-md-12 col-lg-12 sign-up-div">
                    <span>Hesabınız yoxdur?</span> <a href="{{route('sign_up')}}">Qeydiyyatdan keçin</a>
                </div>
            </div>
        </form>
    </div>
</section>




@endsection