<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function viewEvent()
    {
        $data = Event::all(); 
        return view('admin.viewEvent', compact('data')); 
    }

    public function showEvent($id)
    {
        $event = Event::findOrFail($id); 
        return view('admin.editEvent', compact('event')); 
    }

    public function addEvent()
    {
        return view('admin.addEvent'); 
    }

    public function storyEvent(Request $request)
    {
        $validated =  $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required',
            'location' => 'required|string|max:255',
            // 'image_url' => 'nullable|url',
        ]);

      
        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images', $imageName, 'public');
            $validated['image_url'] = $imagePath;
        }

        Event::create($validated); 

        return redirect()->back();
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id); 
        return view('events.edit', compact('event')); 
    }


    public function storyCreateupdate(Request $request,$id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required',
            'location' => 'required|string|max:255', 
        ]);

        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images', $imageName, 'public');
            $validated['image_url'] = $imagePath;
        }

        $story = Event::findOrFail($id);
        $story->update($validated);

        return redirect()->back();
    }

    public function destroyEvent($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->back();
    }
}
