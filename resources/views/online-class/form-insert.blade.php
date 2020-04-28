@extends("main")

@section("title", "Tambah Kelas")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <form action="{{route("online-class.store")}}" method="post" id="form-insert-kelas">
                @csrf
                <div class="form-group @error('namaKelas') is-invalid @enderror">
                    <label for="namaKelas">Nama Kelas</label>
                    <input type="text" class="form-control" id="namaKelas" name="namaKelas" required>
                    <small id="kelasHelp" class="form-text text-muted">Masukkan nama kelas yang diinginkan</small>
                    @error('namaKelas')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group @error('shortDesc') is-invalid @enderror">
                    <label for="shortDesc">Deskripsi Singkat</label>
                    <input type="text" class="form-control" id="shortDesc" name="shortDesc">
                    <small id="sdescHelp" class="form-text text-muted">Masukkan deskripsi secara singkat</small>
                    @error('shortDesc')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group @error('desc') is-invalid @enderror">
                    <label for="longDesc">Deskripsi Lengkap</label>
                    <textarea class="form-control" id="longDesc" name="longDesc" rows="3"
                              placeholder="Masukkan deskripsi secara lengkap"></textarea>
                    @error('desc')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

