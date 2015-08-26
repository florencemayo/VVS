<?php

namespace App\Http\Controllers;

use App\ItemMinMax;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItemMinMaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return ItemMinMax::all();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $item = new ItemMinMax;

        $item->order    = count(ItemMinMax::all())+1;
        $item->status   = "active";
        $item->name     = $request->input("name");
        $item->code     = $request->input("code");

        $item->save();
        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {

        $recipient = ItemMinMax::find($id);
        $recipient->name = $request->input('name');
        $recipient->code = $request->input('code');
        $recipient->status = $request->input('status');
        $recipient->save();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $recipient = ItemMinMax::find($id);
        $recipient->delete();
    }

}