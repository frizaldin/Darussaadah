<x-backend.layouts>
    <!-- Mengambil error session -->
    <div>
        @foreach($errors->all() as $error)
        <span class="text-danger">{{$error}}</span>
        @endforeach
    </div>

    <div class="card p-3">
        <form action="{{url('skill/create')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control mb-2" placeholder="Masukan Judul">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Persen</label>
                <input type="text" name="persen" class="form-control mb-2" placeholder="Masukan persen">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-backend.layouts>