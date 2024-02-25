<?php

namespace Modules\Admin01\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Admin01Controller extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */

    public function testApi(){
        return view('admin01::index');
        return 'testAPI';
    }
    public function admin01Api(){
        return 'admin01Api';
    }
    

    public function index()
    {
        // return view('admin01::index');
        return 'index';
    }

    public function save(){
        return 'save';
    }
    
    public function delete(){
        return "{\"delete\":\"asdf\"}";
    }
    
    public function update(){
        return 'update';
    }
    

    // /**  原始的 文件代码 目前不使用 先注释起来  
    //  * Update the specified resource in storage.
    //  * @param Request $request
    //  * @param int $id
    //  * @return Renderable
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }
    // /**
    //  * Remove the specified resource from storage.
    //  * @param int $id
    //  * @return Renderable
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
