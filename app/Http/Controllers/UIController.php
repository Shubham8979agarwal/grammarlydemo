<?php

namespace App\Http\Controllers;
#use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
#use net\authorize\api\contract\v1 as AnetAPI;
#use net\authorize\api\controller as AnetController;
use Hash;
use Session;
use App\Models\User;
use App\Models\Createdocument;
#use App\Models\AppliedByInfluencer;
#use App\Models\SocialMediaEngagement;
#use App\Models\PaymentLogs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
#use Artisan;
use DB;

class UIController extends Controller
{

    public function __construct()
   {
        $this->middleware('disable_back_btn');
   }

    public function login()
   {
    if(Auth::check()){
        return redirect('dashboard');
    }
    else{
        return view('ui.login');
    }
    }

    public function register(){

     if(Auth::check()){ 
        return redirect('dashboard');   
    }
    else{
        return view('ui.register');
    }
    }

    public function make_account(Request $request)
    {  
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6|same:password',
            //'profilepic'=> 'public/userprofiles/default.jpg',
        ]);
        
        $data = $request->all();
        //dd($data);
        $data['password'] = Hash::make($data['password']);
        
        $check = User::create($data);

        return redirect("/")->with('register_success','Registered Successfully. Login Now :)');
    }
    
    public function make_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        }
        return redirect("/")->with('status_signin_failed','Login details are not valid');
    }

    public function dashboard()
    {
        if(Auth::check()){
        $user['data'] = Auth::user();
        $user['savedocument'] = DB::table('createdocuments')->where('useremail', Auth::user()->email)->get();
        return view('ui.login_success.dashboard',$user);
        }else{
            $this->signout();
            return redirect('/');
        } 
    }

    public function createdocument(){
        if(Auth::check()){
        $user['data'] = Auth::user();
        return view('ui.login_success.documents.createdocument',$user);
        }else{
            $this->signout();
            return redirect('/');
        }
    }

    public function editdocument($documentid){
        if(Auth::check()){
        $user['data'] = Auth::user();
        $user['editabledata'] = DB::table('createdocuments')->where('useremail', Auth::user()->email)->where('documentid',$documentid)->get();
        $user['editabledata'] = array($user['editabledata']);
        return view('ui.login_success.documents.editdocument',$user);
        }else{
            $this->signout();
            return redirect('/');
        }
    }

    public function savedocument(Request $request){
        if(Auth::check()){
        $user['data'] = Auth::user();
        $request->validate([
            'documentname' => 'required',
            'documentdesc' => 'required',
            'status' => '1',
        ]);
        $data = $request->all();
        $data['useremail'] = Auth::user()->email;
        $data['documentid'] = Str::random(9);
        $savedocument = Createdocument::create($data);
        return back()->with('save_success','Document Saved Successfully.');
        }else{
            $this->signout();
            return redirect('/');
        }
    }

    public function updatedocument(Request $request){
        if(Auth::check()){
        $user['data'] = Auth::user();
        $request->validate([
            'documentid' => 'required',
            'documentname' => 'required',
            'documentdesc' => 'required',
        ]);
        $data = $request->all();
        $updateDetails = [
                'documentid' => $request->get('documentid'),
                'documentname' => $request->get('documentname'),
                'documentdesc' => $request->get('documentdesc'),
             ];
        $update = DB::table('createdocuments')->where('useremail', auth()->user()->email)->where('documentid',$request->get('documentid'))->update($updateDetails);
        return back()->with('update_success','Document Updated Successfully.');
        }else{
            $this->signout();
            return redirect('/');
        }
    }

    public function deletedocument($documentid){
    if(Auth::check()){  
        //$inquiryid = decrypt($inquiryid);
        $deletereq = DB::delete('delete from createdocuments where documentid = ?',[$documentid]);
        return redirect('dashboard')->with('delete_success','Document Deleted Successfully..');
    }else{
        $this->signout();
        return redirect('/');
    }
}

    public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }

}
