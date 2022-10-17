@extends('front.layout.app')
@section('container')

@toastr_css
<section id="sign-up">
    <div class="container">
        <div class="shape-sign"></div>
        <h2 class="title">Şifrənin yenilənməsi</h2>
        <form action="{{route('resetpass')}}" method="post">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-row">
                <div class="col-12 col-md-12 col-lg-12">
                    <label>Email-ə gələn kod</label>
                    <input type="email" class="form-control" placeholder="Email ünvanı" value="{{ $email ?? old('email') }}" name="email">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <label>Yeni şifrə</label>
                    <input type="password" class="form-control" placeholder="Şifrə" name="password">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <label>Yeni şifrənin təkrarı</label>
                    <input type="password" class="form-control" placeholder="Şifrə" name="confirmpassword" >
                    <i class="fas fa-lock"></i>
                </div>
                <div class="col-12 col-md-12 col-lg-12 form-button">
                    <button class="button" type="submit">Daxil ol <i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </form>
    </div>
</section>

@jquery
@toastr_js
@toastr_render
@endsection