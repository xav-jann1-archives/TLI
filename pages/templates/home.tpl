<div class="corps">
    <h1> Bienvenue sur le site d'acupunture </h1>
    <h2> sous titre </h2>
    <h3> sous sous titre </h3>

    <p>meilleur site du monde ! <br />
        (c'est vrai) </p>
    {if !isset($session.name)}
    <div class="container1 center-block">
        <h2>Connectez-vous :</h2>
        <form action="index.php?page=home&lang={$data['lang']}" method="post">
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

    </div>
    {/if}
    <!-- liste -->
    <ul>
        <li> pathologie 1 </li>
        <li> pathologie 2 </li>
        <li> pathologie 3 </li>
    </ul>

    <!-- lien -->
    <p>lien vers: <a href="acuponcture2.html"> la page 2</a> ? </p>

    <a href="maladies.html" class="btn btn-primary btn-lg active" role="button" title="Vos maladies">Vos maladies</a>
    <a href="err404.html" class="btn btn-primary btn-lg active" role="button" title="Page 404">Page 404</a>
</div>