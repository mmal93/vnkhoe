<main class="container-fluid">
	<section>
		{if $page_config->content->image->src}
			{if $page_config->content->image->href!=""}
				<div class="error-image">
					<div class="inner">
						<img 
							src="{$TEMPLATE_URL}{$page_config->content->image->src}" 
							alt="{$page_config->content->image->alt}" 
							{if $page_config->content->image->width!=''}width="{$page_config->content->image->width}"{/if} 
							{if $page_config->content->image->height!=''}height="{$page_config->content->image->height}"{/if} 
						/>
						<a href="{$page_config->content->image->href}" alt="{$page_config->content->image->href}" title="{$page_config->content->image->href_title}">{$page_config->content->image->href_title}</a>
					</div>
				</div>
			{else}
			<div class="error-image">
					<img 
						src="{$TEMPLATE_URL}{$page_config->content->image->src}" 
						alt="{$page_config->content->image->alt}" 
						{if $page_config->content->image->width!=''}width="{$page_config->content->image->width}"{/if} 
						{if $page_config->content->image->height!=''}height="{$page_config->content->image->height}"{/if} 
					/>
				</div>
			{/if}
		{/if}
	</section>
</main>
<h1>404 - not found!</h1>