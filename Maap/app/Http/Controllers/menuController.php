<?php

namespace App\Http\Controllers;

use App\menu;
use Illuminate\Http\Request;
use DB;
use App\hinhanh;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus = menu::all();
        return view('admin.page.menu.index',[
            'menus'=>$menus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.page.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $menu = new menu();
        $menu->name = $request->input('name');
        $menu->url = $request->input('url');
        $menu->save();
        
        return redirect()->route('menu.index')
        ->with('thanhcong','Tạo menu thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(menu $menu)
    {
        //
        $menu = menu::find($menu->id);
        return view('admin.page.menu.edit',['menu'=>$menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menu $menu)
    {
        //
        $menuUpdate = menu::where('id', $menu->id)
            ->Update([
                'name' => $request->input('name'),
                'url' => $request->input('url')
            ]);
        if($menuUpdate){
            return redirect()
            ->route('menu.index')
            ->with('edit','Chỉnh sửa thành công');
        }
        //Quay lại trang ban đầu với tất cả thông tin của đối tượng đó
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(menu $menu)
    {
        //
    }
    public function deleteItem(Request $req)
    {
        $menus = DB::table('menu')->count();
        if($menus==1){
            return redirect()->route('menu.index')->with('thatbai','Không thể xóa menu cuối cùng!');
        }
        else{
            hinhanh::where('idmenu',$req->id)->delete();
            menu::find($req->id)->delete();
            return response()->json();
        }
    }
}
