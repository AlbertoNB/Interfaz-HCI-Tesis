<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css del framework utm_bootstrap-->
    <link rel="stylesheet" href="../css/utm_bootstrap.css">
    <link rel="stylesheet" href="../css2/detalles.css">
    <!--css de evo-calendar-->
    <link rel="stylesheet" href="../evo-calendar/css/evo-calendar.css">

    <link rel="icon" href="../img/Logo_utm.png">
    <title>SPCA</title>
</head>

<body class="d-flex flex-column h-100 bg-light text-la-sm">
    <?php include('sidebar.php') ?>
    <?php include('bt_ability.php') ?>

    <head>
        <nav class="navbar navbar-expand-md navbar-utm bg-primary shadow-sm fixed-top">
            <a class="navbar-brand card p-0" href="index.php" title="Inicio">
                <svg class="bi" width="53px" height="53px" fill="currentColor">
                    <use xlink:href="../svg/bootstrap-icons.svg#spca" />
                </svg>
            </a>
            <button class="navbar-toggler btn-sm btn-pistachio text-primary ml-3 px-1" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="25px" height="25px">
                    <use xlink:href="../svg/bootstrap-icons.svg#list" />
                </svg>
            </button>
            <!--Estaba segundo en el código sin la clase "order-md-2"-->
            <div class="order-md-2">
                <a class="me-2 text-decoration-none">
                    <button class="switch" title="Modo oscuro">
                        <span>
                            <svg class="mb-1" width="13px" height="13px">
                                <use xlink:href="../svg/bootstrap-icons.svg#sun-fill" />
                            </svg>
                        </span>
                        <span>
                            <svg class="mb-1" width="13px" height="13px">
                                <use xlink:href="../svg/bootstrap-icons.svg#moon-fill" />
                            </svg>
                        </span>
                    </button>
                </a>
                <a class="text-light text-decoration-none me-2" href="chat.php" title="Chateando">
                    <svg class="bi" width="20px" height="20px" fill="currentColor">
                        <use xlink:href="../svg/bootstrap-icons.svg#chat" />
                    </svg>
                </a>
                <a class="text-light text-decoration-none me-2" href="" title="Notificaciones">
                    <svg class="bi" width="20px" height="20px" fill="currentColor">
                        <use xlink:href="../svg/bootstrap-icons.svg#bell" />
                    </svg>
                </a>
                <a class="text-light text-decoration-none dropdown-toggle" href="#" title="Área Personal" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="bi" width="40px" height="40px" fill="currentColor">
                        <use xlink:href="../svg/bootstrap-icons.svg#person-circle" />
                    </svg>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="area_p.php">
                        <svg class="bi" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#speedometer2" />
                        </svg>
                        Area personal
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="perfil.php">
                        <svg class="bi" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#person-fill" />
                        </svg>
                        Perfil
                    </a>
                    <a class="dropdown-item" href="manual.php">
                        <svg class="bi" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#journal-medical" />
                        </svg>
                        Manual de usuario
                    </a>
                    <a class="dropdown-item" href="calendario.php">
                        <svg class="bi" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#calendar-week" />
                        </svg>
                        Calendario
                    </a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ventana_rol">
                        <svg class="bi" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#journals" />
                        </svg>
                        Rol
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../html/login.html">
                        <svg class="bi" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#box-arrow-right" />
                        </svg>
                        Cerrar sesión
                    </a>
                </div>
            </div>
            <!--Estaba primero en el código sin la clase oreder-md-1-->
            <div class="collapse navbar-collapse oreder-md-1" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="index.php">
                        <svg width="15px" height="15px">
                            <use xlink:href="../svg/bootstrap-icons.svg#house-fill" />
                        </svg>
                        <b>Inicio</b>
                    </a>
                    <!--<span class="sr-only">(current)</span>-->
                    <a class="nav-link" href="plan.php">
                        <svg width="15px" height="15px">
                            <use xlink:href="../svg/bootstrap-icons.svg#journal-text" />
                        </svg>
                        <b>Plan de clases</b>
                    </a>
                    <a class="nav-link" href="investigacion.php">
                        <svg width="15px" height="15px">
                            <use xlink:href="../svg/bootstrap-icons.svg#search" />
                        </svg>
                        <b>Investigación</b>
                    </a>
                    <a class="nav-link" href="ccui.php">
                        <svg width="15px" height="15px">
                            <use xlink:href="../svg/bootstrap-icons.svg#people-fill" />
                        </svg>
                        <b>CCUI</b>
                    </a>
                    <!--tabindex="-1" aria-disabled="true"-->
                </div>
            </div>
        </nav>
        <div class="modal fade" id="ventana_rol">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary pb-1">
                        <h6 class="font-weight-bold text-white">
                            Cambiar de ROL
                        </h6>
                        <button type="button" class="close pt-2" data-dismiss="modal" aria-label="Close">
                            <span class="text-white" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 class="font-weight-bold">Estimado usuario(a)</h6>
                        <p class="mb-2"> Seleccione uno de los roles que estén asociados a su cuenta,
                            para mostrar las opciones de menú correspondientes. Recuerde
                            que para Coordinadores, Vicedecanos, Decanos y Directores se
                            debe seleccionar la entidad a la que pertence su cargo.
                        </p>
                        <h6 class="font-weight-bold">Iniciar como</h6>
                        <div class="form-group mb-0">
                            <form name="link">
                                <select name="menu" class="form-control" id="exampleFormControlSelect1">
                                    <option selected disabled>Elija su rol academico</option>
                                    <option value="">Estudiante</option>
                                    <option value="../spcaDocente/index.php">Docente</option>
                                </select>
                            </form>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                        <!--
                            onclick="location=document.link.menu.options[document.link.menu.selectedIndex].value;"
                            es para que el value de la etiqueta <option> funcione como hipervínculo
                            al presionar el botón "Cambiar" se redirigirá hacia el hipervínculo 
                        -->
                        <button onclick="location=document.link.menu.options[document.link.menu.selectedIndex].value;" type="button" class="btn-sm btn-primary">
                            <svg width="15px" height="15px">
                                <use xlink:href="../svg/bootstrap-icons.svg#signpost-2-fill" />
                            </svg>
                            Cambiar</button>
                    </div>
                </div>
            </div>
        </div>
    </head>