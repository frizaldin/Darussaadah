<x-backend.layouts>
    <a href="{{url('galleries/add')}}" class="btn btn-primary mb-5">Tambah Data</a> <br>
    <div class="card">
        <div class="card-header">

            <div class="row">
                <div class="col-md-6">
                    <h3 class="card-title">Gallery</h3>
                </div>

                <div class="col-md-6">
                    <form action="" method="GET">
                        @csrf
                        <input type="text" name="keyword" class="form-control" placeholder="Cari Nama">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Judul</th>
                        <th>Subjudul</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gallery as $item)
                    <tr>
                        <td>{{$loop->iteration}}.</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->subjudul }}</td>
                        <td>
                            <img src="{{asset('Gallery/' . $item->file)}}" width="200" alt="">
                        </td>
                        <td>
                            <a href="{{url('galleries/edit/' . $item->id)}}" class="btn btn-secondary">Edit</a>

                            <form action="{{url('galleries/delete/' .$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Arahkan pagination pada folder vendor/pagination/custom.blade.php -->
        </div>
        {{ $gallery->links('vendor.pagination.custom') }}

    </div>
    <!-- /.card -->
</x-backend.layouts>