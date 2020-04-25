@extends("main")

@section("title", "Class List")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="isi-content">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama Kelas</th>
                        <th scope="col">Deskripsi Singkat</th>
                        <th scope="col">Deskripsi Lanjut</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($classes as $keyClass => $valueClass)
                        <tr>
                            <td>{{$valueClass->nama_kelas}}</td>
                            <td>{{$valueClass->shortDesc}}</td>
                            <td>{{$valueClass->desc}}</td>
                            <td>
                                <a href="{{route("online-class.edit",["online_class"=>$valueClass->id])}}"
                                   data-toggle="tooltip"
                                   title="UBAH DATA" class="btn btn-warning">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route("online-class.destroy",["online_class"=>$valueClass->id])}}"
                                   data-method="delete"
                                   data-confirm="are you sure?" data-token="{{csrf_token()}}"
                                   title="HAPUS DATA" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{route("online-class.create")}}" class="btn btn-primary float-left">Tambah Kelas</a>
            </div>
        </div>
    </div>
@endsection
