<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Value;
use Illuminate\Http\Request;

class ValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['values'] = Value::orderBy('id','desc')->paginate(5);
        return view('nilai.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nilai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_santri' => 'required',
            'kelas' => 'required',
            'mata_pelajaran' => 'required',
            'nilai' => 'required',
            'pengajar' => 'required',
        ]);

        Value::create($validateData);
        return redirect('nilai')->with('success' , 'new value has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $value = Value::where('id',$id)->first();
        return view('nilai.edit',[
            'value' => $value
        ]);
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
        $validateData = $request->validate([
            'nama_santri' => 'required',
            'kelas' => 'required',
            'mata_pelajaran' => 'required',
            'nilai' => 'required',
            'pengajar' => 'required',
        ]);

        Value::find($id)
            ->update($validateData);

        return redirect('nilai')->with('success' , 'new value has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Value::where('id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
  
        return redirect('/nilai')->with('delete','value has been deldted');
    }
}
