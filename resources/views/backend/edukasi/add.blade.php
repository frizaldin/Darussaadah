<x-backend.layouts>
    <!-- Mengambil error session -->
    <div>
        @foreach($errors->all() as $error)
        <span class="text-danger">{{$error}}</span>
        @endforeach
    </div>

    <div class="card p-3">
        <form action="{{url('edukasi/create')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="" class="form-label">Tahun</label>
                <input type="text" name="tahun" class="form-control mb-2" placeholder="Masukan tahun">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control mb-2" placeholder="Masukan jurusan">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Lembaga</label>
                <input type="text" name="lembaga" class="form-control mb-2" placeholder="Masukan lembaga">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control mb-2" placeholder="Masukan deskripsi">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-backend.layouts>