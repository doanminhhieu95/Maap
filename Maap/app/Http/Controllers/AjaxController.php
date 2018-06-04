<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use App\cautraloi;
use Auth;

class AjaxController extends Controller
{
    //
    public function gethinhanh($qty){
        if(Auth::check()){
            $menus = menu::all();
            echo view('admin.page.hinhanh.hinhanh',[
            'qty'=>$qty,
            'menus'=>$menus
            ]);
        }
        else return view('page.index');
    }
    public function gettype($type){
        if(Auth::check()){
            if($type=="all"){
                $cautralois = cautraloi::all();
                echo view('admin.page.answer.cautraloi',[
                    'cautralois'=>$cautralois
                ]);
            }
            else if($type=="waiting"){
                $cautralois = cautraloi::where('seen',0)->get();
                echo view('admin.page.answer.cautraloi',[
                    'cautralois'=>$cautralois
                ]);
            }
            else if($type=="seen"){
                $cautralois = cautraloi::where('seen',1)->get();
                echo view('admin.page.answer.cautraloi',[
                    'cautralois'=>$cautralois
                ]);
            }
        }
        else return view('page.index');
    }
}
