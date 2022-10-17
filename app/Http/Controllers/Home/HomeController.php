<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Kurs;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Dersler;

class HomeController extends Controller
{
    public function __construct(){
        $category=Category::get();
        \View::share('category',$category);
    }
    public function index(){

        return view('front.pages.index');
    }

    public function about(){
        return view('front.pages.about');
    }

    public function change_password(){
        return view('front.pages.change_password');
    }

    public function contact(){
        $contact=Contact::get();
        return view('front.pages.contact',compact('contact'));
    }
    public function courses(){
        $allcourse=Kurs::get();
        $othercourses=Kurs::get();
        $subcategory=SubCategory::get();
        $sub2=SubCategory::where('category_id',1)->get();
        $sub3=SubCategory::where('category_id',2)->get();
        $sub4=SubCategory::where('category_id',3)->get();

        $countsub2 = \DB::table('derslers')
        ->select('kurs_id', \DB::raw('COUNT(kurs_id)'), 'kurs_id')
        ->groupBy('kurs_id')
        ->count();
        $ders=Dersler::get();
     
        $category=Category::get();
        return view('front.pages.courses',compact('allcourse','subcategory','othercourses','category','sub2','sub3','sub4','countsub2','ders'));
    }

    public function forgot_password(){
        return view('front.pages.forgot_password');
    }
    public function invoice(){
        return view('front.pages.invoice');
    }
    public function member_area_abune(){
        return view('front.pages.member_area_abune');
    }

    public function member_area_profil(){
        $id=auth()->guard('all_users')->id();
        $admindata=User::findOrFail($id);
        return view('front.pages.member_area_profil',compact('admindata'));
    }

    public function sign_in(){
        return view('front.pages.sign_in');
    }
    public function sign_up(){
        return view('front.pages.sign_up');
    }
    public function single_page($kurs_id,$id){
        $ders=Dersler::where('kurs_id',$kurs_id)->first();
        $ders1=Dersler::where('kurs_id',$kurs_id)->get();
        $ders2=Dersler::where('kurs_id',$kurs_id)->latest();
   
        return view('front.pages.single',compact('ders','ders1','ders2'));
    }
    public function wish_list(){
        return view('front.pages.wish_list');
    }
    public function seperal_courses($id){
        $category=Category::get();
        $category2=Category::where('id',$id)->first();
        $sub=SubCategory::where('category_id',$id)->get();
        $kurs=Kurs::get();
        $ders=Dersler::where('id',$id)->first();
        return view('front.pages.seperal_courses',compact('category','sub','kurs','category2','ders'));
    }


}
