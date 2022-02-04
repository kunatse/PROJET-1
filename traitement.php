<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

  <?php
/* Nom du script : traitement.php (processform.php)
 * Description :   Affiche les données transmises depuis
 *                 un formulaire.
 */
  ?>

  
        <head>
            <title>Adresse du client</title>
        </head>

    <body>
    <?php
    foreach ($_POST as $cle => $valeur)
    {  
        echo "$cle = $valeur<br>";
    }
    
   ?>
    </body>

    </html> 
    