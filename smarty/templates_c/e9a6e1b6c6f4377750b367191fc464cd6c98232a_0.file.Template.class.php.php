<?php
/* Smarty version 3.1.33, created on 2019-03-01 19:22:35
  from '/var/www/html/TLI/class/Template.class.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c79786c017897_17456486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9a6e1b6c6f4377750b367191fc464cd6c98232a' => 
    array (
      0 => '/var/www/html/TLI/class/Template.class.php',
      1 => 1551461649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c79786c017897_17456486 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

';?>class Template
{
	public $page = "home";

	public function __construct()
	{
		if (isset($_GET["page"]))
		{
			$this->page = ctype_alpha($_GET["page"]) ? strtolower($_GET["page"]) : 'home';
			$this->page = file_exists("./pages/".$this->page) ? $this->page : 'home';
		}

		define("CURRENT_PAGE", $this->page);

		include("./template/header.php");
		include("./pages/".$this->page."/content.php");
		include("./template/footer.php");
	}
}
<?php echo '?>';
}
}
