@extends('front.layout.app')
@section('container')

<section id="member-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <ul class="member-area-menu">
                    <li class="member-area-title">Şəxsi kabinet</li>
                    <li><a href="{{route('member_area_profil')}}"><img src="{{asset('/assets/images/icon/member-1.svg')}}"> <span>Profil</span></a></li>
                    <li><a href="{{route('member_area_abune')}}"><img src="{{asset('/assets/images/icon/member-2.svg')}}"><span>Abunəlik</span></a></li>
                    <li class="active"><a href="{{route('invoice')}}"><img src="{{asset('/assets/images/icon/member-3.svg')}}"><span>Qəbzlər</span></a></li>
                    <li><a href="{{route('wish_list')}}"><img src="{{asset('/assets/images/icon/member-4.svg')}}"><span>İstək siyahısı</span></a></li>
                    <li><a href="{{route('logout')}}"><img src="{{asset('/assets/images/icon/member-5.svg')}}"><span>Çıxış</span></a></li>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="invoice-table">
                    <div class="table-head">
                        <span>Qəbz ID</span>
                        <span>Abunə tarixi</span>
                        <span>Məbləğ</span>
                    </div>
                    <div class="table-body">
                        <div>
                            <span><img src="assets/images/bi_receipt.png"/>000000001</span>
                            <span>12.02.2022</span>
                            <span>10 AZN</span>
                        </div>
                        <div>
                            <span><img src="assets/images/bi_receipt.png"/>000000001</span>
                            <span>12.02.2022</span>
                            <span>10 AZN</span>
                        </div>
                        
                    </div>
                </div>


                
            </div>
        </div>
    </div>
</section>

<div class="modal-box">
    <div class="close"></div> 
    <div class="container">
       
        <div class="invoice-card"> 
            <i class="fas fa-times"></i>
            <div class="info"><span>Qəbz ID:</span><span>000000001</span></div>
            <div class="info"><span>Abunə tarixi:</span><span>12.02.2022</span></div>
            <div class="info"><span>Məbləğ:</span><span>10 AZN</span></div>
            <img src="{{asset('/assets/images/odenis.png')}}">
        </div>
    </div>
</div>



@endsection