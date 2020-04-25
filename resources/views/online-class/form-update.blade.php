@extends("main")

@section("title", "Update Kelas")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <form action="{{route("online-class.update", ["online_class" => $class->id])}}" method="post"
                  id="form-update-kelas">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="namaKelas">Nama Kelas</label>
                    <input type="text" class="form-control" id="namaKelas" name="namaKelas"
                           value="{{old("namaKelas") !="" ? old("namaKelas") : $class->nama_kelas}}">
                    <small id="kelasHelp" class="form-text text-muted">Masukkan nama kelas yang diinginkan</small>
                </div>
                <div class="form-group">
                    <label for="shortDesc">Deskripsi Singkat</label>
                    <input type="text" class="form-control" id="shortDesc" name="shortDesc"
                           value="{{old("shortDesc") !="" ? old("shortDesc") : $class->shortDesc}}">
                    <small id="sdescHelp" class="form-text text-muted">Masukkan deskripsi secara singkat</small>
                </div>
                <div class="form-group">
                    <label for="longDesc">Deskripsi Lengkap</label>
                    <textarea class="form-control" id="longDesc" name="longDesc" rows="3"
                              placeholder="Masukkan deskripsi secara lengkap">{{old("longDesc") != "" ? old("longDesc") : $class->desc}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

