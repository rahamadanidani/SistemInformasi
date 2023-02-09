@extends('asdos.indexx')
@section('title', 'Table')
@section('content')
    <div class="chit-chat-layer1">
        <div class="chit-chat-layer1-left">
            <div class="work-progres">
                <div class="chit-chat-heading">
                    DATA ASDOS
                </div>
                <div class="table-responsive">
                    <a href="/tambah" class= "mb-3 btn btn-primary">Tambah</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id Asdos</th>
                                <th>Id Praktikum</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>IPK</th>
                                <th>Transkrip Nilai</th>
                                <th>No Hp</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                                <td>{{ $d->id_asdos }}</td>
                                <td>{{ $d->id_praktikum}}</td>
                                <td>{{ $d->nim }}</td>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->email }}</td>
                                <td>{{ $d->ipk }}</td>
                                <td>{{ $d->transkrip_nilai }}</td>
                                <td>{{ $d->no_hp}}</td>
                                <td>{{ $d->status }}</td>

                                <td>
                                    <a href="/detaill/{{ $d->id_asdos}}" class="btn btn-warning text-white mb-2">Edit</a>
                                    <a href="/hapus/{{ $d->id_asdos }}" class="btn btn-danger mb-2"> Delete </a>
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
