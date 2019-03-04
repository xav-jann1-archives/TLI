<?php
/* Smarty version 3.1.33, created on 2019-03-04 10:51:28
  from '/var/www/html/TLI/pages/include/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7cf520b264a9_39132761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ea1ef2efead203bff863b820b3d645536279b5e' => 
    array (
      0 => '/var/www/html/TLI/pages/include/header.tpl',
      1 => 1551691386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7cf520b264a9_39132761 (Smarty_Internal_Template $_smarty_tpl) {
?><header>

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

            <a class="navbar-brand" href="?page=home&lang=<?php echo $_smarty_tpl->tpl_vars['data']->value['lang'];?>
">
                <img src="img/logo.png" alt="logoacuponcture" id=logo
                    class="d-inline-block align-top img-responsive" /></a>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=home&lang=<?php echo $_smarty_tpl->tpl_vars['data']->value['lang'];?>
">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=pathos&lang=<?php echo $_smarty_tpl->tpl_vars['data']->value['lang'];?>
">Pathologies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=recherche&lang=<?php echo $_smarty_tpl->tpl_vars['data']->value['lang'];?>
">Recherche</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=register&lang=<?php echo $_smarty_tpl->tpl_vars['data']->value['lang'];?>
">Compte</a>
                    </li>
                </ul>
            </div>

            <form class="form-inline">
                <label for="mail">@:</label>
                <input class="form-control mr-sm-2" type="text" placeholder="Mail Address" aria-label="Mail Address"
                    id="mail">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">log in</button>
                <a href="?page=logout&lang=<?php echo $_smarty_tpl->tpl_vars['data']->value['lang'];?>
" class="btn btn-primary btn-lg active" role="button" title="log_out">Log out</a>
            </form>
        </div>
    </nav>
</header><?php }
}
