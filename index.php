<?php include 'inc/layout/header.php' ?>

<div class="contenedor_barra">
    <h1>Agenda de contactos</h1>
</div>

<div class="bg_amarillo contenedor sombra">

    <form id="contacto" action="#">
        <legend>
            Añada un contacto <span>Todos los campos son obligatorios</span>
        </legend>
    

        <?php include 'inc/layout/formulario.php' ?>
        </form>
</div>


<div class="bg_blanco contenedor sombra contactos">
    <div class="contenedor_contactos">
        <h2>Contactos</h2>
        <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar contactos ..." >

        <p  class="total_contactos"><span>2</span> Contactos</p>
        <div class="contenedor_tabla">
        <table class="listado_contactos" id="listado_contactos">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Empresa</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Izaird</td>
                    <td>Escom</td>
                    <td>4654648947</td>
                    <td>
                        <a href="editar.php?id=1" class="btn_editar btn" >
                            <i class="fas fa-pen-square"></i>
                        </a>
                        <button data-id="1" type="button" class="btn_borrar btn">

                        <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>Izaird</td>
                    <td>Escom</td>
                    <td>4654648947</td>
                    <td>
                        <a href="#" class="btn_editar btn" >
                            <i class="fas fa-pen-square"></i>
                        </a>
                        <button data-id="1" type="button" class="btn_borrar btn">

                        <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>Izaird</td>
                    <td>Escom</td>
                    <td>4654648947</td>
                    <td>
                        <a href="#" class="btn_editar btn" >
                            <i class="fas fa-pen-square"></i>
                        </a>
                        <button data-id="1" type="button" class="btn_borrar btn">

                        <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>

<?php include 'inc/layout/footer.php' ?>