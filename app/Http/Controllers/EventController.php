<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#use Illuminate\Database\QueryException;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $profile = Event::all();
        return view('home', ['profile' => $profile]);
    }
    public function profile()
    {
        return view('profile');
    }
    public function create()
    {
        return view('events.create');
    }
    public function store(Request $request)
    {
        $profile = new Event;
        $profile->nome = $request->nome;
        $profile->description = $request->description;
        $profile->city = $request->city;
        $profile->tatuagem = $request->tatuagem;

        //Image Upload
        if ($request->hasFile('imageProfile') && $request->file('imageProfile')->isValid()) {

            $requestImage = $request->file('imageProfile');

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/profileImg'), $imageName);

            $profile->imageProfile = $imageName;
        }

        $profile->save();


        return redirect('/');
    }
    public function show($id)
    {
        $profile = Event::findOrFail($id);
        return view('events.profile', ['profile' => $profile]);
    }
}
