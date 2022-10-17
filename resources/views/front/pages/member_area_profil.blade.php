@extends('front.layout.app')
@section('container')


<section id="member-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <ul class="member-area-menu">
                    <li class="member-area-title">Şəxsi kabinet</li>
                    <li class="active"><a href="{{route('member_area_profil')}}"><img src="{{asset('/assets/images/icon/member-1.svg')}}"> <span>Profil</span></a></li>
                    <li><a href="{{route('member_area_abune')}}"><img src="{{asset('/assets/images/icon/member-2.svg')}}"><span>Abunəlik</span></a></li>
                    <li><a href="{{route('invoice')}}"><img src="{{asset('/assets/images/icon/member-3.svg')}}"><span>Qəbzlər</span></a></li>
                    <li><a  href="{{route('wish_list')}}"><img src="{{asset('/assets/images/icon/member-4.svg')}}"><span>İstək siyahısı</span></a></li>
                    <li><a href="{{route('logout')}}"><img src="{{asset('/assets/images/icon/member-5.svg')}}"><span>Çıxış</span></a></li>
                </ul>
            </div>
            <div class="col-lg-9">
                {{-- <h2 style="color: black"> welcome :  {{ $admindata->password}}   </h2> --}}
                <form action="{{route('updatepassword')}}" method="post" >
                    @csrf
                    <div class="form-row">
                        <div class="col-lg-6">
                            <label>Adınız və Soyadınız</label>
                            <input class="form-control" type="text" name="name" value="{{ $admindata->name}}">
                        </div>
                        <div class="col-lg-6">
                            <label>Mövcud şifrə</label>
                            <input class="form-control" type="password" name="oldpassword" id="myInput" >
                                 <!-- An element to toggle between password visibility -->
                                 <input type="checkbox" onclick="myFunction()">Show Password
                        </div>
                        <div class="col-lg-6">
                            <label>E-mail</label>
                            <input class="form-control" type="email" name="email" value="{{$admindata->email}}" >
                        </div>
                        <div class="col-lg-6">
                            <label>Yeni şifrə</label>
                            <input class="form-control" type="password"  name="password"  >
                       
                        </div>
                        <div class="col-lg-6">
                            <label>Yeni şifrənin təkrarı</label>
                            <input class="form-control" type="password" name="confirm_password" >
                        </div>
                        <div class="col-lg-6">
                            <button class="button" type="submit">Yadda saxla <i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

@endsection