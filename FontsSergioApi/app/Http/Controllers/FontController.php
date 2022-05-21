<?php

namespace App\Http\Controllers;


use App\Models\Font;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Test;
use Illuminate\Support\Facades\Storage;

class FontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Font::all();
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

    public function download($id)
    {
        $data = Font::findOrFail($id);
        $filename = "font.json";
        $handle = fopen($filename, 'w+');
        fputs($handle, $data->toJson(JSON_PRETTY_PRINT));
        fclose($handle);
        $headers = array('Content-type'=> 'application/json');
        return response()->download($filename,'font.json',$headers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $font = new Font;
        $font->CODI = $request->input('CODI');
        $font->NOM = $request->input('NOM');
        $font->ADREÇA = $request->input('ADREÇA');
        $font->X_ETRS89 = $request->input('X_ETRS89');
        $font->Y_ETRS89 = $request->input('Y_ETRS89');
        $font->LATITUD = $request->input('LATITUD');
        $font->LONGITUD = $request->input('LONGITUD');
        $font->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($x)
    {
        return Font::where('X_ETRS89', $x)->pluck('NOM');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}

