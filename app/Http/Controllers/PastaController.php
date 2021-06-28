<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use App\Pasta;
use Illuminate\Http\Request;

class PastaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pastas = Pasta::all();
        $pastas = Pasta::orderBy('id','desc')->paginate(5);

        return view('pastas.index', compact('pastas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pastas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $new_pasta = new Pasta();
        /* $new_pasta->title = $data['title'];
        $new_pasta->slug = Str::slug($data['title'], '-');
        $new_pasta->description = $data['description'];
        $new_pasta->type = $data['type'];
        $new_pasta->image = $data['image'];
        $new_pasta->cooking_time = $data['cooking_time'];
        $new_pasta->weight = $data['weight']; */

        $data['slug'] = Str::slug($data['title'], '-');
        $new_pasta->fill($data);

        $new_pasta->save();

        return redirect()->route('pastas.show',$new_pasta);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pasta $pasta)
    {
        //$pasta = Pasta::find($id);
        //$pasta = Pasta::where('slug',$slug)->first();

        if($pasta){
            return view('pastas.show',compact('pasta'));
        }
        abort(404, 'Prodotto non presente nel database!');
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
