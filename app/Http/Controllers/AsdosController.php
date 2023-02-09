<?php

namespace App\Http\Controllers;
use App\Models\Asdos;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AsdosController extends Controller
{
    public function index(Asdos $asdos) 
    {
        $asdosData = $asdos->all();

        $data = [
            'data' => $asdosData,
        ];

        return view('asdos.index', $data);

    }

    public function tambah()
    {
        return view('asdos.add');
    }

    public function create(Request $request, Asdos $asdos) 
    {
        $validator = Validator::make($request->all(), [
            'id_praktikum' => 'required',
            'nim' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'ipk' => 'required',
            'transkrip_nilai' => 'required',
            'no_hp' => 'required',
            'status' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ],422);
        }
 
        $asdos->create([
            'id_praktikum' => $request->id_praktikum,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'email' => $request->email,
            'ipk' => $request->ipk,
            'transkrip_nilai' => $request->transkrip_nilai,
            'no_hp' => $request->no_hp,
            'status' => $request->status,
        ]);
    
        if($asdos){
            return redirect('/');
        }else {
            return "Gagal";
        }
    }

    public function detail(Asdos $asdos)
    {
        
        $data = [
            'data' => $asdos,
        ];

        return view('asdos.edit', $data);
    }

    public function update(Request $request, Asdos $asdos)
    {
        $validator = Validator::make($request->all(), [
            'id_praktikum' => 'required',
            'nim' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'ipk' => 'required',
            'transkrip_nilai' => 'required',
            'no_hp' => 'required',
            'status' => 'required',
        ]); 
        
        if($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ],422);
        }

        $asdos->update([
            'id_praktikum' => $request->id_praktikum,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'email' => $request->email,
            'ipk' => $request->ipk,
            'transkrip_nilai' => $request->transkrip_nilai,
            'no_hp' => $request->no_hp,
            'status' => $request->status,
        ]);

        if($asdos){
            return redirect('/');
        }else {
            return 'Data Gagal Update';
            
        }
    }

    public function delete(Asdos $asdos)
    {
        $asdos->delete();

        if ($asdos){
            return redirect('/');
        }else {
            return 'error';
        }
    }
}
