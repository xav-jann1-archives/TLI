<div class="select">
<ul>
	<!--smarty-->
	{assign var="prec" value="null"}
	{foreach from=$tableau item=$i}
	{if $prec eq "null"}
		<li>
			<button>
				<div>
						<h3>{$i[0]}</h3>
						<ul>
							<li><h4>{$i[1]}</h4></li>
	{elseif $i[0] eq $prec}
		<li><h4>{$i[1]}</h4></li>
    {else}
		</ul></div></button></li>
		<li>
				<button>
					<div>
							<h3>{$i[0]}</h3>
							<ul>
								<li><h4>{$i[1]}</h4></li>
	{/if}
	{assign var="prec" value=$i[0]}
	{/foreach}
	</ul></div></button></li>
	<!--smarty-->
</ul>
</div>
