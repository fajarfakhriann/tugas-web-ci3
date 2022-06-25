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
                                             <!-- <ol class="breadcrumb float-sm-right">
                                                      <li class="breadcrumb-item"><a href="#">Warga</a></li>
                                                      <li class="breadcrumb-item active">Dashboard v1</li>
                                             </ol> -->
                                    </div><!-- /.col -->
                           </div><!-- /.row -->
                  </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->

         <!-- Main content -->
         <section class="content">
                  <div class="container-fluid">

                           <div class="row">
                                    <div class="col-md-12">

                                             <div class="card">



                                                      <form method="POST"
                                                               action="<?= !empty($warga->id) ? base_url('index.php/warga/update') : base_url('index.php/warga/insert'); ?>">
                                                               <div class="card-body">
                                                                        <div class="form-group">
                                                                                 <label for="Nama">Nama</label>
                                                                                 <input type="text" name="nama"
                                                                                          class="form-control" id="Nama"
                                                                                          placeholder="Nama"
                                                                                          value="<?= !empty($warga->nama) ? $warga->nama : ''; ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                                 <label for="Agama">Agama</label>
                                                                                 <select class="form-control select2"
                                                                                          name="id_agama"
                                                                                          style="width: 100%;">
                                                                                          <option disabled
                                                                                                   <?= !empty($warga->id_agama) ? '' : 'selected'; ?>>
                                                                                                   Pilih Agama
                                                                                          </option>

                                                                                          <?php
                                                                                          foreach ($agama as $row) :
                                                                                          ?>
                                                                                          <option value="<?= $row->id_agama; ?>"
                                                                                                   <?= !empty($warga->id_agama) ? ($row->id_agama == $warga->id_agama ? 'selected' : '') : ''; ?>>
                                                                                                   <?= $row->agama; ?>
                                                                                          </option>

                                                                                          <?php endforeach; ?>
                                                                                 </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                 <label for="Nik">Nik</label>
                                                                                 <input type="text" name="nik"
                                                                                          class="form-control" id="nik"
                                                                                          placeholder="Nik"
                                                                                          value="<?= !empty($warga->nik) ? $warga->nik : ''; ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                                 <label for="Alamat">Alamat</label>
                                                                                 <textarea class="form-control"
                                                                                          placeholder="Alamat"
                                                                                          name="alamat"><?= !empty($warga->alamat) ? $warga->alamat : ''; ?></textarea>
                                                                        </div>
                                                                        <div class=" form-group">
                                                                                 <label for="Jenis Kelamin">Jenis
                                                                                          Kelamin</label>
                                                                                 <select class="form-control select2"
                                                                                          style="width: 100%;"
                                                                                          name="jenis_kelamin">
                                                                                          <option disabled
                                                                                                   <?= !empty($warga->jenis_kelamin) ? '' : 'selected'; ?>>
                                                                                                   Pilih Jenis Kelamin
                                                                                          </option>
                                                                                          <option value="L"
                                                                                                   <?= !empty($warga->jenis_kelamin)  ?  ($warga->jenis_kelamin == 'L' ? 'selected' : '') : ''; ?>>
                                                                                                   Laki-Laki
                                                                                          </option>
                                                                                          <option value="P"
                                                                                                   <?= !empty($warga->jenis_kelamin)  ?  ($warga->jenis_kelamin == 'P' ? 'selected' : '') : ''; ?>>
                                                                                                   Perempuan
                                                                                          </option>

                                                                                 </select>
                                                                        </div>
                                                               </div>

                                                               <div class="card-footer">
                                                                        <a href="<?= base_url('/'); ?>"
                                                                                 class="btn btn-secondary">Back</a>

                                                                                 <div class="float-right">

                                                                                          <button type="reset"
                                                                                                   class="btn btn-danger">Reset</button>

                                                                                          <button type="submit"
                                                                                                   class="btn btn-primary"
                                                                                                   name="submit"
                                                                                                   value="<?= !empty($warga->id) ? $warga->id : 'submit'; ?>"><?= !empty($warga->id) ? 'Edit' : 'Submit'; ?></button>

                                                                                 </div>

                                                               </div>
                                                      </form>
                                             </div>
                                    </div>
                           </div><!-- /.container-fluid -->
         </section>
         <!-- /.content -->
</div>