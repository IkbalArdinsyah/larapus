@extends('admin')
@selection('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Penulis</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Penulis</div>
                <div class="card-body">
                    <form action="{{route('author store')}}" method="post">
                        @csrf
                    <div class="from-grup">
                        <label for="">Masukan Nama Penulis</label>
                        <label type="text" name="name" class="form-control" @error('name') is-invalid @enderror">
                            <span class="invalid-feddback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                        <button type="submit" class="btn btn-outline-warning">Simpan</button>
                    </div>
                 </form>
             </div>
         </div>
     </div>
   </div>
</div>
@endsection
