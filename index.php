<!-- //Creare una variabile con un paragrafo di testo.
//Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.
-->
<?php
$text = 'Le stazioni si somigliano tutte; poco importa se le luci non riescono a rischiarare più in là del loro alone sbavato, tanto questo è un ambiente che tu conosci a memoria, con l\'odore di treno che resta anche dopo che tutti i treni sono partiti, l\'odore speciale delle stazioni dopo che è partito l\'ultimo treno. Le luci della stazione e le frasi che stai leggendo sembra abbiano il compito di dissolvere più che di indicare le cose affioranti da un velo di buio e di nebbia. Io sono sbarcato in questa stazione stasera per la prima volta in vita mia e già mi sembra d\'averci passato una vita, entrando e uscendo da questo bar, passando dall\'odore della pensilina all\'odore di segatura bagnata dei gabinetti, tutto mescolato in un unico odore che è quello dell\'attesa, l\'odore delle cabine telefoniche quando non resta che recuperare i gettoni perché il numero chiamato non dà segno di vita.';
$badword = $_GET['badword'];
strlen($text);
$modtext = str_replace ($badword, '***', $text);
$author = $_GET['author'];
$img = 'https://www.dropbox.com/s/owh054xczqtxkm4/bs.gif?raw=1';
$alt = 'CHE SORPRESAA';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>TESTO PRINCIPALE</h1>
    <p data-author=<?php echo $author ?>> <?php echo $text ?></p>
    <p>LUNGHEZZA PARAGRAFO: <?php echo strlen($text) ?></p>
    <h1>TESTO MODIFICATO</h1>
    <p><?php echo $modtext ?></p>
    <p>LUNGHEZZA PARAGRAFO: <?php echo strlen($modtext) ?></p>
      <img src="<?php echo $img ?>" alt="<?php echo $alt ?>">


  </body>
</html>
