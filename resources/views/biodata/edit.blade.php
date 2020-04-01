@extends("layout")

@section("content")
    <form action="{{ route('biodata.update', ['biodatum' => $data->id]) }}" method="POST" class="form-horizontal">
        
        @csrf

        @method("PUT")
        
        <div class="form-group">
            <label class="control-label">Nama</label>
            <input type="text" class="form-control" name="name" value="{{ $data->name }}">
        </div>
        <div class="form-group">
            <label class="control-label">NIM</label>
            <input type="text" class="form-control" name="nim" value="{{ $data->nim }}">
        </div>
        <div class="form-group">
            <label class="control-label">Aalamat</label>
            <textarea name="address" rows="5" class="form-control">{{ $data->address }}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="{{ route('biodata.index') }}" class="btn btn-danger">
                Batal
            </a>
        </div>
    </form>
@endsection