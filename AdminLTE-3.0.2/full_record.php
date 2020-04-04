<?php
	require 'config.php';

    if (strlen($_POST['name'])){

    }
	
	
?>
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
                            <h1 class="m-0 text-dark">Completa tu registro</h1>
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

                        <button type="button" class="btn btn-outline-dark col-sm-12 d-flex justify-content-between align-items-center my-3" data-toggle="collapse" data-target="#naturalperson" aria-expanded="false" aria-controls="naturalperson">
                            <i class="fas fa-chevron-down"></i> Persona Natural <i class="fas fa-chevron-down"></i>
                        </button>

                        <div class="row collapse" id="naturalperson">

                            <div class="card card-body">

                                <form action="" method="post">

                                    <div class="row">

                                        <div class="col-sm-1">
                                            <label for="">Nombres</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" maxlength="100" class="form-control" id="name" name="name" required>
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="">Apellidos</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" maxlength="100" class="form-control" id="surname" name="surname" required>
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="">Teléfono</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="number" max="999999999" min="0" class="form-control" id="tel_number" name="tel_number" required>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="">Tipo de identificación</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" maxlength="50" class="form-control" id="type_identification" name="type_identification" required>
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="">No. identificación</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" maxlength="50" class="form-control" id="identification" name="identification" required>
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="">Ciudad</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" maxlength="50" class="form-control" id="city" name="city" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="">Email</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="email" maxlength="100" class="form-control" id="email" name="email" required>
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="">Número de Casa</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" maxlength="100" class="form-control" id="number_House" name="number_House" required>
                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>


                        <button type="button" class="btn btn-outline-dark col-sm-12 d-flex justify-content-between align-items-center my-3" data-toggle="collapse" data-target="#economicActivity" aria-expanded="false" aria-controls="economicActivity">
                            <i class="fas fa-chevron-down"></i>información General<i class="fas fa-chevron-down"></i>
                        </button>

                        <div class="row collapse" id="economicActivity">

                            <div class="card card-body">

                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="">Mascota</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <Select class="form-control" id="">
                                            <option>Seleccione</option>
                                            <option>Si</option>
                                            <option>No</option>
                                        </Select>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="">Numero Habitantes</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="" name="" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="">Vehiculo</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <Select class="form-control" id="">
                                            <option>Seleccione</option>
                                            <option>Carro</option>
                                            <option>Moto</option>
                                        </Select>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="">Tipo de Habitante</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <Select class="form-control" id="">
                                            <option>Seleccione</option>
                                            <option>Propietario</option>
                                            <option>Arrendador</option>
                                        </Select>
                                    </div>

                                </div>


                            </div>

                        </div>

                        <button type="button" class="btn btn-outline-dark col-sm-12 d-flex justify-content-between align-items-center my-3" data-toggle="collapse" data-target="#legalPerson" aria-expanded="false" aria-controls="legalPerson">
                            <i class="fas fa-chevron-down"></i>Información Propietario<i class="fas fa-chevron-down"></i>
                        </button>

                        <div class="row collapse" id="legalPerson">

                            <div class="card card-body">

                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="">Nombre completo</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" maxlength="100" class="form-control" id="" name="" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="">Tipo de identificación</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" maxlength="50" class="form-control" id="" name="" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="">No. identificación</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" maxlength="50" class="form-control" id="" name="" required>
                                    </div>
                                    <div class="col-sm-1">
                                        <label for="">Dirección</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" maxlength="50" class="form-control" id="" name="" required>
                                    </div>
                                    <div class="col-sm-1">
                                        <label for="">Ciudad</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" maxlength="50" class="form-control" id="" name="" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-1">
                                        <label for="">Teléfono</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" max="9999999999" min="0" class="form-control" id="" name="" required>
                                    </div>
                                    <div class="col-sm-1">
                                        <label for="">Celular</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" max="999999999" min="0" class="form-control" id="" name="" required>
                                    </div>
                                    <div class="col-sm-1">
                                        <label for="">Email</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="email" maxlength="100" class="form-control" id="" name="">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <button type="button" class="btn btn-outline-dark col-sm-12 d-flex justify-content-between align-items-center my-3" data-toggle="collapse" data-target="#contactPerson" aria-expanded="false" aria-controls="contactPerson">
                            <i class="fas fa-chevron-down"></i>Persona de contacto<i class="fas fa-chevron-down"></i>
                        </button>

                        <div class="row collapse" id="contactPerson">

                            <div class="card card-body">

                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="">Nombre completo</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" maxlength="100" class="form-control" id="" name="" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="">Tipo de identificación</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" maxlength="50" class="form-control" id="" name="" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="">No. identificación</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" maxlength="50" class="form-control" id="" name="" required>
                                    </div>
                                    <div class="col-sm-1">
                                        <label for="">Dirección</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" maxlength="100" class="form-control" id="" name="" required>
                                    </div>
                                    <div class="col-sm-1">
                                        <label for="">Ciudad</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" maxlength="50" class="form-control" id="" name="" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-1">
                                        <label for="">Teléfono</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" max="999999999" min="0" class="form-control" id="" name="" required>
                                    </div>
                                    <div class="col-sm-1">
                                        <label for="">Celular</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" max="999999999" min="0" class="form-control" id="" name="" required>
                                    </div>
                                    <div class="col-sm-1">
                                        <label for="">Email</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="email" maxlength="100" class="form-control" id="" name="" required>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <button type="button" class="btn btn-outline-dark col-sm-12 d-flex justify-content-between align-items-center my-3" data-toggle="collapse" data-target="#Bankinformation" aria-expanded="false" aria-controls="Bankinformation">
                            <i class="fas fa-chevron-down"></i>Información Bancaria<i class="fas fa-chevron-down"></i>
                        </button>

                        <div class="row collapse" id="Bankinformation">

                            <div class="card card-body">

                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="">Banco</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" maxlength="100" class="form-control" id="" name="" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="">Tipo de cuenta</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" maxlength="100" class="form-control" id="" name="" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="">No. Cuenta</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" maxlength="50" class="form-control" id="" name="" required>
                                    </div>
                                </div>

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