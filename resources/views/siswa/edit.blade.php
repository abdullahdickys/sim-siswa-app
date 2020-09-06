@extends('layouts.master')
@section('content')

@if(session('Success'))
    <div class="alert alert-success" role="alert">
      {{session('Success')}}
    </div>
@endif

 <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">edit data</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

       <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
          <form class="" action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
              <div class="form-group">
                  <label for="exampleInputEmail1">NAMA DEPAN</label>
                  <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">NAMA BELAKANG</label>
                  <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
              </div>
              <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose an Gender</label>
                  <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                    <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Agama</label>
                  <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}">
              </div>
              <div class="form-group">
                      <label for="exampleFormControlTextarea1">Alamat:</label>
                      <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1">{{$siswa->alamat}}</textarea>
              </div>
              <div class="form-group">
                      <label for="exampleFormControlTextarea1">Avatar</label>
                      <input type="file" name="avatar">
              </div>
              <button type="submit" class="btn btn-secondary">Save</button>
            </form>
        </div>
    </div>
  </div>
  </div>
</div>
</div>
</div>

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
                    <div class="modal-body">

                    </div>
                  <div class="modal-footer">

            </div>
        </div>
      </div>
    </div>
@endsection
