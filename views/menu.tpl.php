<?php include_once 'header.tpl.php'; ?>
<body onclick="console.log('Hello', event.target);">
	<div class="toolbar">
		<h1 id="pageTitle"></h1>
		<a id="backButton" class="button" href="#"></a>
        	<?php /* <a class="button" href="#searchForm">Search</a> */ ?>
	</div>

	<ul id="isearch" title="iSearch" selected="true">
	<li><a href="index.php?/country/list">list</a></li>
	<li><a href="?/country/search">search</a></li>
	<li><a href="#about">about</a></li>
	<li><div style="width:100%;color:#999;font-size:10px;text-align:center;">mehesz<span style="color:#f00;">.</span>net</div></li>
	</ul>

	<div id="about" class="panel" title="about">
		<h2>this demo was built especially for iPhones and iPod touchZ (should function with Safari browser, and was tested on FireFox): </h2>
		<hr>
		<h2>limonade - a PHP micro-framework ( <a href="http://www.sofa-design.net/limonade/">http://www.sofa-design.net/limonade</a> )</h2>
		<h2>iUI - iPhone User Interface Framework ( <a href="http://code.google.com/p/iui/">http://code.google.com/p/iui/</a> )</h2>
		<hr>
		<h2>download the source from <a href="http://mehesz.net/downloads/projects/isearch.zip">http://mehesz.net/downloads/projects/isearch.zip</a></h2>
	</div>
</body>
