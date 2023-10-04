<x-backend.layouts>
    <!-- Mengambil error session -->
    <div>
        @foreach($errors->all() as $error)
        <span class="text-danger">{{$error}}</span>
        @endforeach
    </div>

    <form action="{{url('edukasi/update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$skill->id}}">
        <input type="text" name="tahun" class="form-control mb-2" placeholder="Masukan tahun" value="{{$skill->tahun}}">
        <input type="text" name="jurusan" class="form-control mb-2" placeholder="Masukan jurusan" value="{{$skill->jurusan}}">
        <input type="text" name="lembaga" class="form-control mb-2" placeholder="Masukan lembaga" value="{{$skill->lembaga}}">
        <input type="text" name="deskripsi" class="form-control mb-2" placeholder="Masukan deskripsi" value="{{$skill->deskripsi}}">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-backend.layouts>