{include file='header.tpl'}

<div class="iniciohome">
    <div>
        <h1 class="frasehome"><span id="frasehomer1">Todo lo que buscás, </span><span class="frasehomer2">a un solo
                click.</span></h1>
    </div>
    <img src="img/homepc.png">
</div>

<div class="productosylink">
    <h3>Productos</h3>
    <a href="productos">Ver todos los productos</a>
</div>

<div class="listaproductos">
    {for $i=0; $i<3; $i++}
        <div classs="productoind">
            <img src="{$productos[$i]->img}">
            <p>{$productos[$i]->nombre}</p>
            <p>{$productos[$i]->nombreCorto}</p>
            <p>{$productos[$i]->descripcion}</p>
            <p>{$productos[$i]->precio}</p>
        </div>
    {/for}
</div>

<h3 class="tituloseccion">Los más vendidos</h3>
{*<div class="listaproductos">
    {for $i=0; $i<6; $i++}
        <div classs="productoind">
            <img src="{$productos[$i]->img}">
            <p>{$productos[$i]->nombreCorto}</p>
            <p>{$productos[$i]->nombre}</p>
            <p>{$productos[$i]->descripcion}</p>
            <p>{$productos[$i]->precio}</p>
        </div>
    {/for}
</div>*}


<div>
    <div class="titulocategorias">
        <a class="categoria" href="">Categoria 1</a>
        <a class="categoria" href="">Categoria 2</a>
        <a class="categoria" href="">Categoria 3</a>
        <a class="categoria" href="">Categoria 4</a>
    </div>
    <div class="contenidocategoria">{*AGREGAR CONTENIDO CATEGORIA*}</div>
</div>

<div>
    <div class="tituloservicios">
        <h3 class="tituloservicios__title">Nuestros Servicios</h3>
        <div class="tituloservicios__line"></div>
    </div>

    <div class="contenidoservicios">
        <img src="img/armarpc.png">
        <div class="descripcionservicios">
            <h4>Armamos tu PC con los mejores</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta dictum metus, non bibendum
                lorem placerat at. Nulla ultricies venenatis enim, sit amet lacinia neque pharetra eget.
                Aenean in posuere nisl, non egestas massa. Fusce sed euismod mauris. Nunc malesuada
                magna ac dolo aliquam, aliquet tincidunt ex dictum. Fusce non risus ut risus porttitor interdum.
                Phasellus hendrerit elit vitae tellus scelerisque, eget finibus ex gravida. Aliquam luctus justo
                posuere tristique eleifend. In sit amet aliquam velit.</p>
        </div>
    </div>
</div>

<script src="./js/home.js"></script>

{include file='footer.tpl'}