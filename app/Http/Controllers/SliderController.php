<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Slider;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        // validate the input field
        /*$this->validate($request, [
            'title'         =>  'string|max:50',
            'description'   =>  'string|max:100',
        ]);*/

        $slider = new Slider;

        /*$slider->title = $request->title;
        $slider->description = $request->description;*/

        // Save Image
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . $image->getClientOriginalName();
//            $path = $request->file('image')->store('sliders', $filename);
            $path = Storage::putFileAs('sliders', $request->file('image'), $filename);
            $slider->image = $path;
        }

        $slider->save();

        Session::flash('message', 'Slider successfully saved');

        return back();
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'         =>  'string|max:50',
            'description'   =>  'string|max:100',
        ]);

        $slider = Slider::findOrFail($id);

        $slider->title = $request->title;
        $slider->description = $request->description;

        // Save Image
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs('sliders', $filename);
            $oldFile = $slider->image;

            // Update the database
            $slider->image = $path;

            // Delete the old pic
            Storage::delete($oldFile);
        }

        $slider->save();

        Session::flash('message', 'Slider successfully updated');

        return back();
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);

        Storage::delete($slider->image);
        $slider->delete();

        Session::flash('message', 'Slider successfully deleted');

        return back();

    }


}
