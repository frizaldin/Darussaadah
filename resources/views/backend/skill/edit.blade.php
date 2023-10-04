<x-backend.layouts>
    <!-- Mengambil error session -->
    <div>
        @foreach($errors->all() as $error)
        <span class="text-danger">{{$error}}</span>
        @endforeach
    </div>

    <form action="{{url('skill/update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$skill->id}}">
        <input type="text" name="judul" class="form-control mb-2" placeholder="Masukan Judul" value="{{$skill->judul}}">
        <input type="text" name="persen" class="form-control mb-2" placeholder="Masukan Persen" value="{{$skill->persen}}">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-backend.layouts>