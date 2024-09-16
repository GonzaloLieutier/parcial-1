<?php
// Cargo header desde components
include_once("../components/header.php");

?>
</style>
<!----------------------------------------------------------->
<main>
    <section>
        <article>
            <h2>Contactanos.</h2>
        </article>
    </section>

    <!----- Formularios ----->
    <form action="datos.php" method="post"  enctype="multipart/form-data">
        <fieldset>
            <h3>Nombre, apellido, mail y DNI</h3>
            <div class="contacto">
                <div>
                    <label for="Nombre">Nombre:</label>
                    <input id="Nombre" type="text" name="Nombre" placeholder="Ingresa tu Nombre" required>
                </div>
                <div>
                    <label for="Apellido">Apellido:</label>
                    <input id="Apellido" type="text" name="Apellido" placeholder="Ingresa tu apellido" required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="algo@correo.com" required>
                </div>
                <div>
                    <label for="DNI">DNI</label>
                    <input id="DNI" type="file" name="DNI">
                </div>
                <div>
                    <label for="Comentario">Comentario:</label>
                    <textarea id="Comentario" name="Comentario" cols="25" rows="10" requiredplaceholder="Dejenos un comentario..."> </textarea>
                </div>
                <div>
                    <input type="submit" id="comentario" value="Enviar">
                </div>
            </div>
        </fieldset>
    </form>
</main>
<!----------------------------------------------------------->
<?php
// Cargo footer desde components
include_once("../components/footer.php");


?>