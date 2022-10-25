{include file='header.tpl'}
<section class="d-flex flex-row mt-3 flexflexible">
    {foreach from=$productos item=$producto }
        <div class="card ms-2 mt-2" style="width: 18rem;">
            <img src="{$producto->img}" class="img-thumbnail" alt="{$producto->nombre}">
            <div class="card-body text-center">
                <h5 class="card-title">{$producto->nombreCorto}</h5>
                <p class="card-text">{$producto->descripcion}</p>
                <div class="d-flex row justify-content-center">
                    <a href="mostrarprod/{$producto->ID}" class="btn btn-primary ">Ver</a>
                </div>
            </div>
        </div>
    {/foreach}
</section>

{include file='footer.tpl'}