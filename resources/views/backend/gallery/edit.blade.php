<x-backend.layouts>
    <!-- Mengambil error session -->
    <div>
        @foreach($errors->all() as $error)
        <span class="text-danger">{{$error}}</span>
        @endforeach
    </div>

    <form action="{{url('galleries/update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$gallery->id}}">
        <input type="text" name="judul" class="form-control mb-2" placeholder="Masukan Judul" value="{{$gallery->judul}}">
        <input type="text" name="subjudul" class="form-control mb-2" placeholder="Masukan Subjudul" value="{{$gallery->subjudul}}">
        <input type="file" name="file" class="form-control mb-2" placeholder="Masukan File">
        <img src="{{asset('/Gallery/' . $gallery->file)}}" width="250" alt="">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-backend.layouts>