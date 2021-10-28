<?php include_once 'includes/templates/header.php';
require_once('includes/funciones/funcionestwo.php');
?>
<?php

$invitado = $_GET['identi'];


$contactos = reviewUsuarios($invitado);
if ($contactos->num_rows) {
    foreach ($contactos as $contacto) {
        $invitado = array(
            'nombre' => $contacto['nombre_invitado'],
            'apellidos' => $contacto['apellido_invitado'],
            'email' =>  $contacto['email_invitado'],
            'tel' =>  $contacto['tel_invitado'],
            'tipo' =>  $contacto['tipo_invitado'],
            'foto' =>  $contacto['foto_invitado'],
            'descripcion' =>  $contacto['descripcion_invitado'],
            'especialidad' =>  $contacto['especialidad_invitado'],
            'fecha' =>  $contacto['fecha_invitado'],
            'hora' =>  $contacto['hora_invitado'],
            'tema' =>  $contacto['tema_invitado'],
            'subtema' =>  $contacto['subtema_invitado'],
            'lugar' => $contacto['lugar_invitado']
        );
    }
} ?>
<title>Invitados</title>
<meta name="description" content="<?php echo $invitado['descripcion']?>">
<meta name="title" content="2do congreso mexicano del aguacate">
<meta name="keywords" content="2do congreso mexicano del aguacate, <?php echo $invitado['nombre'] . " " . $invitado['apellidos']; ?>,<?php 
            echo $invitado['tema'];
            ?>,
            <?php 
            echo $invitado['subtema'];
            ?>,
            <?php echo $invitado['descripcion'];?>
            " />
<meta name="author" content="SIAM. A.C." />
<meta name="copyright" content="SIAM. A.C." />

<div class="sectionpress" id="ultimo-elemt">
    <div class="contenedor-forma1">
        <div id="inicioperfilponentex1" class="forma1"><img src="<?php echo $invitado['foto']; ?>" alt="<?php echo $invitado['foto']; ?>"></div>

    </div>
    <div class="contenedor-forma2">
        <div class="circulo1"></div>
        <div class="circulo2"></div>
    </div>
    <div class="contenedor-forma3">
        <div class="forma-forma3">
            <p>Instructor:</p>
        </div>
    </div>
    <div class="contenedor-forma4">
        <div class="forma-forma4">
            <p><?php echo $invitado['especialidad'];?></p>
            <p><?php echo $invitado['nombre'] . " " . $invitado['apellidos']; ?></p>
            <p><?php echo $invitado['descripcion'] . " " . $invitado['lugar']; ?></p>
        </div>
    </div>
    <div class="contenedor-forma5">
        <div class="forma-forma5">
            <p>En el 2° Congreso Mexicano del Aguacate:</p>
            <p><?php 
            echo $invitado['tema'];
            ?></p>
            <p><?php 
            echo $invitado['subtema'];
            ?></p>
          
        </div>
    </div>

</div>

<?php include_once 'includes/templates/footer.php' ?>