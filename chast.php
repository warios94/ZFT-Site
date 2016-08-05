<?php
// avvio la sessione
session_start();
?>

<html>
<head>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/chat.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="css/screen.css" />
<!--[if lte IE 7]>
<link type="text/css" rel="stylesheet" media="all" href="css/screen_ie.css" />
<![endif]-->
</head>
<body>
<?php
// salvo nella sessione l'username dell'utente
$_SESSION['username'] = "pippo";

// effettuo una query su un'ipotetica tabella di utenti
// gli utenti loggati sono contrassegnati dal valore 1 nel campo 'loggato'
$res = mysql_query("SELECT username FROM utenti WHERE loggato = 1");

while ($row = mysql_fetch_array($res)){
  // creo dinamicamente il link per aprire la chat
  echo "<a href=\"javascript:void(0)\" onclick=\"javascript:chatWith('" . $row['username'] . "')\">Chatta con " . $row['username'] . "</a>";
}
?>
</body>
</html>
