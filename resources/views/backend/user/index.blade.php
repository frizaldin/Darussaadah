<x-backend.layouts>
    <a href="{{url('user/add')}}" class="btn btn-primary mb-5">Tambah Data</a> <br>

    <!-- Perulangan data -->
    @foreach($orang as $item)
    Nama : {{ $item->name }} <br>
    Email : {{ $item->email }} <br>
    Password : {{ $item->password }} <br>

    <a href="{{url('user/edit/' . $item->id)}}" class="btn btn-secondary">Edit</a>

    <form action="{{url('user/delete/' .$item->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
    <hr>
    @endforeach

</x-backend.layouts>