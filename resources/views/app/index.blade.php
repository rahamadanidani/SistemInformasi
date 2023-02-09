@extends('index.index')
@section('title', 'Table')
@section('content')
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
    $('#example').DataTable();
});
</script>
    <div class="chit-chat-layer1">
        <div class="chit-chat-layer1-left">
            <div class="work-progres">
                <div class="chit-chat-heading">
                    DATA DOSEN
                </div>
                <div class="table-responsive">
                    <br><a href="/add" class= "mb-3 btn btn-primary">Tambah</a>
                    <table class="table table-hover" id="example">
                        <thead>
                            <tr>
                                <th>nid</th>
                                <th>Nama Dosen</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                                <td>{{ $d->nid }}</td>
                                <td>{{ $d->nama_dosen }}</td>
                                <td>{{ $d->jenis_kelamin }}</td>
                                <td>{{ $d->alamat }}</td>
                                <td>{{ $d->email }}</td>
                                <td>{{ $d->no_hp}}</td>
                                <td>
                                    <a href="/details/{{ $d->nid}}" class="btn btn-warning text-white mb-2">Edit</a>
                                    <a href="/delete/{{ $d->nid }}" class="btn btn-danger mb-2"> Delete </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
               
            </div>
        </div>
        <div class="col-md-6 chit-chat-layer1-rit">
            <div class="geo-chart">
                <section id="charts1" class="charts">
                    <div class="wrapper-flex">

                        <table id="myTable" class="geoChart tableChart data-table col-table" style="display:none;">
                            <caption>Student Nationalities Table</caption>
                            <tr>
                                <th scope="col" data-type="string">Country</th>
                                <th scope="col" data-type="number">Number of Students</th>
                                <th scope="col" data-role="annotation">Annotation</th>
                            </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

@endsection
