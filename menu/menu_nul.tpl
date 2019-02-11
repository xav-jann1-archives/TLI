 <!DOCTYPE html>
<html>
<head>
<title>Menu nul</title>
<link rel="stylesheet" href="menu_nul.css">
</head>
<body>
<h1>test</h1>
<div class="select">
<ul>
    {foreach from=$liste item=machin}
    <li>	
        <a href="1.html">
		    <div class="symptome">
			    <h3>{$machin}</h3>
		    </div>
	    </a>
    </li>
    {/foreach}
</ul>
</div>
</body>
</html> 
