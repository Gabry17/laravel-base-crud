<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics_list = Comic::all();
        return view('comics.index', compact('comics_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->getValidation());
        $data = $request->all();
        $new_comic = new Comic();
        $new_comic->title = $data['title'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->description = $data['description'];
        $new_comic->type = $data['type'];
        $new_comic->price = $data['price'];
        $new_comic->series = $data['series'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic_info = Comic::find($id);
        return view('comics.show', compact('comic_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic_update = Comic::findOrFail($id);
        return view('comics.edit', compact('comic_update'));
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
        $request->validate($this->getValidation());
        $data = $request->all();
        $comic = Comic::findOrFail($id);
        $comic->update($data);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function getValidation(){
        return[
            'title' => 'required|min:1|max:255',
            'thumb' => 'required',
            'description' => 'required',
            'type' => 'required|max:100',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required'
        ];
    }
}
