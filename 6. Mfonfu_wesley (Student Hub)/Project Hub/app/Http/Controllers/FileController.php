<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function showCa() {

        $field = "";

        if(Auth::user()->field_of_study === "Engineering") {
            $field = "ENG";
        } else {
            $field = "MED";
        }

        $files = Storage::disk("s3")->files("THE_CURE/CA/" . $field);

        return view("user.ca", compact("files"));
    }

    public function showNotes() {

        $field = "";

        if(Auth::user()->field_of_study === "Engineering") {
            $field = "ENG";
        } else {
            $field = "MED";
        }

        $files = Storage::disk("s3")->files("THE_CURE/NOTES/" . $field);


        return view("user.notes", compact("files"));
    }

    public function showRevision() {

        $field = "";

        if(Auth::user()->field_of_study === "Engineering") {
            $field = "ENG";
        } else {
            $field = "MED";
        }

        $files = Storage::disk("s3")->files("THE_CURE/REVISION/" . $field);


        return view("user.revision", compact("files"));
    }
}
