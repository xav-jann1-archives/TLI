<div class="corps">
    {if !isset($session.name)}
    <div class="container center-block">
        <h1>Bienvenue sur le Site d'acupuncture !</h1>
        <h2>Vous trouverez tous ce qu'il faut savoir sur les pathologies et leurs symptômes</h2>
        <img class="img-fluid rounded-circle" src="img/aiguille1.jpg" alt="image acupuncture" />
        <h2> <button class="btn btn-outline-default btn-lg" data-toggle="modal" data-backdrop="static" data-target="#connexion_modal">Connectez-vous</button> pour avoir accès à tous le site.</h2>
        <!--<form action="index.php?page=home&lang={$data['lang']}" method="post">
            <div class="form-group">
                {$form.error}</br>
                <label for="usr">Name:</label>
                <input type="text" class="form-control center-block" id="name" name='name'>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control center-block" id="pwd" name='pwd'>
            </div>
            <div>
                <input type="hidden" name='sent' value='sent'>
                <button class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">se connecter</button>
                <button class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">s'inscrire</button>
            </div>
        </form>
    -->
    </div>
    {/if}
    {if isset($session.name)}
    <div class="container">
    <h1>Bienvenue Docteur {$session.name}</h1> 
    <img class="rounded mx-auto d-block" src="img/footer.jpg" alt="image acupuncture" />
    <blockquote class="blockquote text-center">
            <p class="mb-0">"La santé est le trésor le plus précieux et le plus facile à perdre. C'est cependant le plus mal gardé.".</p>
            <div class="blockquote-footer">Chauvot de Bauchêne </div>
    </blockquote>
    <h2 class="text-center"> Vous pouvez désomais faire des <a href="?page=recherche&lang={$data.lang}">recherches</a>.</h2>
    </div>
    {/if}
</div>