<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <title><?php print($titolo); ?></title>
    <meta name="keywords" content="<?php print($keywords); ?>" />
    <meta name="description" content="<?php print($description); ?>" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
  <header>
      <h1>Corso SEO Operativo con Metodo Go.S.T.</h1>
      <h2>per essere in prima pagina su Google in meno di 24 ore</h2>
    </header>
    <nav>
      <ul>
<?php 
/* MENU DINAMICO: In base al valore della variabile $menu, 
   si selezina una voce o l'altra */
if ($menu == "home") {  ?><li><strong>Home</strong></li><?php } 
else { ?><li><a href="index.php">Home</a></li><?php } 

if ($menu == "storia") { ?><li><strong>Storia</strong></li><?php } 
else { ?><li><a href="storia.php">Storia</a></li><?php } 

if ($menu == "prodotto") { ?><li><strong>Prodotto</strong></li><?php } 
else { ?><li><a href="prodotto.php">Prodotto</a></li><?php } 
?>
      </ul> 
    </nav>