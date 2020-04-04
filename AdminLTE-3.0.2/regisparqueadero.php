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
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Registro de vehículo</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Registro</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="card">

        <div class="card-body">
        <form action="">

            
               
               <button type="button" class="btn btn-outline-dark col-sm-12 d-flex justify-content-between align-items-center my-3" data-toggle="collapse" data-target="#economicActivity" aria-expanded="false" aria-controls="economicActivity">
                   <i class="fas fa-chevron-down"></i>Ingresar Vehículo<i class="fas fa-chevron-down"></i>
                 </button>
               
               <div class="row collapse" id="economicActivity">
                   
                   <div class="card card-body">

                       <div class="row">
                           <div class="col-sm-2">
                               <label  for="">Tipo</label>
                           </div>
                           <div class="col-sm-4" >
                               <Select class="form-control" id="">
                                  <option>Seleccione</option>
                                  <option>Carro</option>
                                  <option>Moto</option>
                                  <option>Bicicleta</option>
                               </Select>
                           </div>
                           <div class="col-sm-2">
                               <label  for="">Placa/Serie</label>
                           </div>
                           <br>
                           <div class="col-sm-2" >
                               <input type="number" class="form-control" id="" name="" required>
                           </div>
                          
                       </div>
                       <br>
                        <div class="row">
                           <div class="col-sm-2">
                               <label  for="">Color</label>
                           </div>
                           <div class="col-sm-3" >
                               <input type="text" maxlength="100" class="form-control" id="" name="" required>
                           </div>
                           <div class="col-sm-2">
                               <label  for="">Apartamento</label>
                           </div>
                           <div class="col-sm-3" >
                               <input type="text" maxlength="100" class="form-control" id="" name="" required>
                           <div class="col-sm-2">       
                        </div>       
                   <br>
                   <br>

                    </div>

                </div>
              
              
               
               <div class="row">

                   <div class="col-sm-1">
                       <button href="#" type="button" class="btn btn-dark">Guardar</button>
                   </div>
                   <div class="col-sm-1">
                       <button href="#" type="button" class="btn btn-danger">Cancelar</button>
                   </div>
                   
               </div>
               <br>
           </form>
        </div>
      </div>

    </div>


    <!-- Fin edicion -->

    <?php include_once('layouts/footer.php'); ?>