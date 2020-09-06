<?php $__env->startSection('content'); ?>

<?php if(session('Success')): ?>
  <div class="col-md-12">
    <div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <?php echo e(session('Success')); ?>

    </div>
  </div>
<?php endif; ?>

  
  <?php if($errors->has('nama_depan')): ?>
  <div class="col-md-12">
      <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <li><span class="help-block"><?php echo e($errors->first('nama_depan')); ?> </span></li><br>
      </div>
    </div>
  <?php elseif($errors->has('email')): ?>
  <div class="col-md-12">
      <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
              <li><span class="help-block"><?php echo e($errors->first('email')); ?> </span></li><br>
          </div>
    </div>
  <?php elseif($errors->has('jenis_kelamin')): ?>
  <div class="col-md-12">
      <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
              <li><span class="help-block"><?php echo e($errors->first('jenis_kelamin')); ?> </span></li><br>
          </div>
    </div>
  <?php elseif($errors->has('agama')): ?>
  <div class="col-md-12">
      <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
              <li><span class="help-block"><?php echo e($errors->first('agama')); ?> </span></li><br>
          </div>
    </div>
  <?php elseif($errors->has('nama_depan') && ('email') && ('jenis_kelamin') && ('agama')): ?>
  <div class="col-md-12">
      <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
              <li><span class="help-block"><?php echo e($errors->first('nama_depan')); ?> </span></li><br>
              <li><span class="help-block"><?php echo e($errors->first('email')); ?> </span></li><br>
              <li><span class="help-block"><?php echo e($errors->first('jenis_kelamin')); ?> </span></li><br>
              <li><span class="help-block"><?php echo e($errors->first('agama')); ?> </span></li><br>
          </div>
    </div>
  <?php endif; ?>



<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Siswa</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active"><a href="/siswa" style="color: #636b6f">Data Siswa</a></li>
        </ol>
      </div>
    </div>
  </div>

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD DATA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
                    <div class="modal-body">
                        <form class="" action="/siswa/create" method="post">
                          <?php echo e(csrf_field()); ?>

                            <div class="form-group <?php echo e($errors->has('nama_depan') ? ' has error' : ''); ?> ">
                                <label for="exampleInputEmail1">NAMA DEPAN</label>
                            <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="<?php echo e(old('nama_depan')); ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">NAMA BELAKANG</label>
                            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="<?php echo e(old('nama_belakang')); ?>">
                            </div>

                            <div class="form-group <?php echo e($errors->has('email') ? ' has error' : ''); ?> ">
                                <label for="exampleInputEmail1">EMAIL</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" value="<?php echo e(old('email')); ?>">
                            </div>

                            <div class="form-group <?php echo e($errors->has('jenis_kelamin') ? ' has error' : ''); ?> ">
                                <label for="exampleFormControlSelect1">Choose an Gender</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                  <option value="L"<?php echo e((old('jenis_kelamin') == 'L') ? ' selected' : ''); ?>>Laki-Laki</option>
                                  <option value="P"<?php echo e((old('jenis_kelamin') == 'P') ? ' selected' : ''); ?>>Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group <?php echo e($errors->has('agama') ? ' has-error' : ''); ?>">
                                <label for="exampleInputEmail1">Agama</label>
                            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="<?php echo e(old('agama')); ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat:</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1"><?php echo e(old('alamat')); ?></textarea>
                            </div>

                      </form>
                    </div>
                  <div class="modal-footer">
                <button type="submit" class="btn btn-secondary">Save</button>
            </div>
          </div>
        </div>
      </div>
    
  <!-- /.container-fluid -->
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                        <b>ADD DATA</b>
                    </button>
                </h3>

                <div class="card-tools">
                  <form class="input-group input-group-sm" style="width: 150px;" method="GET" action="/siswa">
                    <input type="search" name="cari" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append" >
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>NAMA DEPAN</th>
                        <th>NAMA BELAKANG</th>
                        <th>JENIS KELAMIN</th>
                        <th>AGAMA</th>
                        <th>ALAMAT</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $data_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($siswa->id); ?></td>
                            <td><?php echo e($siswa->nama_depan); ?></td>
                            <td><?php echo e($siswa->nama_belakang); ?></td>
                            <td><?php echo e($siswa->jenis_kelamin); ?></td>
                            <td><?php echo e($siswa->agama); ?></td>
                            <td><?php echo e($siswa->alamat); ?></td>
                            <td>  
                                <a href="/siswa/<?php echo e($siswa->id); ?>/profile" class="btn btn-info btn-sm"><b>View</b></a>
                                <a href="/siswa/<?php echo e($siswa->id); ?>/edit" class="btn btn-warning btn-sm"><b>Edit</b></a>
                                <a href="/siswa/<?php echo e($siswa->id); ?>/delete" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure want delete?')"><b>Delete</b></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
              <!-- /.card-body -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zilong/Desktop/Laravel-app/blog5.8-app/resources/views/siswa/index.blade.php ENDPATH**/ ?>