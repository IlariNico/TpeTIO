{include file="header.tpl"}
<h2 class="tituloseccion">Contactenos</h2>
<h3 class="titulopagcontacto">Rellene nuestro formulario o llamenos por telefono:</h3>
<div class=paginacontacto>
        <form action="guardarcliente" class="formmensaje" method="POST">
            <div class="divformulario">
                <label for="nombre">Ingrese su nombre completo:</label>
                <input type="text" required name="nombre" placeholder="Nombre">
            </div>
            <div class="divformulario">
                <label for="apellido">Ingrese su apellido:</label>
                <input type="apellido" required name="apellido" placeholder="Apellido">
            </div>
            <div class="divformulario">
                <label for="email">Ingrese su email:</label>
                <input type="email" required name="email" placeholder="Email">
            </div>
            <div class="divformulario">
                <label for="mensaje">Mensaje</label>
                <input class="inputmsj" type="text" required name="mensaje">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    <div class="infocontacto">
        <div>
            <h3>Conectate con nosotros</h3>
            <p>Pongase en contacto con nosotros y nos aseguramos de responderle lo antes posible.</p>
        </div>
        <div>
            <img class="imagenespagcontacto" src="img/telefonocontacto.png">
            <p>2494-000000</p>
        </div>
        <div>
            <img class="imagenespagcontacto" src="img/mailcontacto.png">
            <p>trabajo@gmail.com</p>
        </div>
        <div>
            <img class="imagenespagcontacto" src="img/ubicacioncontacto.png">
            <p>ubicacion</p>
        </div>
    </div>
</div>
{include file="footer.tpl"}