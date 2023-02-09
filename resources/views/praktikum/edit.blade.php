@extends('praktikum.indexx')
@section('title', 'Table')
@section('content')
    <section class="wrapper">
        <div class="panel-body">
            <div class="position-center">
                <form role="form" action="{{ url('/updatepraktikum/' . $data->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Input id">Id</label>
                        <input type="number" name="id" class="form-control" id="Input id"
                            placeholder="id" value="{{ $data->id}}">
                    </div>
                    <div class="form-group">
                        <label for="Input nid">NID</label>
                        <input type="text" name="nid" class="form-control" id="Input nid" placeholder="nid" value="{{ $data->nid}}">
                    </div>
                    <div class="form-group">
                        <label for="Inputkode_ruangan">Kode Ruangan</label>
                        <input type="text" name="kode_ruangan" class="form-control" id="Input kode_ruangan" placeholder="kode_ruangan" value="{{ $data->kode_ruangan}}">
                    </div>
                    <div class="form-group">
                        <label for="Inputnama_praktikum">Nama Praktikum</label>
                        <input type="text" name="nama_praktikum" class="form-control" id="Inputnama_praktikum" placeholder="nama_praktikum" value="{{ $data->nama_praktikum}}">
                    </div>
                    <div class="form-group">
                        <label for="Inputsks">SKS</label>
                        <input type="text" name="sks" class="form-control" id="Inputsks" placeholder="sks" value="{{ $data->sks}}">
                    </div>

                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>

        </div>
    </section>
    </section>

@endsection
