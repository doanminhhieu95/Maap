<?php

namespace App\Http\Controllers;

use App\hinhanh;
use Illuminate\Http\Request;
use Image;
use File;
use App\menu;

class hinhanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hinhanhs = hinhanh::all();
        return view('admin.page.hinhanh.index',[
            'hinhanhs'=>$hinhanhs
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
        $menus = menu::all();
        return view('admin.page.hinhanh.create',[
            'menus'=>$menus
        ]);
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
        $dem = count($_FILES['image']['name']);
        for($i=0;$i<$dem;$i++){
            $this->validate($request,[
                'image['.$i.']' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'image['.$i.'].image' => 'Sai hình ảnh thứ '.$i+1,
                'image['.$i.'].mimes' => 'Sai định dạng thứ'.$i+1,
                'image['.$i.'].max' => 'Kích thước ảnh quá lớn (<2048)'.$i+1
            ]);
            
        }
        for($i=0;$i<$dem;$i++){
            $time = date('dmYHis').$i;
            $name = $_FILES['image']['name'][$i];
            $arr = explode(".",$name);
            
            $hinhanh = hinhanh::create([
                'name' => $time.".".$arr[count($arr)-1],
                'url' => $request->input('url'),
                'idmenu'=>$request->input('menu')
            ]);
            if($hinhanh){
                $image = $request->file('image');
                $destinationPath = public_path('\AdminLTE\dist\img\image');
                
                $img = Image::make($image->getRealPath());
                $img->save($destinationPath.'\\'.$time.".".$arr[count($arr)-1]);
                return redirect()
                ->route('hinhanh.index')
                ->with('thanhcong','Thêm Hình ảnh thành công');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hinhanh  $hinhanh
     * @return \Illuminate\Http\Response
     */
    public function show(hinhanh $hinhanh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hinhanh  $hinhanh
     * @return \Illuminate\Http\Response
     */
    public function edit(hinhanh $hinhanh)
    {
        //
        $hinhanh = hinhanh::find($hinhanh->id);
        return view('admin.page.hinhanh.edit',['hinhanh'=>$hinhanh]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hinhanh  $hinhanh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hinhanh $hinhanh)
    {
        //
        $time = date('dmYHis');
        $name = $_FILES['image']['name'];
        $arr = explode(".",$name);
        $this->validate($request,
        [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]
        ,
        [
            'image.max' => 'Ảnh quá lớn'
        ]);
        $hinhanh = hinhanh::find($hinhanh->id);
        $luu = $hinhanh->name;
        $hinhanhUpdate = hinhanh::where('id', $hinhanh->id)
        ->Update([
            'name' => $time.".".$arr[count($arr)-1],
            'url' => $request->input('url'),
        ]);
        if($hinhanhUpdate){
            $image_path = public_path('\AdminLTE\dist\img\image\\'.$luu);
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $image = $request->file('image');
            $destinationPath = public_path('\AdminLTE\dist\img\image');
            
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath.'\\'.$time.".".$arr[count($arr)-1]);
            return redirect()
            ->route('hinhanh.index')
            ->with('thanhcong','Chỉnh sửa Hình ảnh thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hinhanh  $hinhanh
     * @return \Illuminate\Http\Response
     */
    public function destroy(hinhanh $hinhanh)
    {
        //
    }
    public function deleteItem(Request $req)
    {
        $hinhanh = hinhanh::find($req->id);
        $image_path = public_path('\maaptl\img\\'.$hinhanh->name);
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
        hinhanh::find($req->id)->delete();
        return response()->json();
    }
}
