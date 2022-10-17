@extends('front.layout.app')
@section('container')

<section id="sign-up">
    <div class="container">
        <div class="shape-sign-1"></div>
        <h2 class="title">Şifrənin yenilənməsi</h2>
        <form action="{{route('forgot.password.link')}}" method="post">
            @csrf
            <div class="form-row">
                <div class="col-12 col-md-12 col-lg-12">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email ünvanı" value="{{ old('email') }}">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="col-12 col-md-12 col-lg-12 form-button">
                    <button class="button" type="submit">Şifrəni yenilə <i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </form>
    </div>
</section>


@endsection