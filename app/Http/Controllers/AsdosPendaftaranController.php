<?php

namespace App\Http\Controllers;
use App\Models\AsdosPendaftaran;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AsdosPendaftaranController extends Controller
{
    public function index(AsdosPendaftaran $asdospendaftaran) 
    {
        $asdospendaftaranData = $asdospendaftaran->all();

        $data = [
            'data' => $asdospendaftaranData,
        ];

        return view('app.index', $data);

    }

    public function add()
    {
        return view('app.form');
    }

    public function create(Request $request, AsdosPendaftaran $asdospendaftaran) 
    {
        $validator = Validator::make($request->all(), [
            'nama_dosen' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ],422);
        }
 
        $asdospendaftaran->create([
            'nama_dosen' => $request->nama_dosen,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);
    
        if($asdospendaftaran){
            return redirect('/');
        }else {
            return "Gagal";
        }
    }

    public function detail(AsdosPendaftaran $asdospendaftaran)
    {
        
        $data = [
            'data' => $asdospendaftaran,
        ];

        return view('app.formEdit', $data);
    }

    public function update(Request $request, AsdosPendaftaran $asdospendaftaran)
    {
        $validator = Validator::make($request->all(), [
            'nama_dosen' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]); 
        
        if($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ],422);
        }

        $asdospendaftaran->update([
            'nama_dosen' => $request->nama_dosen,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);

        if($asdospendaftaran){
            return redirect('/');
        }else {
            return 'Data Gagal Update';
            
        }
    }

    public function delete(AsdosPendaftaran $asdospendaftaran)
    {
        $asdospendaftaran->delete();

        if ($asdospendaftaran){
            return redirect('/');
        }else {
            return 'error';
        }
    }
}

