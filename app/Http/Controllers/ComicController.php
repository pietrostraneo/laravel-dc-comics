<?php

namespace App\Http\Controllers;

use App\Models\Comic;
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
        $comics = Comic::all();
        $socials = config('socials');
        $links = config('link');
        $footer = config('footerlink');
        $banner = config('banner');
        return view('comics', compact('comics', 'socials', 'links', 'footer', 'banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $socials = config('socials');
        $links = config('link');
        $footer = config('footerlink');
        $banner = config('banner');
        return view('create', compact('socials', 'links', 'footer', 'banner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addcomic = $request->all();
        $comic = new Comic;

        // $comic->title = $addcomic['title'];
        // $comic->description = $addcomic['description'];
        // $comic->thumb = $addcomic['thumb'];
        // $comic->price = $addcomic['price'];
        // $comic->series = $addcomic['series'];
        // $comic->sale_date = $addcomic['sale_date'];
        // $comic->type = $addcomic['type'];
        // $comic->artists = $addcomic['artists'];
        // $comic->writers = $addcomic['writers'];

        $comic->fill($addcomic);

        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $socials = config('socials');
        $links = config('link');
        $footer = config('footerlink');
        $banner = config('banner');
        return view('details', compact('comic', 'socials', 'links', 'footer', 'banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $socials = config('socials');
        $links = config('link');
        $footer = config('footerlink');
        $banner = config('banner');
        return view('edit', compact('comic', 'socials', 'links', 'footer', 'banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $editcomic = $request->all();

        // $comic->title = $editcomic['title'];
        // $comic->description = $editcomic['description'];
        // $comic->thumb = $editcomic['thumb'];
        // $comic->price = $editcomic['price'];
        // $comic->series = $editcomic['series'];
        // $comic->sale_date = $editcomic['sale_date'];
        // $comic->type = $editcomic['type'];
        // $comic->artists = $editcomic['artists'];
        // $comic->writers = $editcomic['writers'];

        $comic->fill($editcomic);

        $comic->update();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
