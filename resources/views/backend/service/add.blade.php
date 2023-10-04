<x-backend.layouts>
    <!-- Mengambil error session -->
    <div>
        @foreach($errors->all() as $error)
        <span class="text-danger">{{$error}}</span>
        @endforeach
    </div>

    <div class="card p-3">
        <form action="{{url('services/create')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="" class="form-label">Judul</label>
                <input type="text" name="title" class="form-control mb-2" placeholder="Masukan title">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Subjudul</label>
                <input type="text" name="subtitle" class="form-control mb-2" placeholder="Masukan Subtitle">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Foto</label>
                <input type="file" name="file" class="form-control mb-2" placeholder="Masukan File">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-backend.layouts>