<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#use Illuminate\Database\QueryException;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function acompanhantes()
    {
        $search = request('search');
        if ($search) {
            $profile = Event::where([
                ['nome', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $profile = Event::all();
        }
        return view('acompanhantes', ['profile' => $profile, 'search' => $search]);
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
        $profile->Estado = $request->Estado;
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


        return redirect('/acompanhantes');
    }
    public function planos()
    {
        return view('/planos');
    }
    public function show($id)
    {
        $profile = Event::findOrFail($id);
        return view('events.profile', ['profile' => $profile]);
    }
}
