<!DOCTYPE html>
<html>
<head>
	<title>PLAN DE MEJORAMIENTO EMPRESARIAL</title>
    <!-- LIBRERIAS BOOTSTRAP !-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.0.0-dist/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>

    <!-- ESTILOS PROPIOS !-->
    <link rel="stylesheet" href="EstilosCss/EstiloRegistro.css">
    <link rel="stylesheet" type="text/css" href="EstilosCss/w3.css">

    <link rel="stylesheet" href="EstilosCss/estilos.css">
    <link rel="stylesheet" href="ICONOS/fonts.css">
    <script src="EstilosCss/main.js"></script>

    <!-- NO CACHE EN LOS BUSCADORES !-->
        <meta charset="utf-8">  
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache"> 

        <?php 
        session_start();
        if(isset($_SESSION['u_usuario'])){
        }else{
            header("Location:../Consultorio-Empresarial");
        }
         ?>

         
</head>

<body >

<div  id="header" style="background-color: #343a40;">   

        <div class="row">
            <div class="col-xs-2 col-md-3 col-lg-3 col-xl-3 p-2" id="logoHeader">
                    <div style="width: 200px;">
            <img  style=" height: 50px; margin-left: 30%;margin-top: 4%;" src="imagenes/indice.png">
            </div>
            </div>

            <div class="col-xs-12 col-md-9 col-lg-9 col-xl-9">

                <div class="menu_bar" style="z-index: 1000;">
                    <a href="#" class="bt-menu"><span class="icon-menu"></span><img  style=" height: 50px; margin-left: 2%;" src="imagenes/indice.png"></a>
                </div> 

        <nav class="">
            <ul class="" >
                <li ><a href="usuario/principal.php"><span class="icon-home"></span>Inicio</a></li>
                <li class="submenu">
                    <a href="#"><span class="icon-office"></span>Empresa o Asociacón<span class="caret icon-arrow-down6"></span></a>
                    <ul class="children">
                        <li><a href="Registro.php">Registrar<span class="icon-dot"></span></a></li>
                        <li><a href="usuario/ListarEmpresas.php" id="ListarEmpresas">Listar Adscritas<span class="icon-dot"></span></a></li>

                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="icon-rocket"></span>Diagnosticos<span class="caret icon-arrow-down6"></span></a>
                    <ul class="children">
                        <li><a href="#">Crear Instrumento<span class="icon-dot"></span></a></li>
                        <li><a href="#">Instrumentos Creados<span class="icon-dot"></span></a></li>
                        <li><a href="#">Aplicar Diagnostico<span class="icon-dot"></span></a></li>
                        <li><a href="#">Resultados de Diagnosticos<span class="icon-dot"></span></a></li>

                    </ul>
                </li>
                <li><a href="#"><span class="icon-earth"></span>Servicios</a></li>
                <li><a href="#"><span class="icon-mail"></span>Contacto</a></li>
                <li><div style="width: 15%;"><button class="btn btn-outline-success" onclick="location.href='Operaciones/CerrarSesion.php'" >Cerrar Sesion</button> </div>   </li>
            </ul>   
                    
                            
            
        </nav>

            </div>

        </div>

        
        
    </div>

    
<section class="container-fluid wap">
    
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xs-8">
            

            <!-- -----------------------DATOS DE LA EMPRESA -------------------------- !-->
           <form  method="POST" id="formRegisto" action="Operaciones/RegistrarEmpresa.php">
            
            <hr>
            <h2 class="DE pb-2">DATOS DE LA EMPRESA O ASOCIACIÓN</h2>
            <div class="row pb-4">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h3>Nombre </h3>
                    <input id="NombreEmpresa" name="NombreEmpresa" type="text" placeholder="Ej: CompuMarcas" required>   
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h3>Nit</h3> 
                    <input id="Nit" name="Nit" type="text" placeholder="Ej:4356467" required> 
                 </div>
                 
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <h3>Sector de actividad</h3>
                        <input id="SectorActividad" name="SectorActividad" type="text" placeholder="Ej:Terciario" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <h3>Inicio De Actividad</h3>
                        <input id="FechaInicioActividad" name="FechaInicioActividad" type="date" placeholder="Dia/Mes/Año" required>
                </div>
            </div>

           
            <!--DATOS DEL REPRESENTANTE LEGAL!-->
            <hr>
            <h2 class="RL">REPRESENTANTE LEGAL</h2>


            <div class="row pb-4">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                   <h3>Nombres</h3> 
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pb-2">                    
                    <input id="PrimerNombre" name="PrimerNombre" type="text" placeholder="Primer Nombre" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pb-2">
                    <input id="SegundoNombre" name="SegundoNombre" type="text" placeholder="Segundo Nombre" >           
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h3>Apellidos</h3>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pb-2">
                    <input id="PrimerApellido" name="PrimerApellido" type="text" placeholder="Primer Apellido" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pb-2">
                    <input id="SegundoApellido" name="SegundoApellido" type="text" placeholder="Segundo Apellido" required> 
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h3>Cedula de Representante</h3>
                    <input id="Cedula" name="Cedula" type="text" placeholder="Ej:1100396456" required>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h3>Fecha de Nacimiento</h3>
                    <input id="FechaDeNacimiento" name="FechaDeNacimiento" type="date"  required>
                </div>
            </div>



            <!--DATOS DE CONTACTO DE LA EMPRESA!-->
            <hr>
            <h2 class="CE">DATOS DE CONTACTO</h2>

            <div class="row pb-2 ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h3>Telefonos</h3>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pb-2">
                    <input id="TelefonoFijo" name="TelefonoFijo" type="text" placeholder="Fijo" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pb-2">
                    <input id="TelefonoCelular" name="TelefonoCelular" type="text" placeholder="Celular" required >
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h3>Fax </h3>
                    <input id="Fax" name="Fax" type="text" placeholder="Ej: 376848">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h3>Direccion </h3> 
                    <input id="Direccion" name="Direccion" type="text" placeholder="Ej: cll 5I #11-38" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h3>Departamento </h3>
                    <input id="Departamento"  name="Departamento" type="text" placeholder="Ej: sucre" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h3>Ciudad </h3>
                    <input id="Ciudad" type="text" name="Ciudad" placeholder="Ej: Sincelejo" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <h3>Correo Electronico</h3>
                    <input id="Email" type="email" name="Email" placeholder="E-mail" required>
                </div>

            </div>

            <!--ENVIAR DATOS!-->
            <hr>

            <div class="row justify-content-center pt-2">
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                   
                    <input type="submit" class="btn btn-outline-success" style="font-size: 18px; "  value="Registrar">
                </div>
            </div>

             </form> 
              
        </div>
    </div>

    

</section>


<!-- //////////////////////////////////////////////////////////// !-->


<footer class="footer mt-5">
	<div class="logoFooter">
            <img src="imagenes/LogoFooter.png">
        </div>
</footer>




</body>
</html>


<!-- 
<script type="text/javascript">

    $(document).ready(function(){
        $('#btnRegistro').click(function(){            
            var datos=$('#formRegisto').serialize();            
            $.ajax({
                type:"POST",
                url:"RegistrarEmpresa.php",
                data:datos,                
                success:function(r){
                    if(r==1){
                        alert("Registro completado con exito..");
                        $('#formRegisto')[0].reset();
                    }else{
                        alert("Ocurrio un error con la conexion..");

                    }
                }
            });

            return false;
        
        });
    });
</script>
-->



