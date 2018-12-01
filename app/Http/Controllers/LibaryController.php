<?php

namespace App\Http\Controllers;
use App\Libary;
use Illuminate\Http\Request;

class LibaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libarys = Libary::all();
        return view('libary.list', compact('libarys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libarys = new Libary();
        $libarys->name = $request->input('name');
        $libarys->email = $request->input('email');
        $libarys->address = $request->input('address');
        $libarys->phone = $request->input('phone');
        if ($request->hasFile('image')) {
            if($request->file('image')->isValid()) {
                $image = $request->image;
                $clientName = $image->getClientOriginalName();
                $path = $image->move(public_path('upload/images'),$clientName);
                $libarys->image= $clientName;
            }
        }

        $libarys->save();
        return redirect()->route('libary.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $libarys = Libary::findOrfail($id);
        return view('libary.edit', compact('libarys'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $libarys = Libary::findOrfail($id);
        $libarys->name = $request->input('name');
        $libarys->email = $request->input('email');
        $libarys->address = $request->input('address');
        $libarys->phone = $request->input('phone');
        if($request->hasFile('image')) {
            $currentImg = $libarys->image;
            if ($currentImg) {
                Storage::delete('upload/image', $currentImg);
            }
            $image = $request->image;
            $clientName = $image->getClientOriginalName();
            $path = $image->move(public_path('upload/images'),$clientName);
            $libarys->image= $clientName;
        }

        $libarys->save();
        return redirect()->route('libary.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libarys = Libary::findOrfail($id);
        $libarys->delete();
        return redirect()->route('libary.index');

    }
    public function listbook()
    {
        $libarys = Libary::all();
        return view('libary.listbook', compact('libarys'));
    }
    public function listauthor()
    {
        $libarys = Libary::all();
        return view('libary.listauthor', compact('libarys'));
    }

}
