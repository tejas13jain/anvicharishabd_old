<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Models\Categorie;

class StoryController extends Controller
{
    public function viewstory()
    {
        $stories = Story::join('categories','categories.id','stories.categories_id')
                        ->select('categories.categories','stories.id','stories.title','stories.content','stories.image_url')->get(); 
        // return $stories;
        return view('admin.viewstory', compact('stories'));  
    }

    public function adminDashboard()
    {
        $stories = Story::join('categories','categories.id','stories.categories_id')
                        ->select('categories.categories','stories.id','stories.title','stories.content','stories.image_url')->get(); 
        // return $stories;
        return view('admin.dashboard', compact('stories'));  
    }

    public function show($id)
    {
        $story = Story::join('categories','categories.id','stories.categories_id')
        ->select('categories.categories','stories.id','stories.title','stories.content','stories.image_url')
        ->where('stories.id', $id)->first($id); 

        return view('admin.edotStory',compact('story')); 
    }

    public function story()
    {
        $categories = Categorie::all(); 

        return view('admin.story',compact('categories'));  
    }


    public function storyCreate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'categories_id' => 'required|string|max:255',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Added image validation rules
        ]);

        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images', $imageName, 'public');
            $validated['image_url'] = $imagePath;
        }

        // dd($validated);
        Story::create($validated);

        return redirect()->back();
    }

    public function edit($id)
    {
        $story = Story::findOrFail($id); 
        return view('stories.edit', compact('story')); 
    }

    public function storyUpdatebyId(Request $request,$id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'categories_id' => 'required|string|max:255',
            // 'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Added image validation rules
        ]);

        // dd($validated);
        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images', $imageName, 'public');
            $validated['image_url'] = $imagePath;
        }

        // dd($validated);
        $story = Story::findOrFail($id);
        $story->update($validated);

        return redirect()->back();
    }

    
    public function destroyStory($id)
    {
        $story = Story::findOrFail($id); 
        $story->delete();  

        return redirect()->back();
    }
}
