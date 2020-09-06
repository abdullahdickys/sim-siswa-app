<?php $__env->startSection('content'); ?>
    
    <h1>Edit Data</h1>
      <?php if(session('Success')): ?>
          <div class="alert alert-success" role="alert">
            <?php echo e(session('Success')); ?>

          </div>
      <?php endif; ?>
        <div class="row">
          <div class="col-lg-12">
          <form class="" action="/siswa/<?php echo e($siswa->id); ?>/update" method="post">
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
              <button type="submit" class="btn btn-secondary">Save</button>
            </form>
        </div>
    </div>

   <!-- Modal -->
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/zilong/SYSTEM/Users/Tiger/Documents/Backup linux/Desktop/Laravel-app/blog5.8-app/resources/views/siswa/edit.blade.php ENDPATH**/ ?>