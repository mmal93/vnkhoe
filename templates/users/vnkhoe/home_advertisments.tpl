<!--load ads...-->
{if isset($page_config)}
{assign var=item_row value=''}
{assign var=item_col value=''}
<!--advertisments-->
{foreach from = $page_config->section item=section}
	<section class="{$section->class_name} row" {if isset($section->background) && $section->background!=''}style="background-color: {$section->background};"{/if}>
		{$item_row = $section->rows|@count}
		{if isset($section->title) && $section->title!=''}
			<div class="section-title">
				<h2>{$section->title}</h2>
			</div>
		{/if}
		{foreach from=$section->rows item=row}
			<div class="{$row->class_name} row-{$item_row} section-row">
				{$item_col=$row->cols|@count}
				{foreach from=$row->cols item=col}
					<div class="col-sm-{12/$item_col} {$col->class_name} section-col" {if isset($col->background) && $col->background!=''}style="background-color: {$col->background};"{/if}>
						{if isset($col->image) && $col->image!=''}<img src="{$MEDIA_URL}{$col->image}"/>{/if}
						{if isset($col->header) && $col->header}
							<h3>
								{if isset($col->link) && $col->link}<a href="{$col->link}">{$col->header}</a>{else}{$col->link}{/if}
							</h3>
						{/if}
						{if isset($col->text) && $col->text}<p>{$col->text}</p>{/if}
					</div>
				{/foreach}
			</div>
		{/foreach}
	</section>
{/foreach}
<!-- end advertisments-->
{/if}
<!--end load ads...-->