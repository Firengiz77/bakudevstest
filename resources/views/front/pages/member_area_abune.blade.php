@extends('front.layout.app')
@section('container')

<section id="member-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <ul class="member-area-menu">
                    <li class="member-area-title">Şəxsi kabinet</li>
                    <li><a href="{{route('member_area_profil')}}"><img src="{{asset('/assets/images/icon/member-1.svg')}}"> <span>Profil</span></a></li>
                    <li class="active"><a href="{{route('member_area_abune')}}"><img src="{{asset('/assets/images/icon/member-2.svg')}}"><span>Abunəlik</span></a></li>
                    <li><a  href="{{route('invoice')}}"><img src="{{asset('/assets/images/icon/member-3.svg')}}"><span>Qəbzlər</span></a></li>
                    <li><a href="{{route('wish_list')}}"><img src="{{asset('/assets/images/icon/member-4.svg')}}"><span>İstək siyahısı</span></a></li>
                    <li><a href="{{route('logout')}}"><img src="{{asset('/assets/images/icon/member-5.svg')}}"><span>Çıxış</span></a></li>
                </ul>
            </div>
            <div class="col-lg-9">
                <div>
                    <p class="subsc-error">Siz abunə deyilsiniz.</p>
                    <p class="subsc-info"><i class="far fa-info-circle"></i> Aylıq abunə haqqı 10 AZN təşkil edir.</p>
                    <button class="button subsc-btn">Abunə ol <i class="fas fa-chevron-right"></i></button>
                </div>
                <!-- <div>
                    <p class="subsc-info"><i class="far fa-info-circle"></i> Sizin abunəliyiniz mövcuddur.</p>
                    <p class="subsc-exc"><i class="fas fa-exclamation-triangle"></i> 15.03.2022 tarixində abunəliyiniz bitir.</p>
                    <button class="button">Yenilə <i class="fas fa-chevron-right"></i></button>
                </div> -->
            </div>
        </div>
    </div>
</section>

<div class="modal-new">
    <div class="close"></div>
    <div class="container">
        <form class="subsc-new">
            <i class="fas fa-times"></i>
            <p>Sizin abunəliyiniz 15.03.2022 tarixində bitir. Abunəliyinizi uzatmaq istədiyiniz tarixi seçin</p>
            <div class="info">
                <label><input type="radio" name="subsc"> <span class="radio-check"></span>  1 ay</label>
                <span>Məbləğ: 10 AZN</span>
            </div>
            <div class="info">
                <label><input type="radio" name="subsc"> <span class="radio-check"></span>  2 ay</label>
                <span>Məbləğ: 20 AZN</span>
            </div>
            <div class="info">
                <label><input type="radio" name="subsc"> <span class="radio-check"></span>  3 ay</label>
                <span>Məbləğ: 30 AZN</span>
            </div>
            <div class="btn-div">
                <button class="button">Yenilə <i class="fas fa-chevron-right"></i></button>
            </div>
            
        </form>
    </div>
</div>



@endsection