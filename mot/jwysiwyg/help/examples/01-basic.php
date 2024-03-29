<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Example: Basic - jWYSIWYG</title>
<link rel="stylesheet" type="text/css" href="../lib/blueprint/screen.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="../lib/blueprint/print.css" media="print" />
<!--[if lt IE 8]><link rel="stylesheet" href="../lib/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
<link rel="stylesheet" href="../../jquery.wysiwyg.css" type="text/css"/>
<script type="text/javascript" src="../lib/jquery.js"></script>
<script type="text/javascript" src="../../jquery.wysiwyg.js"></script>
<script type="text/javascript" src="../../controls/wysiwyg.image.js"></script>
<script type="text/javascript" src="../../controls/wysiwyg.link.js"></script>
<script type="text/javascript" src="../../controls/wysiwyg.table.js"></script>
<script type="text/javascript">
(function($) {
	$(document).ready(function() {
		$('#wysiwyg').wysiwyg();
	});
})(jQuery);
</script>
</head>
<body><div class="container">
	<h1>jWYSIWYG</h1>
	<h2>Example: Basic</h2>
    <form action="insert.php" method="post">
	<textarea id="wysiwyg" name="xxd" rows="5" cols="80"></textarea>
    <input type="submit" name="sumbit" >
    </form>

	<hr/>
	<a href="index.html">Index</a>
</div></body>
</html>
