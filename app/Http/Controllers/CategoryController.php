<?php
namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAllCateogries()
    {
        $categories = Categorie::all(); 
       
        return view('admin.viewCateogries', compact('categories'));
    }

    public function getCateogriesById($id)
    {
        $categories = Categorie::find($id); 
      
        return view('admin.viewEditCateogries', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function viewEditCateogries()
    {
        return view('admin.viewEditCateogries');
    }

    public function store(Request $request)
    {       
        $validated = $request->validate([
            'categories' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images', $imageName, 'public');
            $validated['logo'] = $imagePath;
        }

        // dd($validated);
        Categorie::create($validated);
       
        return redirect()->back();
    }

    public function edit(Categorie $categorie)
    {
        return view('categories.edit', compact('categorie'));
    }

    public function updateCategorie(Request $request,$id)
    {
        $validated = $request->validate([
            'categories' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images', $imageName, 'public');
            $validated['logo'] = $imagePath;
        }

        // dd($validated);
        $story = Categorie::findOrFail($id);
        $story->update($validated);
       
        return redirect()->back();
    }

    
    public function destroyCategorie($id)
    {
        $event = Categorie::findOrFail($id);
        $event->delete();

        return redirect()->back();
    }
}
