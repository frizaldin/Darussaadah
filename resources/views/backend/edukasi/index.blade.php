<x-backend.layouts>
    <a href="{{url('edukasi/add')}}" class="btn btn-primary mb-5">Tambah Data</a> <br>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edukasi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Tahun</th>
                        <th>Jurusan</th>
                        <th>Lembaga</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($edukasi as $item)
                    <tr>
                        <td>{{$loop->iteration}}.</td>
                        <td>{{ $item->tahun }}</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>{{ $item->lembaga }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            <a href="{{url('edukasi/edit/' . $item->id)}}" class="btn btn-secondary">Edit</a>

                            <form action="{{url('edukasi/delete/' .$item->id)}}" method="post">
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
        <!-- <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </div> -->
    </div>
    <!-- /.card -->
</x-backend.layouts>