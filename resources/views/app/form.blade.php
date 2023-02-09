@extends('index.index')
@section('title', 'Table')
@section('content')
    <section class="wrapper">
       <div class="panel-body">
            <div class="position-center">
                <form role="form" action="{{ url('/create') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Input nama_dosen">Nama Dosen</label>
                        <input type="text" name="nama_dosen" class="form-control" id="Input nama_dosen"
                            placeholder="nama_dosen">
                    </div>
                    <div class="form-group">
                        <label for="Inputjenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="Select1">
                            <option>Jenis Kelamin</option>
                            <option value="Laki - Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="Inputalamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="Inputalamat"
                            placeholder="alamat">
                    </div>
                    <div class="form-group">
                        <label for="Inputemail">Email</label>
                        <input type="text" name="email" class="form-control" id="Inputemail"
                            placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="Inputno_hp">No Hp</label>
                        <input type="number" name="no_hp" class="form-control" id="Inputno_hp"
                            placeholder="no_hp">
                    </div>
                   
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>

        </div>
    </section>
    </section>

@endsection
