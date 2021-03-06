<?php $__env->startSection('content'); ?>

<?php if(session('Success')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo e(session('Success')); ?>

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
          <form class="" action="/siswa/<?php echo e($siswa->id); ?>/update" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

              <div class="form-group">
                  <label for="exampleInputEmail1">NAMA DEPAN</label>
                  <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="<?php echo e($siswa->nama_depan); ?>">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">NAMA BELAKANG</label>
                  <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="<?php echo e($siswa->nama_belakang); ?>">
              </div>
              <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose an Gender</label>
                  <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="L" <?php if($siswa->jenis_kelamin == 'L'): ?> selected <?php endif; ?>>Laki-Laki</option>
                    <option value="P" <?php if($siswa->jenis_kelamin == 'P'): ?> selected <?php endif; ?>>Perempuan</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Agama</label>
                  <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="<?php echo e($siswa->agama); ?>">
              </div>
              <div class="form-group">
                      <label for="exampleFormControlTextarea1">Alamat:</label>
                      <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1"><?php echo e($siswa->alamat); ?></textarea>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zilong/Desktop/Laravel-app/blog5.8-app/resources/views/siswa/edit.blade.php ENDPATH**/ ?>