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
              <h1 class="m-0 text-dark">Listado de Vehículos</h1>
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
              <table class="table table-bordered table-sm">
                <thead class="thead-dark">
                <h4 class="m-0 text-dark">Carros</h4>
                  <tr>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Apartamento</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>ABC666</td>
                    <td>Audi </td>
                    <td>Negro</td>
                    <td>101</td>
                  </tr>

                </tbody>
              </table>

              <div class="box-body no-padding">
              <table class="table table-bordered table-sm">
                <thead class="thead-dark">
                <h4 class="m-0 text-dark">Motos</h4>
                <tr>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Apartamento</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>XYZ-12A</td>
                    <td>Harley Davidson</td>
                    <td>Negra</td>
                    <td>101</td>
                  </tr>

                </tbody>
              </table>
              <div class="box-body no-padding">
              <table class="table table-bordered table-sm">
                <thead class="thead-dark">
                <h4 class="m-0 text-dark">Bicicletas</h4>
                  <tr>
                    <th>Serie</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Apartamento</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>123456</td>
                    <td>Specialized</td>
                    <td>Negra</td>
                    <td>101</td>
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