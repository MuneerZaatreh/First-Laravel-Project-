<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        return view('computers.index', [
            'computers' => Computer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate(
            [
                'computer-name' =>'required',
                'computer-country' =>'required',
                'computer-price' => ['required','integer']
            ]
            );

      $computer =  new Computer();
      $computer->name = strip_tags($request->input('computer-name'));
      $computer->country =strip_tags($request->input('computer-country'));
      $computer->price =strip_tags($request->input('computer-price'));
      $computer ->save();
      return redirect()->route('computers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($computer)
    {
        return view('computers.show', 
        ['computer'=>Computer::findOrfail($computer)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('computers.edit',['computer' => Computer::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $computer)
    {
        $request ->validate(
            [
                'computer-name' =>'required',
                'computer-country' =>'required',
                'computer-price' => ['required','integer']
            ]
            );
          $toUpdate =   Computer::findOrFail($computer);
          $toUpdate ->name = strip_tags($request->input('computer-name'));
          $toUpdate ->country =strip_tags($request->input('computer-country'));
          $toUpdate ->price =strip_tags($request->input('computer-price'));
          $toUpdate  ->save();
          return redirect()->route('computers.show',$computer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($computer)
    {
       $to_delete = Computer::find($computer);
       $to_delete  ->delete();
       return redirect()->route('computers.index');
    }
}
