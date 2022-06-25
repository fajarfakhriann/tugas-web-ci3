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
                                                               action="<?= !empty($agama->id_agama) ? base_url('index.php/agama/update') : base_url('index.php/agama/insert'); ?>">
                                                               <div class="card-body">
                                                                        <div class="form-group">
                                                                                 <label for="Nama">Nama</label>
                                                                                 <input type="text" name="agama"
                                                                                          class="form-control" id="Nama"
                                                                                          placeholder="Agama"
                                                                                          value="<?= !empty($agama->agama) ? $agama->agama : ''; ?>">
                                                                        </div>
                                                                        <div class=" form-group">
                                                                                 <label for="Jenis Kelamin">Status</label>
                                                                                 <select class="form-control select2"
                                                                                          style="width: 100%;"
                                                                                          name="status">

                                                                                          <option disabled
                                                                                                   <?= !empty($agama->id_agama) ? '' : 'selected'; ?>>
                                                                                                   Pilih Status
                                                                                          </option>
                                                                                          <option value="1"
                                                                                                   <?= !empty($agama->id_agama)  ?  ($agama->status == 1 ? 'selected' : '') : ''; ?>>
                                                                                                   Aktif
                                                                                          </option>
                                                                                          <option value="0"
                                                                                                   <?= !empty($agama->id_agama)  ?  ($agama->status == 0 ? 'selected' : '') : ''; ?>>
                                                                                                   Nonaktif
                                                                                          </option>

                                                                                 </select>
                                                                        </div>
                                                               </div>

                                                               <div class="card-footer">
                                                                        <a href="<?= base_url('/index.php/agama'); ?>"
                                                                                 class="btn btn-secondary">Back</a>

                                                                                 <div class="float-right">

                                                                                          <button type="reset"
                                                                                                   class="btn btn-danger">Reset</button>

                                                                                          <button type="submit"
                                                                                                   class="btn btn-primary"
                                                                                                   name="submit"
                                                                                                   value="<?= !empty($agama->id_agama) ? $agama->id_agama : 'submit'; ?>"><?= !empty($agama->id_agama) ? 'Edit' : 'Submit'; ?></button>

                                                                                 </div>

                                                               </div>
                                                      </form>
                                             </div>
                                    </div>
                           </div><!-- /.container-fluid -->
         </section>
         <!-- /.content -->
</div>