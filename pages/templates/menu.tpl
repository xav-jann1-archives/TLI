<div class="container_pathologies">
	<div class="info"> Voici la liste des pathologies, veuillez cliquer sur l'une d'elles pour afficher les symptomes associés.</div>
	<!--smarty-->
	{assign var="prec" value="null"}
	{foreach from=$tableau item=$i}
	{if $prec eq "null"}
		<div class="card-header" id="headingOne">
				<button class="btn btn-smbtn btn-block" data-toggle="collapse" data-target={'#'|cat:{$i[2]}} aria-expanded="false" aria-controls={$i[2]}>
				<span class="pull-left">
							<h2>{$i[0]}</h2> </span>
			</button>
			
		</div>

		<div id={$i[2]} class="list-group collapse" aria-labelledby="headingOne">
		    <ul>
		      <li class="list-group-item">
		        {$i[1]}
			  </li>
	{elseif $i[0] eq $prec}
			  <li class="list-group-item">
		        {$i[1]}
			  </li>
	{else}
		    </ul></div>
			<div class="card-header" id="headingOne">
				<button class="btn btn-smbtn btn-block" data-toggle="collapse" data-target={'#'|cat:{$i[2]}} aria-expanded="false" aria-controls={$i[2]}>
				<span class="pull-left">
							<h2>{$i[0]}</h2> </span>
			</button>
			
		</div>

		<div id={$i[2]} class="list-group collapse" aria-labelledby="headingOne">
		    <ul>
		      <li class="list-group-item">
		        {$i[1]}
			  </li>
	{/if}
	{assign var="prec" value=$i[0]}
	{/foreach}
	</ul></div>
	<!--smarty-->
</div>