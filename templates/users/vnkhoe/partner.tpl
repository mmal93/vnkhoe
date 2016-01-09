<!--partner_link-->
<section class="{$_partner_data->class_name}" {if isset($_partner_data->background) && $_partner_data->background!=''}style="background-color: {$_partner_data->background};"{/if}>
	{if isset($_partner_data->title) && $_partner_data->title!=''}
		<div class="section-title">
			<h2>{$_partner_data->title}</h2>
		</div>
	{/if}
	{foreach from=$_partner_data->rows item=section}
		<div class="row {$section->class_name}">
		{$item_col = $section->cols|@count}
		{$item_col = 12/$item_col}
		{$item_col = (int)$item_col}
		{foreach from=$section->cols item=col}
			<div class="section-col col-sm-2">
					<a href="{$col->link}" target="_blank">
						{if isset($col->image) && $col->image!=''}<img src="{$MEDIA_URL}{$col->image}" title="{$col->title}"/>{/if}
					</a>
			</div>
		{/foreach}
		</div>
	{/foreach}
</section>
<!--end partner_link-->