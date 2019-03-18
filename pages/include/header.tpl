<header>
    {if !isset($session.name)}
    {include file='../templates/popup_connexion.tpl'}
    {/if}
    <nav class="navbar sticky-top navbar-default navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <!-- Pour que le menu soit responsive on utilise collapse:-->
            <button type="button" class="navbar-toggler hidden-md-up pull-right" data-toggle="collapse"
                data-target="#navbarNav" aria-expanded="false" aria-controls="Toggle navigation">☰
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Pour que le menu soit responsive:-->

            <a class="navbar-brand" href="?page=home&lang={$data.lang}">
                <img src="img/logo.png" alt="logoacuponcture" id=logo
                    class="d-inline-block align-top img-responsive" /></a>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=home&lang={$data.lang}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=pathos&lang={$data.lang}">Pathologies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=recherche&lang={$data.lang}">Recherche</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=register&lang={$data.lang}">Compte</a>
                    </li>
                </ul>
            </div>

            <div class="form-inline">

                {if !isset($session.name)}
                
<<<<<<< HEAD
                <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-backdrop="static" data-target="#connexion_modal">Connexion</button>
=======
                <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-backdrop="static" data-target="#connexion_modal">connexion</button>
>>>>>>> c8c745add05d2973ba2be608a8dfd950d21bb608
                
                {/if}

                {if isset($session.name)}
                <div class="form-control mr-sm-2" id=name"> {$session.name} </div>
                <a href="?page=logout&lang={$data.lang}" class="btn btn-outline-success my-2 my-sm-0" role="button" title="log_out">Déconnexion</a>
                {/if} 
            </div>
        </div>
    </nav>
</header>