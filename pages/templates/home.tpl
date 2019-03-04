<div class="corps">
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
</div>