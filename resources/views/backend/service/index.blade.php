<x-backend.layouts>
    <a href="{{url('services/add')}}" class="btn btn-primary mb-5">Tambah Data</a> <br>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Service</h3>
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
                    @foreach($service as $item)
                    <tr>
                        <td>{{$loop->iteration}}.</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->subtitle }}</td>
                        <td>
                            <img src="{{asset('Service/' . $item->file)}}" width="200" alt="">
                        </td>
                        <td>
                            <a href="{{url('services/edit/' . $item->id)}}" class="btn btn-secondary">Edit</a>

                            <form action="{{url('services/delete/' .$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
    <!-- /.card -->
</x-backend.layouts>