<?php
/* Smarty version 3.1.33, created on 2019-03-18 08:59:06
  from '/var/www/html/TLI/pages/include/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8f4fcabc8e54_85727127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ea1ef2efead203bff863b820b3d645536279b5e' => 
    array (
      0 => '/var/www/html/TLI/pages/include/header.tpl',
      1 => 1552895887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/popup_connexion.tpl' => 1,
  ),
),false)) {
function content_5c8f4fcabc8e54_85727127 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
    <?php $_smarty_tpl->_subTemplateRender('file:../templates/popup_connexion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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

            <div class="form-inline">

                <?php if (!isset($_smarty_tpl->tpl_vars['session']->value['name'])) {?>
                
                <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-backdrop="static" data-target="#connexion_modal">Log in</button>
                
                <?php }?>

                <?php if (isset($_smarty_tpl->tpl_vars['session']->value['name'])) {?>
                <div class="form-control mr-sm-2" id=name"> <?php echo $_smarty_tpl->tpl_vars['session']->value['name'];?>
 </div>
                <a href="?page=logout&lang=<?php echo $_smarty_tpl->tpl_vars['data']->value['lang'];?>
" class="btn btn-outline-success my-2 my-sm-0" role="button" title="log_out">Log out</a>
                <?php }?> 
            </div>
        </div>
    </nav>
</header><?php }
}
