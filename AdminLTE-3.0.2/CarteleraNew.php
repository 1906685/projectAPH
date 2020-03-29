<?php include_once('layouts/header.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include_once('layouts/navbar.php'); ?>
    <!-- /.navbar -->

    <!-- inicio panel -->
    <?php include_once('layouts/panelEspecial.php'); ?>

    <!-- Inicio edicion -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Registro de Casas</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Casas</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- Inicio de tablas -->

      <div class="card">
        <div class="card-body">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>Casa</th>
                    <th>Propietario</th>
                    <th>Contacto</th>
                    <th>habitantes</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>147</td>
                    <td>Julian Andres Lopez </td>
                    <td>3115117674</td>
                    <td>3</td>
                  </tr>

                </tbody>
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>

        </div>
      </div>



      <!-- /.content -->
    </div>

    <!-- Fin edicion -->

    <?php include_once('layouts/footer.php'); ?>