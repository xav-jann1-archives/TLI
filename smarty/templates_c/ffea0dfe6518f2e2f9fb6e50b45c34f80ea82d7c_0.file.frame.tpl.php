<?php
/* Smarty version 3.1.33, created on 2019-03-01 21:56:58
  from '/var/www/html/TLI/frame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c799c9a0bc157_28276909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffea0dfe6518f2e2f9fb6e50b45c34f80ea82d7c' => 
    array (
      0 => '/var/www/html/TLI/frame.tpl',
      1 => 1551473815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:generic/head.tpl' => 1,
    'file:generic/header.tpl' => 1,
    'file:pages/".((string)$_smarty_tpl->tpl_vars[\'page\']->value).".tpl' => 1,
    'file:generic/footer.tpl' => 1,
  ),
),false)) {
function content_5c799c9a0bc157_28276909 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html lang="fr">
	<!--head-->
		<?php $_smarty_tpl->_subTemplateRender("file:generic/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<!--head-->

	<body>
		<!--header-->
		<?php if ($_smarty_tpl->tpl_vars['page']->value != '404') {?>
		<?php $_smarty_tpl->_subTemplateRender("file:generic/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php }?>
		<!--header-->
        <!--body-->
        <?php $_smarty_tpl->_subTemplateRender("file:pages/".((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <!--body-->
		<!--footer-->
		<?php if ($_smarty_tpl->tpl_vars['page']->value != '404') {?>
		<?php $_smarty_tpl->_subTemplateRender("file:generic/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php }?>
		<!--footer-->
  </body>
  </html><?php }
}
