    <footer>
      Copyright Emanuele Frisoni, 2020 
<?php 
/* esempio di lettura di un parametro passato 
   al programma tramite la barra indirizzo del browser */
if (isset($_GET['var'])) { print (" - " . $_GET['var']); }
?>
    </footer>
  </body>
</html>