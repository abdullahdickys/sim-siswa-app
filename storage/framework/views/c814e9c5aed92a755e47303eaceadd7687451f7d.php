<?php $__env->startSection('content'); ?>
    

      <?php if(session('Success')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo e(session('Success')); ?>

      </div>
      <?php endif; ?>
        <div class="row">
            <div class="col-6">
                <h1>Hello Laravel</h1>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                        add data
                </button>
            </div>

                <br>
            <br>

            <table class="table table-hover">
                <tr>
                    <th>NAMA DEPAN</th>
                    <th>NAMA BELAKANG</th>
                    <th>JENIS KELAMIN</th>
                    <th>AGAMA</th>
                    <th>ALAMAT</th>
                    <th>Action</th>
                </tr>
                <?php $__currentLoopData = $data_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($siswa->nama_depan); ?></td>
                        <td><?php echo e($siswa->nama_belakang); ?></td>
                        <td><?php echo e($siswa->jenis_kelamin); ?></td>
                        <td><?php echo e($siswa->agama); ?></td>
                        <td><?php echo e($siswa->alamat); ?></td>
                        <td>
                            <a href="/siswa/<?php echo e($siswa->id); ?>/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/siswa/<?php echo e($siswa->id); ?>/delete" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure want delete?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
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
                        <form class="" action="/siswa/create" method="post">
                          <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label for="exampleInputEmail1">NAMA DEPAN</label>
                                <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">NAMA BELAKANG</label>
                                <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Choose an Gender</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                  <option value="L">Laki-Laki</option>
                                  <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Agama</label>
                                <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
                            </div>
                            <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Alamat:</label>
                                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1"></textarea>
                            </div>
                    </div>
                  <div class="modal-footer">
                <button type="submit" class="btn btn-secondary">Save</button>
              </form>
            </div>
        </div>
      </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/zilong/SYSTEM/Users/Tiger/Documents/Backup linux/Desktop/Laravel-app/blog5.8-app/resources/views/siswa/index.blade.php ENDPATH**/ ?>