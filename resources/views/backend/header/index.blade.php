<x-backend.layouts>
    <!-- Mengambil error session -->
    <div>
        @foreach($errors->all() as $error)
        <span class="text-danger">{{$error}}</span>
        @endforeach
    </div>

    <form action="{{url('headers/update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$header->id}}">
        <div class="form-group">
            <label for="" class="form-label">Judul</label>
            <input type="text" name="title" class="form-control mb-2" placeholder="Masukan Judul" value="{{$header->title}}">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Subjudul</label>
            <input type="text" name="subtitle" class="form-control mb-2" placeholder="Masukan Subjudul" value="{{$header->subtitle}}">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control mb-2" placeholder="Masukan Nama" value="{{$header->name}}">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Photo</label>
            <input type="file" name="file" class="form-control mb-2" placeholder="Masukan File">
        </div>
        <img src="{{asset('/Header/' . $header->photo)}}" width="250" alt="">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-backend.layouts>