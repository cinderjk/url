<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Http\Resources\UrlResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $urls = UrlResource::collection(Url::latest()->get());

        //render with data "urls"
        return inertia('Url/Index', compact('urls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('Url/Create');
    }

    public function store(Request $request)
    {
        //set validation
        $request->validate([
            'link'   => 'required',
        ]);

        $hash = Str::random(7);

        //create url
        $url = Url::create([
            'user_id'     => 1,
            'hash'        => $hash,
            'original_url'   => $request->link,
            'created_at' => now(),
        ]);

        if ($url) {
            return to_route('urls.index')->with('message', 'Data Berhasil Disimpan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function show(Url $url)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function edit(Url $url)
    {
        return inertia('Url/Edit', compact('url'));
    }

    public function update(Request $request, Url $url)
    {
        //set validation
        $request->validate([
            'link'   => 'required',
        ]);

        $hash = md5($request->link);

        //update post
        $url->update([
            'user_id'       => 1,
            'hash'          => $hash,
            'original_url'  => $request->link,
            'created_at'    => now(),
        ]);

        if ($url) {
            return to_route('urls.index')->with('message', 'Data Berhasil Diupdate!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function destroy(Url $url)
    {
        //
    }
}
