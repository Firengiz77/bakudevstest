<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Messages;
use App\Http\Requests\MessageRequest;
use App\Models\User;
use App\Models\All_Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Kurs;
use App\Models\Dersler;
use Owenoj\LaravelGetId3\GetId3;
use App\Models\Sual_Cavab;
use App\Models\Wishlist;


class MainController extends Controller
{
    public function kursun_dersleri($kurs_id,$id){
        $ders=Dersler::where('kurs_id',$kurs_id)->get();
        return view('kursdersleri',compact('ders'));
    }



    public function addtowish(Request $request){

        $id=Auth::guard('all_users')->id();

        $request->validate([
            'kurslars_id' => ['required', 'exists:kurs,id'],
        ]);
        $kurs = Kurs::where('id', $request->kurslars_id)->first();
        
      if( Wishlist::where(['user_id' => $id,'kurslars_id'=> $kurs->getAttribute('id')])->exists() ) {
        $wishItem = Wishlist::query()->where(['user_id' => $id,'kurslars_id' => $request->kurslars_id])->delete();
        $count=Wishlist::where('user_id',$id)->count();
        return response()->json(['message'=>'Successfully Deleted course from WISHLIST','count' => $count]);
      }
    
      else{

        $wishItem = Wishlist::query()->create(['user_id' => $id,'kurslars_id'=> $kurs->getAttribute('id')]);
        $count=Wishlist::where('user_id',$id)->count();
        
        return response()->json(['message'=>'Successfully Added Course to WISHLIST','count' => $count]);
      }
    }
    
    public function deletewish(Request $request){
    $id=Auth::guard('all_users')->id();

     $request->validate([
        'kurslars_id' => ['required', 'exists:kurs,id'],
    ]);
    $kurs = Kurs::where('id', $request->kurslars_id)->first();
    if( Wishlist::where(['user_id' => $id,'kurslars_id'=> $kurs->getAttribute('id')])->exists() ) {
    $wishItem = Wishlist::query()->where(['user_id' => $id,'kurslars_id' => $request->kurslars_id])->delete();
    $count=Wishlist::where('user_id',$id)->count();
     return response()->json(['message'=>'Successfully Deleted Course to WISHLIST', 'count' => $count]);
    
    }
    }


    public function wishlist(){
        $id=Auth::guard('all_users')->id();
        $wishlist = Wishlist::where('user_id',$id)->get();
        $count=Wishlist::where('user_id',$id)->count();
        return view('wishlist',compact('wishlist','count'));
    }


public function single($kurs_id,$id){
    $ders= Dersler::where('id',$id)->first();
    $kurs = Kurs::where('id',$kurs_id)->first();
    $sual_cavab = Sual_Cavab::where('derslers_id',$id)->get();
    $ders2=Dersler::where('kurs_id',$kurs_id)->get();



    return view('single',compact('ders','kurs','sual_cavab','ders2'));

}

    public function kurslar(){
        $id=Auth::guard('all_users')->id();
        $kurs=Kurs::get();
        $subcategory=SubCategory::get();
        $ders=Dersler::get();
        $count = Wishlist::where('user_id',$id)->count();
        $wish=Wishlist::first();

        return view('kurslar',compact('kurs','subcategory','ders','count','wish'));
    }





    public function showforgotpassword(){
      return view('forgot');
    }

    public function sendresetlink(Request $request){
        $request->validate([
            'email'=>'required|'
        ]);
        $token=\Str::random(64);
        \DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now()
        ]);
        $action_link = route('reset.password.form',['token'=>$token,'email'=>$request->email]);
        $body = ' We have received to reset the password '.$request->email.' it was you';

        \Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body],function($message) use ($request){
            $message->from('noreply@bakudev.com');
            $message->to($request->email,'Baku Devs')->subject('Reset Password');
        });
        toastr()->success('We have send your email to reset password');
        return redirect()->back();

    }

    public function showresetform(Request $request,$token = null){
        return view('front.pages.change_password')->with(['token'=>$token,'email'=>$request->email]);
    }

    public function resetpass(Request $request){
      $request->validate([
       'email'=>'required',
        'password'=>'required',
        'confirmpassword'=>'required',
       ]);
       $check_token = \DB::table('password_resets')->where([
           'email'=>$request->email,
           'token'=>$request->token,
       ])->first();

       if(!$check_token){
        toastr()->error('something went wrong');
           return redirect()->route('/');
       }
       else{
        User::where('email',$request->email)->update([
               'password'=>\Hash::make($request->password)
           ]);
           \DB::table('password_resets')->where([
               'email'=>$request->email
           ])->delete();
           toastr()->success('Your password has been changed successfully');
           return redirect()->route('member_area_profil')->with('verifiedEmail',$request->email);
       }


    }

    public function profile(){
        $id=auth()->guard('all_users')->id();
        $admindata=User::findOrFail($id);
        return view('profile',compact('admindata'));
    }

    public function logout(){
        Auth::guard('all_users')->logout();
        toastr()->success('You have been logout Succcessfully');
        return redirect()->route('sign_in');
    }


    public function form(){
        return view('form');

    }

    public function qeydiyyat(){
        $category=Category::get();
        $subcategory=SubCategory::get();
        return view('qeydiyyat',compact('category','subcategory'));
    }

    public function sendqeyd(Request $request){
    
         User::insert([
        'name' => $request->name,
        'email' => $request->email,
        'admin_active'=> 1,
        'password' => Hash::make($request->password),
        'created_at' => Carbon::now(),
          ]);

         toastr()->success('New User created Succcessfully');
         return redirect()->route('member_area_profil');
     
}




public function login(Request $request){
    $request->validate([
        'email'=>'required|email|exists:users,email',
        'password' => 'required',
    ]);

    // remember me

    $remember_me = $request->has('remember_me')? true:false;
    
     if(Auth::guard('all_users')->attempt(['email' => $request->email, 'password' => $request->password],$remember_me))
     {
    toastr()->success('You have been loggin in');
    return redirect()->route('member_area_profil');
   }
   else{

    toastr()->error('Something was wrong.Please Be Carefull');
 return redirect()->back();
 }



}

public function updatepassword(Request $request){


    $id=auth()->guard('all_users')->id();
    
    $validatedata = $request->validate([
     'oldpassword'=> 'nullable',
     'password'=> 'nullable',
     'name'=>'nullable',
     'email' => 'nullable',
     'confirm_password'=>'nullable'
    ]);

    $hashedpassword = User::find($id)->password;
  


    if(Hash::check($request->oldpassword,$hashedpassword)){
        $admin = User::findOrFail($id);
        $admin->password = Hash::make($request->password);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();
        toastr()->success('Your Own Detail has been changed with password');
        return redirect()->back();

    }
    else{
        $admin = User::findOrFail($id);
        $admin->name = $request->name;
        $admin->password = Hash::make($request->oldpassword);
        $admin->email = $request->email;
        $admin->save();
        toastr()->success('Your Own Detail has been changed without password');
        return redirect()->back();
    }

}




    public function sendemail(Request $request){

        $rules=[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'msj'=>'required',
        ];
        $customsj =[
            'required' => 'The :attribute field is required'
        ];
        $this->validate($request,$rules,$customsj);

        $messages = Messages::create($request->all());
        $messages->save();
    
        $email='firengizsariyeva77@gmail.com'; 
        $array = [
       'name'=> $request->name,
       'email'=> $request->email, 
       'phone' => $request->phone,  
       'msj'=>$request->msj
     ]; 
      Mail::send('email', $array,  function ($message) use($email)  {
          $message->to( $email, 'Baku Devs test');
          $message->subject('Baku devs test');
          toastr()->success('Mesajınız uğurla göndərildi !');
      });  
      return redirect()->back();
    }

}
