 <!DOCTYPE html>
<html>
<head>
<title>Menu nul</title>
<link rel="stylesheet" href="css/pathos.css">
</head>
<body>
<div class="select">
<ul>
    {foreach from=$liste item=i}
    <li>	
        <a href="1.html">
		    <div class="symptome">
			    <h3>{$i[0]}</h3>
		    </div>
	 </a>
    </li>
    {/foreach}
</ul>
</div>
</body>
</html> 
