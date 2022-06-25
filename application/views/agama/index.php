<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
                  <div class="container-fluid">
                           <div class="row mb-2">
                                    <div class="col-sm-6">
                                             <h1 class="m-0 text-dark"><?= $title; ?></h1>
                                    </div><!-- /.col -->
                                    <div class="col-sm-6">
                                             <ol class="breadcrumb float-sm-right">
                                                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                      <li class="breadcrumb-item active">Agama</li>
                                             </ol>
                                    </div><!-- /.col -->
                           </div><!-- /.row -->
                  </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->

         <!-- Main content -->
         <section class="content">
                  <div class="container-fluid">
                           <!-- Small boxes (Stat box) -->
                           <!-- /.row -->
                           <!-- Main row -->
                           <div class="row">
                                    <div class="col-md-12">
                                             <div class="card">


                                                      <div class="card-header">
                                                               <a href="<?= base_url('index.php/agama/tambah_data'); ?>"
                                                                        class="btn btn-success float-right">Tambah
                                                               </a>
                                                      </div>

                                                      <div class="card-body">

                                                               <?php
                                                               if (!empty($this->session->flashdata('success'))) {
                                                               ?>
                                                               <div class="alert alert-success" role="alert">
                                                                        <?= $this->session->flashdata('success'); ?>
                                                               </div>
                                                               <?php }; ?>

                                                               <?php
                                                               if (!empty($this->session->flashdata('error'))) {
                                                               ?>
                                                               <div class="alert alert-danger" role="alert">
                                                                        <?= $this->session->flashdata('error'); ?>
                                                               </div>
                                                               <?php }; ?>
                                                               <table id="example1"
                                                                        class="table table-bordered table-hover">
                                                                        <thead>
                                                                                 <tr>
                                                                                          <th>No</th>
                                                                                          <th>Agama</th>
                                                                                          <th>Status</th>
                                                                                          <th>Aksi</th>
                                                                                 </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                                 <?php

                                                                                 $no = 1;
                                                                                 foreach ($agama as $d) :


                                                                                 ?>

                                                                                 <tr>
                                                                                          <td><?= $no++; ?></td>
                                                                                          <td><?= $d->agama; ?></td>
                                                                                          <td><?= $d->status == true ? 'Aktif' : 'Tidak Aktif'; ?>
                                                                                          </td>
                                                                                          <td>
                                                                                                   <a href="<?= base_url(); ?>index.php/agama/edit/<?= $d->id_agama; ?>"
                                                                                                            class="btn btn-warning">Edit</a>
                                                                                                   <a href="agama/hapus/<?= $d->id_agama; ?>"
                                                                                                            class="btn btn-danger">Hapus</a>
                                                                                          </td>
                                                                                 </tr>

                                                                                 <?php endforeach; ?>
                                                                        </tbody>
                                                               </table>
                                                      </div>

                                             </div>
                                    </div>
                           </div>
                           <!-- /.row (main row) -->
                  </div><!-- /.container-fluid -->
         </section>
         <!-- /.content -->


</div>