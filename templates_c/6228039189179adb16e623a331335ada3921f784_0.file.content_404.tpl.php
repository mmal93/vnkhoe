<?php
/* Smarty version 3.1.29, created on 2016-01-02 19:27:01
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\error\content_404.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56881675ed2bd6_55044131',
  'file_dependency' => 
  array (
    '6228039189179adb16e623a331335ada3921f784' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\error\\content_404.tpl',
      1 => 1451724321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56881675ed2bd6_55044131 ($_smarty_tpl) {
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
