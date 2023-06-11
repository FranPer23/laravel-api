<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view('admin.types.index', compact('types'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type $Type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $Type)
    {
        return view('admin.types.show', compact('type'));
    }
}
