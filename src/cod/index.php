<?php
session_start();

include ("db.inc.php");
include ("login.inc.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" dir="ltr">

<head>
<title>CoD | Welcome to CoD!</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en" />
<meta name="author" content="CoD Andrew Gerst" />
<meta name="copyright" content="CoD" />
<meta name="keywords" content="CoD" />
<meta name="description" content="Welcome to CoD | CoD" />
<meta property="og:title" content="CoD" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://codweb.tk" />
<meta property="og:site_name" content="CoD" />
<meta property="fb:admins" content="637458869" />
<meta property="og:description" content="Welcome to CoD | CoD" />
<noscript><meta http-equiv="X-Frame-Options" content="deny" /></noscript>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="javascript.php"></script>
<base target="_top" />
</head>

<body id="main">
<div class="noscript">
We Are Sorry! CoD Requires A Browser That Supports HTML5, jQuery, and Javascript.
</div>
</body>

</html>
<?php mysql_close($db); ?>