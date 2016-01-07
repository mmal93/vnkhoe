<main>
	<div class="container-fluid">
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
	<!--brands-->
	{foreach from = $page_config->brands item=section}
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
							<a href="{$col->link}" target="_blank">
							{if isset($col->image) && $col->image!=''}<img src="{$MEDIA_URL}{$col->image}" title="{$col->title}"/>{/if}
						</a>
						</div>
					{/foreach}
				</div>
			{/foreach}
		</section>
	{/foreach}
	<!--end brands-->
	<!--employer-->
	{foreach from = $page_config->section_info item=section}
		<section class="{$section->class_name}" {if isset($section->background) && $section->background!=''}style="background-color: {$section->background};"{/if}>
			<div class="row inner">
				<div class="col-sm-6 left">
					<h3>{$section->title}</h3>
					<p>{$section->text}</p>
					<a href="{$section->link}">{$section->text_link}<i class="fa fa-angle-double-right"></i></a>
				</div>
				<div class="col-sm-6 right">
					<img src="{$MEDIA_URL}{$section->image_href}" alt="{$section->image_alt}"/>
				</div>
			</div>
		</section>
	{/foreach}
	<!--end employer-->
	<!--partner_link-->
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
	<!--end partner_link-->
	{/if}
	<!--end load ads...-->
	</div>
</main>