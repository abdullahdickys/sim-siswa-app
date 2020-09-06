@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Profile</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">User Profile</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->


<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    @if(session('Success'))
      <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{session('Success')}}
      </div>
    @endif
    
    @if($errors->has('nilai'))
    <div class="col-md-12">
      <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <span class="help-block">{{$errors->first('nilai')}} </span>
      </div>
    </div>
    @endif

    @if(session('Error'))
      <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{session('Error')}}
      </div>
    @endif
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle"
                   src="{{$siswa->getAvatar()}}"
                   alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">{{$siswa->nama_depan}}</h3>

            <p class="text-muted text-center">Software Engineer</p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Mata Pelajaran :</b> <a class="float-right">{{$siswa->mapel->count()}}</a>
              </li>
              <li class="list-group-item">
                <b>Following</b> <a class="float-right">543</a>
              </li>
              <li class="list-group-item">
                <b>Friends</b> <a class="float-right">13,287</a>
              </li>
            </ul>

            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">About Me</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> Education</strong>

            <p class="text-muted">
              B.S. in Computer Science from the University of Tennessee at Knoxville
            </p>

            <hr>

            <strong><i class="fas fa-map-marker-alt mr-1"></i> Home</strong>

            <p class="text-muted">{{$siswa->alamat}}</p>

            <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

            <p class="text-muted">
              <span class="tag tag-danger">UI Design</span>
              <span class="tag tag-success">Coding</span>
              <span class="tag tag-info">Javascript</span>
              <span class="tag tag-warning">PHP</span>
              <span class="tag tag-primary">Node.js</span>
            </p>

            <hr>

            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
     <div class="col-md-9">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
                    <b>ADD NILAI</b>
                  </button>
                </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>CODE</th>
                      <th>NAMA</th>
                      <th>SEMESTER</th>
                      <th>NILAI</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($siswa->mapel as $mapel)
                    <tr>
                      <td>{{$mapel->kode}}</td>
                      <td>{{$mapel->nama}}</td>
                      <td>{{$mapel->semester}}</td>
                      <td><span class="tag tag-success">{{$mapel->pivot->nilai}}</span></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Bar Chart
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="chartNilai"></div>
              </div>
              <!-- /.card-body-->
            </div>
          </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
{{-- </div> --}}
<!-- ./wrapper -->


<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="/siswa/{{$siswa->id}}/addnilai" method="post">
          {{csrf_field()}}
            <div class="form-group">
              <label for="mapel">Mata Pelajaran</label>
              <select class="form-control" name="mapel" id="mapel">
                @foreach ($matapelajaran as $mp)
                  <option value="{{$mp->id}}">{{$mp->nama}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group {{$errors->has('nilai') ? ' has error' : '' }} ">
                <label for="exampleInputEmail1">NILAI</label>
            <input name="nilai" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nilai" value="{{old('nilai')}}">
              @if ($errors->has('nilai'))
                <span class="help-block">{{$errors->first('nilai')}}</span>
              @endif
            </div>
         </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
       </form>
      </div>
    </div>
  </div>
</div>
@stop

@section('footer')
<!-- ChartJS -->
<script src="{{asset('plugins/highcharts.js')}}"></script>
<script>
Highcharts.chart('chartNilai', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Raport Nilai Siswa'
    },
    xAxis: {
        categories: {!!json_encode($categories)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Nilai'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'NILAI',
        data: {!!json_encode($data)!!}

    }]
});
</script>
@stop