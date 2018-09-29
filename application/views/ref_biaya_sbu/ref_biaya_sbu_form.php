<section class='content-header'>
    <h1>
        Standar Biaya SBU
    </h1>
    <ol class='breadcrumb'>
        <li><a href='dashboard'><i class='fa fa-dashboard'></i>Home</a></li>
        <li><a href='#'><i class='fa fa-navicon'></i>Manajemen Referensi</a></li>
        <li class='active'>Standar Biaya SBU</li>
    </ol>
</section> 
<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class="box box-<?php echo $style_aksi ?>">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="<?php echo $icon ?>"></i> <b><?php echo $label_aksi ?></b> <small>Data</small></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" action="<?php echo $action; ?>" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="biayaSbuKode" class="col-sm-2 control-label">Kode</label>
                      <div class="col-sm-5">
                        <input type="hidden" name="biayaSbuId" value="<?php echo $biayaSbuId; ?>" /> 
                        <input type="text" class="form-control" name="biayaSbuKode" id="biayaSbuKode" placeholder="Kode Biaya SBU" value="<?php echo $biayaSbuKode; ?>" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="biayaSbuNama" class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="biayaSbuNama" id="biayaSbuNama" placeholder="Nama Biaya SBU" value="<?php echo $biayaSbuNama; ?>" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="biayaSbuMakId" class="col-sm-2 control-label">MAK</label>
                      <div class="col-sm-5">
                        <?php echo form_error('biayaSbuMakId') ?>
                        <?php echo cmb_dinamis('biayaSbuMakId', 'ref_mak', 'makNama', 'makId', $biayaSbuMakId) ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="biayaSbuSumberdanaId" class="col-sm-2 control-label">Sumber Dana</label>
                      <div class="col-sm-5">
                        <?php echo form_error('biayaSbuSumberdanaId') ?>
                        <?php echo cmb_dinamis('biayaSbuSumberdanaId', 'ref_sumberdana', 'sumberdanaNama', 'sumberdanaId', $biayaSbuSumberdanaId) ?>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                    <div class="col-sm-10 col-sm-offset-2">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button> 
                      <a href="<?php echo site_url('biayasbu') ?>" class="btn btn-warning"><i class="fa fa-reply-all"></i> Batal</a>
                    </div>
                  </div>
                </form>
          </div>
          </div><!-- /.row -->
        </section><!-- /.content -->