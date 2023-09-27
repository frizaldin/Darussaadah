<x-backend.layouts>
    <!-- Mengambil error session -->
    <div>
        @foreach($errors->all() as $error)
        <span class="text-danger">{{$error}}</span>
        @endforeach
    </div>

    <form action="{{url('user/create')}}" method="POST">
        @csrf

        <input type="text" name="name" class="form-control mb-2" placeholder="Masukan Nama Anda">
        <input type="text" name="email" class="form-control mb-2" placeholder="Masukan Email Anda">
        <input type="text" name="password" class="form-control mb-2" placeholder="Masukan Password Anda">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-backend.layouts>