<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image as Image;
use App\ImageModel;




class ImageController extends Controller
{
    public function index(){
        $image_data = ImageModel::all();
        return view('admin.pages.image-upload',['data'=>$image_data]);
        // return view('admin.pages.image-upload',compact('image_data'));
    }
    public function upload(Request $request){

        $originalImage = $request->file('filename');
        $originalImage = Image::make($originalImage);

        $originalPath = public_path()."/uploads/original/";
        $filename = time().".png";

        $originalImage->save($originalPath.$filename);

        $imagemodel = new ImageModel;
        $imagemodel->filename = $filename;

        if($imagemodel->save()){
                return back()->with('success', 'Your images has been successfully Upload');
            }

    }
};

// public function store(request $request) {

//     $input=$request->all();
//     $images=array();
//     if($files=$request->file('images')){
//         foreach($files as $file){
//             $name=$file->getClientOriginalName();
//             $file->move('image',$name);
//             $images[]=$name;
//         }
//     }
//     /*Insert your data*/

//     Detail::insert( [
//         'images'=>  implode("|",$images),
//         'description' =>$input['description'],
//         //you can put other insertion here
//     ]);


//     return redirect('redirecting page');
// }

  //HERE,success is a Session
        // $originalImage= $req->file('filename');
        // $thumbnailImage = Image::make($originalImage);
        // $thumbnailPath = public_path().'/uploads/original';
        // $originalPath = public_path().'/uploads/original';
        // $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        // $thumbnailImage->resize(150,150);
        // $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

        // $imagemodel= new ImageModel();
        // $imagemodel->filename=time().$originalImage->getClientOriginalName();
        // $imagemodel->save();

        // $originalImage= $req->file('filename');
        // $originalImage = Image::make($originalImage);
        // $originalPath = public_path().'/uploads/original/';
        // $filename = time().'.png';
        // $originalImage->save($originalPath.$filename);
        // $imagemodel= new ImageModel();
        // $imagemodel->filename= $filename;
        // if($imagemodel->save()){
        //     return back()->with('success', 'Your images has been successfully Upload');
        // }
