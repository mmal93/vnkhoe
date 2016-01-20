<!--load ads...-->
{if isset($page_config)}
{assign var=item_row value=''}
{assign var=item_col value=''}
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
{/if}
<!--end load ads...-->