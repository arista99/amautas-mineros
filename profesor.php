<!-- header -->
<?php require_once 'header.php'; ?>

<div class="clearfix"></div>
<div class="wrap">
    <div class="contenido">
        <div class="formulario">
            <h2 class="tittle-contacto">Profesor</h2>
            <form action="enviar-profesor.php" method="POST">
                <input type="text" name="nombre" placeholder="Nombre" required>
    
                <input type="text" name="apellidos" placeholder="Apellidos" required>

                <input type="text" name="colegio" placeholder="Colegio" required>

                <input type="text" name="grado" placeholder="Grado de enseñanza" required>
                
                <input type="email" name="correo" placeholder="Correo Electrónico" required>
            
                <input type="text" name="numero" placeholder="Número de Celular o Teléfono" required>

                <textarea name="comentario"  placeholder="Déjanos algún comentario" required></textarea>
        
                <input class="boton" type="submit" value="ENVIAR">
            </form>
        </div>
        <div class="imagen-profesor">
            <img src="img/profesor.svg">
        </div>
    </div>
</div>

<!-- FOOTER -->
<?php require_once 'footer.php'; ?>