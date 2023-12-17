<?php
namespace App\Http\Controllers;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $restaurants=Restaurant::all();
        return view('client.homeClient',compact('restaurants'));
    }

    public function account($id)
    {
        $user=User::all()->find($id);
        return view('client.myAccount',compact('id','user'));
    }
    public function updateAccount(Request $request){
//        dd($request);
        $id=$request['id'];
       $user= User::all()->find($id);
        $file_extension=$request->img-> getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $path='images/products';
        $request ->img -> move($path,$file_name);
       $user->update([
           'name'=>$request['name'],
           'email' => $request['email'],
//           'password' => Hash::make($data['password']),
           'phone'=>$request['phone'],
           'address'=>$request['address'],
           'img'=>$file_name,
       ]);
       return redirect()->back()->with(['message'=>'تم تعديل البيانات بنجاح']);
    }

//    public function AdminLogin(Request $request){
//
//                echo 'hello Admin';
//                dd($request);
//                //admin log in
//
//        }
}