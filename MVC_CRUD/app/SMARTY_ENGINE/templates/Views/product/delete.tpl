{include file="Views/inc/header.tpl"}

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">

            {if isset($success)}
                <h3 class="alert alert-success text-center">{$success}</h3>
            {/if}
            {if isset($error)}
                <h3 class="alert alert-danger text-center">{$error}</h3>
            {/if}

        </div>
    </div>
</div>

{include file="Views/inc/footer.tpl"}
