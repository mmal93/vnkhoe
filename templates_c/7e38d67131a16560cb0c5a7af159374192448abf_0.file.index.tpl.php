<?php
/* Smarty version 3.1.29, created on 2016-01-29 01:31:59
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\account\dashboard\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aab2ff8db205_35052096',
  'file_dependency' => 
  array (
    '7e38d67131a16560cb0c5a7af159374192448abf' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\account\\dashboard\\index.tpl',
      1 => 1453864350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:account\\\\dashboard\\\\left_menu.tpl' => 1,
    'file:account\\\\dashboard\\\\top_banner.tpl' => 1,
    'file:account\\\\dashboard\\\\right_index_content.tpl' => 1,
  ),
),false)) {
function content_56aab2ff8db205_35052096 ($_smarty_tpl) {
?>
<section id="main-dashboard" class="row">
	<div class="col-sm-2 member-menu-left left">
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:account\\dashboard\\left_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>
	<div class="col-sm-10 right-content">
		<div class="content">
			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:account\\dashboard\\top_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:account\\dashboard\\right_index_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>
	</div>
</section><?php }
}
