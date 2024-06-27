<h1 class="nombre-pagina">Panel de Administración</h1>

<?php
    include_once __DIR__ . '/../templates/barra.php';
?>

<h3>Buscar Citas</h3>
<div class="busqueda">
    <form action="" class="formulario">
        <div class="campo">
            <label for="fecha">Fecha</label>
            <input 
                type="date"
                id="fecha"
                name="fecha"
                value="<?php echo $fecha; ?>"
            />
        </div>
    </form>
</div>

<?php 
    if( count($citas) === 0 ) {
        echo "<p>No hay citas programadas para esta fecha</p>";
    }
?>

<div class="citas-admin">
    <ul class="citas">
        <?php
            $idCita = 0;
        
            foreach( $citas as $key => $cita ):
                if( $idCita !== $cita->id):
                    $total = 0;
        ?>
        <li>
            <h3>Datos Cita</h3>
            <div class="citas-datos">
                <p>ID: <span><?php echo $cita->id; ?></span></p>
                <p>Hora: <span><?php echo $cita->hora; ?></span></p>
                <p>Cliente: <span><?php echo $cita->cliente; ?></span></p>
                <p>Email: <span><?php echo $cita->email; ?></span></p>
                <p>Telefono: <span><?php echo $cita->telefono; ?></span></p>
            </div>
            
            <h3>Servicios</h3>

            <?php 
                $idCita = $cita->id;
                endif;
                
                $total += $cita->precio;
            ?>
            <p class="servicio">
                <?php echo $cita->servicio . ' $ ' . $cita->precio; ?>
            </p>
        <!-- </li> -->

        <?php
            $actual = $cita->id;
            $proximo = $citas[$key + 1]->id ?? 0;

            if( esUltimo($actual, $proximo) ): ?>
                <p class="total">Total: <span>$ <?php echo $total; ?></span></p>

                <form action="/api/eliminar" method="POST">
                    <input 
                        type="hidden" 
                        name="id" 
                        value="<?php echo $cita->id ?>"
                    />
                    <input 
                        type="submit" 
                        class="boton-eliminar" 
                        value="Eliminar"
                    />
                </form>
        <?php
            endif;
        
            endforeach; 
        ?>

    </ul>
</div>

<?php 
    $script = "<script src='build/js/buscador.js'></script>";
?>