<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Demande de crédit | Solutis</title>
   <!-- Style Css -->
   <?php
  if(isset($_GET['p'])) {
    $code_origine = $_GET['p'];
    $arrayStyle = ['conso','localhost','responis','dtravauxForm'];
    if(in_array($code_origine, $arrayStyle)) {
      echo '<link rel="stylesheet" type="text/css" href="asset/css/'.$code_origine.'.css">';
    }
    else {
      echo '<link rel="stylesheet" type="text/css" href="asset/css/default.css">';
    }
  }
?>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" >
    <meta name="viewport" content="width=device-width, initial-scale=1"/>  <!-- CDN Js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <body>
  <!-- Form conso début -->
<main>
  <?php if(!empty($datas)): ?>
  <ul class="errors">
    <?php foreach($datas as $error): ?>
      <li><?php echo $error; ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
  <?= $content ?>
  <div class="links-container">
  <a href="https://www.solutis.fr/formulaire/mentions-legales.html" class="gray-link" target="_blank">Mentions légales</a>
  <span class="separator"></span>
  <a href="https://www.solutis.fr/formulaire/politique-confidentialite.html" class="gray-link" target="_blank">Politique de confidentialité</a>
  <span class="separator"></span>
  <a href="../../asset/folder/CGU.docx" class="gray-link">CGU</a>
</div>

</main>
  <!-- Script Js -->
  <script src="asset/js/check.js"></script>
  <script src="asset/js/btnChild.js"></script>
  <script src="asset/js/date.js"></script>
  <script src="asset/js/apiGeo.js"></script>
  <script src="asset/js/script.js"></script>
</body>
</html>