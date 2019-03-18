<?php
/* Smarty version 3.1.33, created on 2019-03-18 08:59:06
  from '/var/www/html/TLI/pages/include/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8f4fcabccd69_13192375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87506d10a31b7adc195cce7ba93ade315acd4585' => 
    array (
      0 => '/var/www/html/TLI/pages/include/footer.tpl',
      1 => 1552895943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8f4fcabccd69_13192375 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Footer -->
<footer class="page-footer font-small teal pt-1"> <!--Pour fixer en bas de page navbar-fixed-bottom-->

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">
      <div class="row">

        <div class="col-6 mt-0 mt-3">
          <h3 class="text-uppercase font-weight-bold">Created by :</h3>
          <p> Blanchin , Briand , Fallourd  , Jannin , Mathou .</p>
        </div>

        

        <div class="col-6 mb-0 mb-3">
          <h3 class="text-uppercase font-weight-bold">More information</h3>
          <p><a class=info href="?page=page_info&lang=<?php echo $_smarty_tpl->tpl_vars['data']->value['lang'];?>
"> Page Information </a></p>
        </div>

      </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright CPE Lyon
    </div>
    <!-- Copyright -->

  </footer>
<!-- Footer -->
<?php }
}
