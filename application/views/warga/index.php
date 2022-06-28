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
                                                      <li class="breadcrumb-item active">Warga</li>
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
                                                               <a href="<?= base_url('warga/tambah_data'); ?>"
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
                                                                                          <th>Nama</th>
                                                                                          <th>Agama</th>
                                                                                          <th>Nik</th>
                                                                                          <th>Alamat</th>
                                                                                          <th>Jenis Kelamin</th>
                                                                                          <th>Aksi</th>
                                                                                 </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                                 <?php

                                                                                 $no = 1;
                                                                                 foreach ($warga as $d) :
                                                                                 ?>

                                                                                 <tr>
                                                                                          <td><?= $no++; ?></td>
                                                                                          <td><?= $d->nama; ?></td>
                                                                                          <?php
                                                                                                   foreach ($agama as $row) {

                                                                                                            if ($row->id_agama === $d->id_agama) {
                                                                                                                     echo '<td>' . $row->agama . '</td>';
                                                                                                            }
                                                                                                   }
                                                                                                   if ($d->id_agama == 0) {
                                                                                                            echo '<td>Belum ada data</td>';
                                                                                                   }
                                                                                                   ?>
                                                                                          <td><?= $d->nik; ?></td>
                                                                                          <td><?= $d->alamat; ?></td>
                                                                                          <td><?= $d->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan'; ?>

                                                                                          </td>
                                                                                          <td>
                                                                                                   <a href="<?= base_url(); ?>/warga/edit/<?= $d->id; ?>"
                                                                                                            class="btn btn-warning">Edit</a>
                                                                                                   <a href="<?= base_url(); ?>/warga/hapus/<?= $d->id; ?>"
                                                                                                            class="btn btn-danger">Hapus</a>
                                                                                          </td>
                                                                                 </tr>

                                                                                 <?php


                                                                                 endforeach;
                                                                                 ?>
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