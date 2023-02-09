<?php

namespace App\Http\Controllers;
use App\Models\Praktikum;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PraktikumController extends Controller
{
    public function index(Praktikum $praktikum) 
    {
        $praktikumData = $praktikum->all();

        $data = [
            'data' => $praktikumData,
        ];

        return view('praktikum.index', $data);

    }

    public function add()
    {
        return view('praktikum.add');
    }

    public function create(Request $request, Praktikum $praktikum ) 
    {
        $validator = Validator::make($request->all(), [
            'nid' => 'required',
            'kode_ruangan' => 'required',
            'nama_praktikum' => 'required',
            'sks' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ],422);
        }
 
        $praktikum ->create([
            'nid' =>  $request->nid,
            'kode_ruangan' =>  $request->kode_ruangan,
            'nama_praktikum' =>  $request->nama_praktikum,
            'sks' =>  $request->sks,
        ]);
    
        if($praktikum ){
            return redirect('/');
        }else {
            return "Gagal";
        }
    }

    public function detail(Praktikum  $praktikum )
    {
        
        $data = [
            'data' => $praktikum ,
        ];

        return view('praktikum.edit', $data);
    }

    public function update(Request $request,Praktikum $praktikum )
    {
        $validator = Validator::make($request->all(), [
            'nid' => 'required',
            'kode_ruangan' => 'required',
            'nama_praktikum' => 'required',
            'sks' => 'required',
        ]); 
        
        if($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ],422);
        }

        $praktikum ->update([
            'nid' =>  $request->nid,
            'kode_ruangan' =>  $request->kode_ruangan,
            'nama_praktikum' =>  $request->nama_praktikum,
            'sks' =>  $request->sks,
        ]);

        if($praktikum ){
            return redirect('/');
        }else {
            return 'Data Gagal Update';
            
        }
    }

    public function delete(Praktikum  $praktikum )
    {
        $praktikum ->delete();

        if ($praktikum ){
            return redirect('/');
        }else {
            return 'error';
        }
    }
}
