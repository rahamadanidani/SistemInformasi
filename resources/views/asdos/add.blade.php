@extends('asdos.indexx')
@section('title', 'Table')
@section('content')
    <section class="wrapper">
        <div class="panel-body">
            <div class="position-center">
                <form role="form" action="{{ url('/createasdos') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Input id_praktikum">Id Praktikum</label>
                        <input type="number" name="id_praktikum" class="form-control" id="Input id_praktikum"
                            placeholder="id_praktikum">
                    </div>
                    <div class="form-group">
                        <label for="Input nama_dosen">NIM</label>
                        <input type="text" name="nim" class="form-control" id="Input nim" placeholder="nim">
                    </div>
                    <div class="form-group">
                        <label for="Input nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="Input nama" placeholder="nama">
                    </div>
                    <div class="form-group">
                        <label for="Inputemail">Email</label>
                        <input type="text" name="email" class="form-control" id="Inputemail" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="Inputipk">IPK</label>
                        <input type="text" name="ipk" class="form-control" id="Inputipk" placeholder="ipk">
                    </div>

                    <div class="form-group">
                        <label for="Inputno_hp">No Hp</label>
                        <input type="number" name="no_hp" class="form-control" id="Inputno_hp" placeholder="no_hp">
                    </div>
                    <div class="form-group">
                        <label for="Inputstatus">Status</label>
                        <input type="text" name="status" class="form-control" id="Inputstatus" placeholder="status">
                    </div>

                    <div class="form-group">
                        <label for="Inputtranskrip_nilai">Transkrip Nilai</label>
                        <input type="file" accept="transkrip/pdf" name="transkrip_nilai" class="form-control" id="Inputtranskrip_nilai"
                            placeholder="transkrip_nilai">
                    </div>


                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>

        </div>
    </section>
    </section>

@endsection
