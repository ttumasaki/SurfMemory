<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Memory;

use Illuminate\Support\Facades\DB;

use App\Services\CheckFormData;

class MemoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memories = DB::table('memories')
                        ->orderBy('date','desc')
                        ->first();

        $size =CheckFormData::checkSize($memories);
        $w_condition =CheckFormData::checkW_condition($memories);
        $number =CheckFormData::checkNumber($memories);
        $state =CheckFormData::checkState($memories);
        $direction =CheckFormData::checkDirection($memories);
        $people =CheckFormData::checkPeople($memories);

        return view('memory.index',compact('memories','size','w_condition','number','state','direction','people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('memory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $memory = new Memory;

        $memory->point = $request->input('point');
        $memory->date = $request->input('date');
        $memory->size = $request->input('size');
        $memory->w_condition = $request->input('w_condition');
        $memory->number = $request->input('number');
        $memory->state = $request->input('state');
        $memory->direction = $request->input('direction');
        $memory->people = $request->input('people');

        $memory->save();

        return redirect('memory/index');
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $memories = Memory::find($id);

        return view('memory.edit',compact('memories'));
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
        $memories = Memory::find($id);

        $memories->point = $request->input('point');
        $memories->date = $request->input('date');
        $memories->size = $request->input('size');
        $memories->w_condition = $request->input('w_condition');
        $memories->number = $request->input('number');
        $memories->state = $request->input('state');
        $memories->direction = $request->input('direction');
        $memories->people = $request->input('people');

        $memories->save();

        return redirect('memory/index');
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
        $memories = Memory::find($id);
        $memories->delete();

        return redirect('memory/index');
    }
}
