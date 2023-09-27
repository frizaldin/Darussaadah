<x-backend.layouts>
    <!-- Mengambil error session -->
    <div>
        @foreach($errors->all() as $error)
        <span class="text-danger">{{$error}}</span>
        @endforeach
    </div>

    <form action="{{url('about-us/update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$about->id}}">
        <div class="form-group">
            <label for="" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control mb-2" placeholder="Masukan Judul" value="{{$about->judul}}">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Subjudul</label>
            <input type="text" name="subjudul" class="form-control mb-2" placeholder="Masukan Subjudul" value="{{$about->subjudul}}">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control">{{$about->deskripsi}}</textarea>
        </div>
        <hr>
        <div class="form-group">
            <label for="" class="form-label">Umur</label>
            <input type="text" name="umur" class="form-control mb-2" placeholder="Masukan Umur" value="{{$about->umur}}">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Wilayah</label>
            <input type="text" name="wilayah" class="form-control mb-2" placeholder="Masukan Wilayah" value="{{$about->wilayah}}">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control mb-2" placeholder="Masukan alamat" value="{{$about->alamat}}">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Email</label>
            <input type="email" name="email" class="form-control mb-2" placeholder="Masukan email" value="{{$about->email}}">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control mb-2" placeholder="Masukan phone" value="{{$about->phone}}">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control mb-2" placeholder="Masukan pekerjaan" value="{{$about->pekerjaan}}">
        </div>

        <div class="form-group">
            <label for="" class="form-label">Foto</label>
            <input type="file" name="file" class="form-control mb-2" placeholder="Masukan File">
        </div>
        <img src="{{asset('/About/' . $about->file)}}" width="250" alt="">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-backend.layouts>