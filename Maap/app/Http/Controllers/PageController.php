<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\hinhanh;
use Image;
use File;
use App\menu;
use Mail;
use App\cautraloi;

class PageController extends Controller
{
    //
    public function gettrangchu(){
        return view('page.index');
    }
    public function getmel(){
        return view('page.mel');
    }
    public function getmaap(){
        return view('page.maap');
    }
    public function getabout(){
        return view('page.about');
    }
    public function getbranding(){
        $hinhanh1 = hinhanh::where([['idmenu',4],['vitri',1]])->get();
        $hinhanh2 = hinhanh::where([['idmenu',4],['vitri',2]])->get();
        return view('page.branding',[
            'hinhanh1'=>$hinhanh1,
            'hinhanh2'=>$hinhanh2
        ]);
    }
    public function getdrafting(){
        $hinhanh1 = hinhanh::where([['idmenu',2],['vitri',1]])->get();
        $hinhanh2 = hinhanh::where([['idmenu',2],['vitri',2]])->get();
        $hinhanh3 = hinhanh::where([['idmenu',2],['vitri',3]])->get();
        $hinhanh4 = hinhanh::where([['idmenu',2],['vitri',4]])->get();
        return view('page.drafting',[
            'hinhanh1'=>$hinhanh1,
            'hinhanh2'=>$hinhanh2,
            'hinhanh3'=>$hinhanh3,
            'hinhanh4'=>$hinhanh4
        ]);
    }
    public function getgetquote(){
        return view('page.getquote');
    }
    public function getgetstart(){
        return view('page.getstart');
    }
    public function getloanprop(){
        $hinhanh1 = hinhanh::where([['idmenu',3],['vitri',1]])->get();
        $hinhanh2 = hinhanh::where([['idmenu',3],['vitri',2]])->get();
        $hinhanh3 = hinhanh::where([['idmenu',3],['vitri',3]])->get();
        return view('page.loanprop',[
            'hinhanh1'=>$hinhanh1,
            'hinhanh2'=>$hinhanh2,
            'hinhanh3'=>$hinhanh3
        ]);
    }
    public function getplanning(){
        $hinhanh = hinhanh::where('idmenu',1)->get();
        return view('page.planning',[
            'hinhanh'=>$hinhanh
        ]);
    }
    public function getresult(){
        return view('page.result');
    }
    public function getadmin(){
        if(Auth::check()){
            return view('admin.page.index');
        }
        else return view('admin.page.dangnhap');
    }
    public function getdangnhap(){
        return view('admin.page.dangnhap');
    }
    public function postdangnhap(Request $req){
        session_start();
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($credentials)){
            $_SESSION["member_id"] = Auth::user()->id;
            if(!empty($req->remember)) {
                setcookie("member_login",$req->email,time()+ (10 * 365 * 24 * 60 * 60));
                setcookie("member_password",$req->password,time()+ (10 * 365 * 24 * 60 * 60));
            } else {
                if(isset($_COOKIE["member_login"])) {
                    setcookie("member_login","");
                }
                if(isset($_COOKIE["member_password"])) {
                    setcookie("member_password","");
                }
            }
            return redirect()->route('admin');
        }
        else{
            $message = "Invalid email or password.";
            return redirect()->back()->with('message',$message);
        }
    }
    public function getlogout(){
        Auth::logout();
        return redirect()->route('dangnhap');
    }
    public function getedithinhanh(Request $req){
        if(Auth::check()){
            if(isset($req->hinhanh)){
                $menuid = $req->idmenu;
                $menuu = menu::find($menuid);
                $hinhanh = hinhanh::find($req->hinhanh);
                return view('admin.page.hinhanh.editimg',[
                    'hinhanh'=>$hinhanh,
                    'menuid'=>$menuid,
                    'menuu'=>$menuu
                ]);
            }else if(isset($req->vitri)){
                $menuid = $req->idmenu;
                $menuu = menu::find($menuid);
                $hinhanh = hinhanh::find($req->vitri);
                return view('admin.page.hinhanh.editvitri',[
                    'hinhanh'=>$hinhanh,
                    'menuid'=>$menuid,
                    'menuu'=>$menuu
                ]);
            }else if(isset($req->menu)){
                $menuid = $req->idmenu;
                $menuu = menu::find($menuid);
                $hinhanh = hinhanh::find($req->menu);
                $menus = menu::all();
                return view('admin.page.hinhanh.editmenu',[
                    'hinhanh'=>$hinhanh,
                    'menus'=>$menus,
                    'menuid'=>$menuid,
                    'menuu'=>$menuu
                ]);
            }
        }
        else return view('page.index');
        
    }
    public function postedithinhanh(Request $request, hinhanh $hinhanh){
        if(Auth::check()){
            if($request->edit=="image"){
                $time = date('dmYHis');
                $name = $_FILES['image']['name'];
                $arr = explode(".",$name);
                $this->validate($request,
                [
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);
                $hinhanh = hinhanh::find($request->idhinhanh);
                $luu = $hinhanh->name;
                $hinhanhUpdate = hinhanh::where('id', $hinhanh->id)
                ->Update([
                    'name' => $time.".".$arr[count($arr)-1]
                ]);
                if($hinhanhUpdate){
                    $image_path = public_path('\maaptl\img\\'.$luu);
                    
                    if(File::exists($image_path)) {
                        File::delete($image_path);
                    }
                    $image = $request->file('image');
                    $destinationPath = public_path('\maaptl\img');
                    
                    $img = Image::make($image->getRealPath());
                    $img->save($destinationPath.'\\'.$time.".".$arr[count($arr)-1]);
                    return redirect()
                    ->route('imgmenu',$request->menuid)
                    ->with('thanhcong','Successful image editing!');
                }
            }
            else if($request->edit=="menu"){
                $hinhanh = hinhanh::find($request->idhinhanh);
                $hinhanhUpdate = hinhanh::where('id', $hinhanh->id)
                ->Update([
                    'idmenu' => $request->input('menu'),
                ]);
                if($hinhanhUpdate){
                    return redirect()
                    ->route('imgmenu',$request->menuid)
                    ->with('thanhcong','Successful image editing!');
                }
            }
            else if($request->edit=="vitri"){
                $hinhanh = hinhanh::find($request->idhinhanh);
                $hinhanhUpdate = hinhanh::where('id', $hinhanh->id)
                ->Update([
                    'vitri' => $request->input('position'),
                ]);
                if($hinhanhUpdate){
                    return redirect()
                    ->route('imgmenu',$request->menuid)
                    ->with('thanhcong','Successful image editing!');
                }
            }
        }
        else return view('page.index');
    }
    public function getmenu(Request $req){
        if(Auth::check()){
            $menus = menu::find($req->id);
            $hinhanhs = hinhanh::where('idmenu',$menus->id)->paginate(10,['*'],'page');
            return view('admin.page.themhinhanh.index',[
                'menus'=>$menus,
                'hinhanhs'=>$hinhanhs
            ]);
        }
        else return view('page.index');
    }
    public function getcreateimg(Request $req){
        if(Auth::check()){
            $menus = menu::find($req->id);
            return view('admin.page.themhinhanh.create',[
                'menus'=>$menus
            ]);
        }
        else return view('page.index');
        
    }
    public function postcreateimg(Request $request){
        if(Auth::check()){
            $dem = count($_FILES['image']['name']);
            $this->validate($request,[
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            for($i=0;$i<$dem;$i++){
                $time = date('dmYHis').$i;
                $name = $_FILES['image']['name'][$i];
                $arr = explode(".",$name);
                
                $hinhanh = hinhanh::create([
                    'name' => $time.".".$arr[count($arr)-1],
                    'idmenu'=>$request->id,
                    'vitri'=>$request->position
                ]);
                if($hinhanh){
                    $image = $request->file('image')[$i];
                    $destinationPath = public_path('\maaptl\img');
                    
                    $img = Image::make($image->getRealPath());
                    $img->save($destinationPath.'\\'.$time.".".$arr[count($arr)-1]);
                }
            }
            return redirect()
                ->route('imgmenu',[$request->id])
                ->with('thanhcong','Add photos successfully!');
        }
        else return view('page.index');
        
    }
    public function getlienhe(){
        return view('page.lienhe');
    }
    public function postlienhe(Request $req){
        $data = [
            'name'=>$req->name,
            'email'=>$req->email,
            'messagee'=>$req->message
        ];
        $subject = $req->subject;
        Mail::send('page.maillienhe',$data,function($msg) use($subject){
            $msg->from('doanminhhieu95@gmail.com','Khách hàng');
            $msg->to('doanminhhieu95@gmail.com','admin')->subject($subject);
        });
        return redirect()->back()->with('lienhe','Thank you for contacting us!');
    }
    public function postresult(Request $req){
        $cautraloi = new cautraloi();
        $cautraloi->email = $req->email;
        $cautraloi->phone = $req->phone;
        $cautraloi->diachi = $req->address;
        $cautraloi->traloi1 = $req->q1;
        $cautraloi->traloi2 = $req->q2;
        $cautraloi->traloi3 = $req->q3;
        $cautraloi->traloi4 = $req->q4;
        $cautraloi->traloi5 = $req->q5;
        $cautraloi->traloi6 = $req->q6;
        $cautraloi->traloi7 = $req->q7;
        $cautraloi->seen = 0;
        $cautraloi->save();
        dd('ok');
    }
}
