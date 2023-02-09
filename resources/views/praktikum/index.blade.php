@extends('praktikum.indexx')
@section('title', 'Table')
@section('content')
    <div class="chit-chat-layer1">
        <div class="chit-chat-layer1-left">
            <div class="work-progres">
                <div class="chit-chat-heading">
                    PRAKTIKUM
                </div>
                <div class="table-responsive">
                    <a href="/addpraktikum" class= "mb-3 btn btn-primary">Tambah</a>
                    <table class="table table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>NID</th>
                                <th>Kode Ruangan</th>
                                <th>Nama Praktikum</th>
                                <th>SKS</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->nid}}</td>
                                <td>{{ $d->kode_ruangan}}</td>
                                <td>{{ $d->nama_praktikum }}</td>
                                <td>{{ $d->sks }}</td>


                                <td>
                                    <a href="/detailspraktikum/{{ $d->id}}" class="btn btn-warning text-white mb-2">Edit</a>
                                    <a href="/deletepraktikum/{{ $d->id }}" class="btn btn-danger mb-2"> Delete </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <script>
                    $(document).ready(function(){
                        $('#myTable').DataTable();
                    });
                    </script>
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
