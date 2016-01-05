<?php
/* Smarty version 3.1.29, created on 2016-01-02 09:45:23
  from "E:\Xampp\Xam5_6_12\htdocs\mvc\templates\users\vnkhoe\error\content_404.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56878e23cbd7d1_05061219',
  'file_dependency' => 
  array (
    'd4b8be9a0d78840ebd197b511af7f9ec6f44763a' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\mvc\\templates\\users\\vnkhoe\\error\\content_404.tpl',
      1 => 1451724321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56878e23cbd7d1_05061219 ($_smarty_tpl) {
?>
<main class="container-fluid">
	<section>
		<?php if ($_smarty_tpl->tpl_vars['page_config']->value->content->image->src) {?>
			<?php if ($_smarty_tpl->tpl_vars['page_config']->value->content->image->href != '') {?>
				<div class="error-image">
					<div class="inner">
						<img 
							src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;
echo $_smarty_tpl->tpl_vars['page_config']->value->content->image->src;?>
" 
							alt="<?php echo $_smarty_tpl->tpl_vars['page_config']->value->content->image->alt;?>
" 
							<?php if ($_smarty_tpl->tpl_vars['page_config']->value->content->image->width != '') {?>width="<?php echo $_smarty_tpl->tpl_vars['page_config']->value->content->image->width;?>
"<?php }?> 
							<?php if ($_smarty_tpl->tpl_vars['page_config']->value->content->image->height != '') {?>height="<?php echo $_smarty_tpl->tpl_vars['page_config']->value->content->image->height;?>
"<?php }?> 
						/>
						<a href="<?php echo $_smarty_tpl->tpl_vars['page_config']->value->content->image->href;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['page_config']->value->content->image->href;?>
" title="<?php echo $_smarty_tpl->tpl_vars['page_config']->value->content->image->href_title;?>
"><?php echo $_smarty_tpl->tpl_vars['page_config']->value->content->image->href_title;?>
</a>
					</div>
				</div>
			<?php } else { ?>
			<div class="error-image">
					<img 
						src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;
echo $_smarty_tpl->tpl_vars['page_config']->value->content->image->src;?>
" 
						alt="<?php echo $_smarty_tpl->tpl_vars['page_config']->value->content->image->alt;?>
" 
						<?php if ($_smarty_tpl->tpl_vars['page_config']->value->content->image->width != '') {?>width="<?php echo $_smarty_tpl->tpl_vars['page_config']->value->content->image->width;?>
"<?php }?> 
						<?php if ($_smarty_tpl->tpl_vars['page_config']->value->content->image->height != '') {?>height="<?php echo $_smarty_tpl->tpl_vars['page_config']->value->content->image->height;?>
"<?php }?> 
					/>
				</div>
			<?php }?>
		<?php }?>
	</section>
</main>
<h1>404 - not found!</h1><?php }
}
