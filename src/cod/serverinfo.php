<?php
include('serverstatus.php');

$httpip = $_SERVER['HTTP_HOST'];
$serverip = $_GET['ip'];
$thcserverip = "8.6.75.44";
// header ('refresh: 0; url=http://' . $httpip . '/cod/serverinfo.php?ip=' . $thcserverip);

if (!isset($serverip) || $serverip == '') {
$status = new COD4ServerStatus($httpip, '28960');
if (!$status -> getServerStatus()) $status = new COD4ServerStatus($thcserverip, '28960');
} else $status = new COD4ServerStatus($serverip, '28960');

if ($status -> getServerStatus()) {
$status -> parseServerData();
$serverStatus = $status -> returnServerData();
$players = $status -> returnPlayers();
$pings = $status -> returnPings();
$scores = $status -> returnScores();
$data = $status -> returnData();
$meta = $status -> returnMeta();
?>
<h1>Server: <?php echo $serverStatus['sv_hostname']; ?></h1>      
Admin: <?php echo $serverStatus['_Admin']; ?><br />
Email: <?php echo $serverStatus['_Email']; ?><br />
IRC: <?php echo $serverStatus['Irc']; ?><br />
Location: <?php echo $serverStatus['_Location']; ?><br />
Website: <a href="http://<?php echo $serverStatus['_Website']; ?>">http://<?php echo $serverStatus['_Website']; ?></a><br />
<br />
<table width="50%" cellspacing="1" cellpadding="1" border="1">
<tr>
<th width="5%">#</th>
<th>Player</th>
<th width="15%">Score</th>
<th width="15%">Ping (ms)</th>
</tr>
<?php $rank = 1; foreach($players as $i => $v) { ?>
<tr>
<td><?php echo $rank; ?></td>
<td><?php echo $players[$i]; ?></td>
<td><?php echo $scores[$i]; ?></td>
<td><?php echo $pings[$i]; ?></td>
</tr>
<?php $rank++; } ?>
</table>
<hr />
<?php echo $serverStatus['_Maps']; ?><br />
<?php echo $data; ?><br />
<?php echo $meta; ?><br />
<?php } ?>