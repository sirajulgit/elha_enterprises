<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    //

    public function index()
    {
        $data = array();
        $data['pageTitle'] = 'Resource';
        $data['activePageName'] = 'Resource';
        $data['activeSubMenu'] = '';

        $items = Resource::orderBy("id", "desc")->get();

        $temp_arr = [];
        foreach ($items as $item) {

            $default_image = '/uploads/images/' . $item['image'];

            $item->image = $default_image;

            array_push($temp_arr, $item);
        }


        $data['items'] = $temp_arr;

        return view("admin.resource.resource_list", ["data" => $data]);
    }


    public function create()
    {

        $data = array();
        $data['pageTitle'] = 'Resource';
        $data['activePageName'] = 'Resource';
        $data['activeSubMenu'] = '';

        return view("admin.resource.resource_create", ["data" => $data]);
    }


    public function post_create(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:resources,slug',         
            'long_description' => 'required',
        ]);

      


        $data = new Resource();
        $data->title = $request->title;
        $data->slug = $request->slug;       
        $data->long_description = $request->long_description;
        $data->save();


        return redirect()->back()->with("success", "Create Successful");
    }


    public function update(Request $request)
    {

        $item = Resource::find($request->id);

       

        $data = array();
        $data['pageTitle'] = 'Resource';
        $data['activePageName'] = 'Resource';
        $data['activeSubMenu'] = '';

        $data['item'] = $item;

        return view("admin.resource.resource_edit", ["data" => $data]);
    }


    public function post_update(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:resources,slug,' . $request->id,
           
            'long_description' => 'required',
            'status' => 'required',
        ]);


        Resource::where("id", $request->id)->update([
            'title' => $request->title,
            'slug' => $request->slug,
            
            'long_description' => $request->long_description,
            'status' => $request->status,
        ]);

        return redirect()->back()->with("success", "Update Successful");
    }


    public function delete(Request $request)
    {

        $item = Resource::find($request->id);





        Resource::where('id', $request->id)->delete();

        // return redirect()->route('book_list')->with("success", "delete done");
        return response()->json(['status' => true, 'msg' => 'delete done']);
    }
}
