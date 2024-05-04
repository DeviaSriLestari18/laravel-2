<?php

namespace App\Http\Controllers;

use App\Models\album_musik;
use App\Http\Requests\Storealbum_musikRequest;
use App\Http\Requests\Updatealbum_musikRequest;

class AlbumMusikController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storealbum_musikRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storealbum_musikRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\album_musik  $album_musik
     * @return \Illuminate\Http\Response
     */
    public function show(album_musik $album_musik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\album_musik  $album_musik
     * @return \Illuminate\Http\Response
     */
    public function edit(album_musik $album_musik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatealbum_musikRequest  $request
     * @param  \App\Models\album_musik  $album_musik
     * @return \Illuminate\Http\Response
     */
    public function update(Updatealbum_musikRequest $request, album_musik $album_musik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\album_musik  $album_musik
     * @return \Illuminate\Http\Response
     */
    public function destroy(album_musik $album_musik)
    {
        //
    }
}
