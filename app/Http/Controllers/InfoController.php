<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\Setting;
use App\Models\Categorie;

class InfoController extends Controller
{
    public function adminDashboard(){
        return view('admin.dashboard');
    }
    public function about(){
        $data = Setting::first();
        
        $Categorie = Categorie::take(3)->get();

        return view('about', compact('data','Categorie'));
    }
    public function admincateogries(){
        return view('admin.cateogries');
    }
    public function viewCateogries(){
        return view('admin.viewCateogries');
    }

    public function getAllInfos()
    {
        $infos = Info::all(); 
        return response()->json($infos);
    }

    public function getInfo($id)
    {
        $info = Info::find($id); 

        if (!$info) {
            return response()->json(['message' => 'Record not found'], 404); 
        }

        return response()->json($info);
    }

    public function createInfo(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'img' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', 
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'insta' => 'required|string',
            'fb' => 'required|string',
            'twitter' => 'required|string',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');

            $imagePath = $image->store('images', 'public'); 

            $validated['img'] = $imagePath;
        }

     
        $info = Info::create($validated);

        return response()->json($info, 201); 
    }

    public function updateInfo(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string',
            'content' => 'sometimes|required|string',
            'img' => 'sometimes|required|image|mimes:jpg,jpeg,png,gif|max:2048', // Image validation for update
            'address' => 'sometimes|required|string',
            'phone' => 'sometimes|required|string',
            'email' => 'sometimes|required|string',
            'insta' => 'sometimes|required|string',
            'fb' => 'sometimes|required|string',
            'twitter' => 'sometimes|required|string',
        ]);

        $info = Info::find($id);

        if (!$info) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        if ($request->hasFile('img')) {
            $image = $request->file('img');

            $imagePath = $image->store('images', 'public'); 

            $validated['img'] = $imagePath;
        }

        $info->update($validated);

        return response()->json($info); 
    }

    public function welcome(){
        $data = Setting::first();
        
        $Categorie = Categorie::take(3)->get();

        return view('welcome', compact('data','Categorie'));
    }

    public function story($id){

        $Categorie = Categorie::join('stories','stories.categories_id','=','categories.id')->where('stories.categories_id',$id)->get();
        $data = Setting::first();
        return view('story', compact('data','Categorie'));
    }

    public function apiCheck()
    {
        $data = "Tejas";
        return $data;
    }
}
