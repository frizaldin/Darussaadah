<x-backend.layouts>
    <!-- Mengambil error session -->
    <div>
        @foreach($errors->all() as $error)
        <span class="text-danger">{{$error}}</span>
        @endforeach
    </div>

    <form action="{{url('services/update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$service->id}}">
        <input type="text" name="title" class="form-control mb-2" placeholder="Masukan title" value="{{$service->title}}">
        <input type="text" name="subtitle" class="form-control mb-2" placeholder="Masukan Subtitle" value="{{$service->subtitle}}">
        <input type="file" name="file" class="form-control mb-2" placeholder="Masukan File">
        <img src="{{asset('/Service/' . $service->file)}}" width="250" alt="">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-backend.layouts>