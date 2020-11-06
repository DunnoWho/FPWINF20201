<?php

namespace App\Http\Controllers;

use App\Mail\HtmlMail;
use App\Mail\MarkdownMail;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index()
    {
        $images = array();
        // $images = Photo::all();
        foreach (Photo::all() as $i) {
            $d = Carbon::createFromFormat('Y-m-d H:i:s', $i->created_at, 'UTC')->locale('id')->setTimezone("asia/jakarta");
            $i->diupload_pada = $d->isoFormat('LLLL');
            $i->diupload_diff = $d->diffForHumans();
            $i->kadaluarsa_pada = $d->addDays(30)->isoFormat('LLLL');
            $images[] = $i;
        }
        return view("index", ["images" => $images]);
    }
    public function add()
    {
        return view("add");
    }
    public function doAdd(Request $request)
    {
        if ($request->hasFile("photo")) {
            $photo = new Photo();
            $photo->title = $request->title;
            // $photo->filename = uniqid() . "." . $request->file("photo.0")->getClientOriginalExtension();
            // $request->file("photo.0")->storeAs("/public/photos", $photo->filename);
            // $request->file("photo.1")->storeAs("/public/photos", uniqid() . ".png");
            $photo->filename = uniqid() . "." . $request->file("photo")->getClientOriginalExtension();
            $request->file("photo")->storeAs("/public/photos", $photo->filename);
            $photo->save();

            Mail::to($request->email)->send(new HtmlMail($request->title, $photo->filename));

            return redirect("/add");
        } else {
            return "TIDAK ada foto!";
        }
    }
    public function previewEmail()
    {
        return new HtmlMail("Emiliee");
    }
    public function download($id)
    {
        $img = Photo::find($id);
        $orifilepath = "/public/photos/" . $img->filename;
        $ext = pathinfo($orifilepath, PATHINFO_EXTENSION);
        return Storage::download($orifilepath, $img->title . "." . $ext);
        // return Storage::download($orifilepath, $img->title . ".jpg");
    }
}
