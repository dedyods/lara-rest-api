<?php $__env->startSection('title','Data Mahasiswa'); ?>
<?php $__env->startSection('content'); ?>
<div class="card shadow mb-4">
            <div class="card-header py-3">
               
                   <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Tambah Data</a>
                 
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Mahasiswa</th>
                      <th>NPM</th>
                      <th>Program Studi</th>
                    
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Dedy Setiawan</td>
                      <td>04018075</td>
                      <td>Manajemen Informatika</td>
                      
                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

         

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp72\htdocs\tesis\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>