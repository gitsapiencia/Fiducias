
<?=  $this->extend('templates/admin_template') ?> 
<?=  $this->section('content') ?> 



    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Fiducias</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <p>Contratos</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-keypad"></i>
              </div>
              <a href="<?= base_url('contratos') ?>" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <p>Cuentas de ahorro / FIC</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-keypad"></i>
              </div>
              <a href="<?= base_url('cuentas') ?>" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          
        </div>


        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                <div class="inner">
                    <p>Movimiento fiducia</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-compose"></i>
                </div>
                <a href="<?= base_url('movfiducia') ?>" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <p>Beneficiarios por contrato</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= base_url('beneficiarios') ?>" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <p>Conciliación</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= base_url('concilia') ?>" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

        <!-- /.row (main row) -->



      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
  







<?=  $this->endSection() ?> 

