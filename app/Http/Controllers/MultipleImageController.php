<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MultipleImageUpload;

use Illuminate\Support\Carbon;

use Illuminate\Support\Str;

class MultipleImageController extends Controller
{
    public function index()
    {
        $data = MultipleImageUpload::all();
        return view('admin.pages.image_upload', compact('data'));
    }

    public function store(Request $request)
    {
        foreach ($request->file('filename') as $image) {
            // $imagename = $image->get;
            $imagename = time() . Str::random(40) . '.png'; //naming of the image with random data file and changing the extention
            // $imagename = $imagename->toDateTimeString() . '.png';
            $image->move(public_path() . '/uploads/original/', $imagename);
            $data[] = $imagename;
        }

        $imagemodel = new MultipleImageUpload;
        $imagemodel->filename = json_encode($data);
        if ($imagemodel->save()) {
            return back()->with('success', 'Images has been successfully Upload');
        }
    }
}
