<?php

namespace App\Http\Controllers;

use App\Models\Damages;
use App\Models\Photo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DamagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function addimage(Request $request)
    {
            $img = new Photo;
        $request->validate([
            'photos' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $img->farmersemail = Auth::user()->email;
        if ($request->file('photos')) {
            $fileName = time().'_'.$request->input('crop').'_'.$request->input('disasterdate').'.'.$request->file('photos')->getClientOriginalExtension();
            $request->file('photos')->move(public_path('images'), $fileName);


            $img->images = $fileName;
            $img->disasterdate = $request->input('disasterdate');

            $img->save();

        }

            return redirect()->back()->with('success','Photos was Successfully Added!');
    }

    public function store(Request $request)
    {
        $damages = new Damages;
        $damages->email = Auth::user()->email;
        $damages->crop = $request->input('crop');
        $damages->losses = $request->input('losses');
        $damages->disaster = $request->input('disaster');
        $damages->date = $request->input('dated');

        $img = new Photo;
        $request->validate([
            'photos' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('photos')) {
            $fileName = time().'_'.$request->input('crop').'_'.$request->input('dated').'.'.$request->file('photos')->getClientOriginalExtension();
            $request->file('photos')->move(public_path('images'), $fileName);

            $img->farmersemail = Auth::user()->email;
            $img->images = $fileName;
            $img->disasterdate = $request->input('dated');
            $img->save();
        }

        $damages->save();
        $damages = Damages::where('email', Auth::user()->email)->get();
        return redirect()->back()->with('success','Successfully Added to Damage Report!')
        ->with('damages',$damages);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Damages  $damages
     * @return \Illuminate\Http\Response
     */
    public function show(Damages $damages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Damages  $damages
     * @return \Illuminate\Http\Response
     */
    public function edit(Damages $damages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Damages  $damages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Damages $damages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Damages  $damages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Damages $damages)
    {
        //
    }
}
