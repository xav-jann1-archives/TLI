<!DOCTYPE html>

<html lang="fr">
	<!--head-->
		{include file="generic/head.tpl"}
		<!--head-->

	<body>
		<!--header-->
		{if $page != '404'}
		{include file="generic/header.tpl"}
		{/if}
		<!--header-->
        <!--body-->
        {include file="pages/$page.tpl"}
        <!--body-->
		<!--footer-->
		{if $page != '404'}
		{include file="generic/footer.tpl"}
		{/if}
		<!--footer-->
  </body>
  </html>