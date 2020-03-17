<?php

namespace App\Http\Controllers;

use App\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use App\User;
use App\Subscription;
use App\Plantation;
use App\Account;
use App\Contact;
use App\Transaction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    
    public function shirt(Request $request){
        $this->validate($request, [
            'color' => 'required',
            'size' => 'required',
        ]);
        
        $new = DB::table('shirts')->insert([
          'size' => $request->input('size'),
          'color' => $request->input('color'),
          'user_id' => Auth::id(),
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
          ]);
          
          return redirect()->back();
    }
    
    public function loginAs()
{
    //get the id from the post
    $id = request('user_id');

    //if session exists remove it and return login to original user
    if (session()->get('hasClonedUser') == 1) {
        auth()->loginUsingId(session()->remove('hasClonedUser'));
        session()->remove('hasClonedUser');
        return redirect()->back();
    }

    //only run for developer, clone selected user and create a cloned session
    if (true) {
        //session()->put('hasClonedUser', auth()->user()->id);
        auth()->loginUsingId($id);
        return redirect()->back();
    }
}

    public function login(){
        $user = User::where('id', '=', 1)->first();
        
        return view('pages.login', compact('user'));
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plantation = Plantation::orderBy('created_at', 'desc')->paginate(4);
        
        return view('home', compact('plantation'));
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect()
    {
        return redirect('/home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function coming()
    {
        return view('pages.coming');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255'
        ]);

        $subscribe = new Subscription;
        $subscribe->email = $request->input('email');
        $subscribe->save();

        $subscribe = 'Thank you for subscribing';
        return redirect()->back()->with('subscribe', $subscribe);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('pages.contact');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        return view('pages.terms');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        return view('pages.faq');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact_(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'number' => 'required',
            'email' => 'required|email',
            'content' => 'required'
        ]);

        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->contact = $request->input('number');
        $contact->message = $request->input('content');
        $contact->save();

        return redirect()->back()->with('status', 'Message Sent');
    }

    /**
     * Display a listing of the resource.
     * dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $investment = Investment::where('user_id', '=', Auth::id())->paginate(10);
        $investment_check = Investment::where('user_id', '=', Auth::id())->where('status', '=', 'active')->get(); 
        if (count($investment) > 0) {
            foreach ($investment as $invest) {
                $plantation = Plantation::find($invest->plantation_id);
                $invest->plantation = $plantation->plantation;
                $invest->duration = $plantation->duration;
            }
        }
        $amount = 0;
        $invest = Investment::where('user_id', '=', Auth::id())->where('status', '=', 'active')->get();
        foreach ($invest as $inv) {
            $amount = $amount + ($inv->amount / 100);
        }

        $balance = Account::where('user_id', '=', Auth::id())->first();
        
        $shirt = $new = DB::table('shirts')->where('user_id', '=', Auth::id())->get();

        return view('pages.dashboard', compact('investment', 'amount', 'balance', 'investment_check', 'shirt'));
    }

    /**
     * Display a listing of the resource.
     * investment
     *
     * @return \Illuminate\Http\Response
     */
    public function investment()
    {
        $plantation = Plantation::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.investment', compact('plantation'));
    }


    /**
     * Display a listing of the resource.
     * investment
     *
     * @return \Illuminate\Http\Response
     */
    public function investment_($id)
    {
        $plantation = Plantation::where('id', '=', $id)->get();
        if(count($plantation) == 0){
            return redirect('/dashboard');
        }
        $plantation = Plantation::where('id', '=', $id)->first();
        $check = Investment::where('user_id', '=', Auth::id())->where('plantation_id', '=', $id)->get();
        return view('pages.investment_', compact('plantation', 'check'));
    }


    /**
     * Display a listing of the resource.
     * edit
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('pages.edit');
    }


    /**
     * Display a listing of the resource.
     * edit
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_info(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'whatsapp_contact' => 'required'
        ]);

        $id = Auth::id();
        $name = $request->input('name');
        $whatsapp_contact = $request->input('whatsapp_contact');

        $update_applicant = User::where('id', '=', $id)->update([
            'name' => $name,
            'whatsapp_contact' => $whatsapp_contact
        ]);

        return redirect('/edit');
    }

    /**
     * Display a listing of the resource.
     * edit
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_image(Request $request)
    {
        if ($request->hasFile('profile_image')) {

            $profile_image = $request->file('profile_image');
            $fileName = Auth::id();
            $fileExt = $profile_image->getClientOriginalExtension();
            $filePath = pathinfo($fileName, PATHINFO_FILENAME);
            $saveAs = $filePath . '.' . $fileExt;
            $path1 = $profile_image->move('storage/', $saveAs);
        } else {
            $saveAs = "profile_image.png";
        }
        $update = User::where('id', '=', auth::id())->update([
            'profile_image' => $saveAs
        ]);

        if ($update) return 'save';
    }

    /**
     * Display a listing of the resource.
     * password
     *
     * @return \Illuminate\Http\Response
     */
    public function password()
    {
        return view('pages.password');
    }

    /**
     * Display a listing of the resource.
     * password
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_password(Request $request)
    {
        $this->validate($request, [
            'currentPassword' => 'required|string|min:6',
            'newPassword' => 'required|string|min:6|same:confirmNewPassword'
        ]);

        $currentPassword = $request->input('currentPassword');
        $password = auth::user()->password;
        $new_password = bcrypt($request->input('newPassword'));

        if (\Hash::check($currentPassword, $password)) {
            $update_ = User::where('id', '=', Auth::id())->update([
                'password' => $new_password
            ]);
            $update = "Password update";
            return redirect()->back()->with('update', $update);
        } else {
            $old_password_error = "The old password is not correct";
            return redirect()->back()->with('old_password_error', $old_password_error);
        }
    }

    /**
     * Display a listing of the resource.
     * password
     *
     * @return \Illuminate\Http\Response
     */
    public function activity()
    {
        $activity = Transaction::where('user_id', '=', Auth::id())->paginate(10);

        return view('pages.activity', compact('activity'));
    }


    /**
     * Display a listing of the resource.
     * log out
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::guard()->logout();
        Session::flush();
        return redirect('/');
    }
}
