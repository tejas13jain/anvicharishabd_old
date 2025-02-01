<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    // public function setting(){
    //     return view('admin.setting');
    // }

    public function setting($id)
    {
        $data = Setting::where('id', $id)->first(); 

        return view('admin.setting',compact('data')); 
    }

    public function settingCreate(Request $request)
    {
       
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'number' => 'required',
            'email' => 'required|string|max:255',
            'fb' => 'required|string|max:255',
            'insta' => 'required|string|max:255',
            'youtube' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images', $imageName, 'public');
            $validated['logo'] = $imagePath;
        }

        // dd($validated);
        Setting::create($validated);

        return redirect()->back();
    }

    public function viewSetting(){

        $data = Setting::all();

        return view('admin.viewSetting', compact('data'));  

    }
    
    public function settingCreateupdate(Request $request,$id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'number' => 'required',
            'fb' => 'required|string|max:255',
            'insta' => 'required|string|max:255',
            'youtube' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images', $imageName, 'public');
            $validated['logo'] = $imagePath;
        }

        // dd($validated);
        $story = Setting::findOrFail($id);
        $story->update($validated);

        return redirect()->back();
    }
    public function contactus(){
        $data = Setting::first();

        return view('contactus', compact('data'));
    }
}
