{if isset($page_config)}
{assign var=item_row value=''}
{assign var=item_col value=''}
<!--bottom link-->
{foreach from = $page_config->bottom_link item=section}
	<section class="{$section->class_name}" {if isset($section->background) && $section->background!=''}style="background-color: {$section->background};"{/if}>
		{if isset($section->title) && $section->title!=''}
			<div class="section-title">
				<h2>{$section->title}</h2>
			</div>
		{/if}
		{$item_col = $section->cols|@count}
		{$item_col = 12/$item_col}
		{$item_col = (int)$item_col}
		{foreach from=$section->cols item=col}
			<div class="section-col">
					<a href="{$col->link}" target="_blank">
						{if isset($col->image) && $col->image!=''}<img src="{$MEDIA_URL}{$col->image}" title="{$col->title}"/>{/if}
					</a>
			</div>
		{/foreach}
	</section>
{/foreach}
<!--end bottom link-->
{/if}