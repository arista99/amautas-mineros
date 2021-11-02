<!-- header -->
<?php require_once 'header.php'; ?>

<div class="clearfix"></div>
<div class="wrap">
        <div class="contenido">
            <div class="formulario">
                <h2 class="tittle-contacto">Escolar</h2>
                <form action="enviar-escolar.php" method="POST">
                    <input type="text" name="nombre" placeholder="Nombre Apoderado" required>
        
                    <input type="text" name="apellidos" placeholder="Apellidos Apoderado" required>

                    <input type="text" name="escolar" placeholder="Nombre Escolar" required>
                
                    <input type="email" name="correo" placeholder="Correo Electrónico" required>
                                    
                    <input type="text" name="numero" placeholder="Número de Celular o Teléfono">

                    <textarea name="comentario"  placeholder="Déjanos algún comentario" required></textarea>
            
                    <input class="boton" type="submit" value="ENVIAR">
                </form>
            </div>
            <div class="imagen-escolar">
                <img src="img/estudiante.svg">
            </div>
        </div>
</div>

<!-- FOOTER -->
<?php require_once 'footer.php'; ?>