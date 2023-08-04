<?php
$url = $_SERVER['REQUEST_URI'];
$urlExplode = explode('/', $url);
$dataUrl = $urlExplode[1];
?>
<!DOCTYPE html>
<html>

<head>
  <title>Page de confirmation</title>
  <link rel="stylesheet" href="../asset/css/confirmation.css">
</head>

<body>
  <div id="vierge">
    <div id="simulator_content_block" class="row py-4">
      <div class="h2_text custom-content-block">
        <div id="contact">
          <div class="mx-auto my-4">
            <div class="col-md-12 bg-green txt_white">
              <div class="row">
                <div class="col-md-12 position-relative mx-auto text-center pt-4 block-vert">
                  <h1 class="text-white">Confirmation de votre demande de prêt</h1>
                </div>
              </div>
            </div>
            <div class="row col-md-12" style="text-align: center;">
              <p class="tab_result"><?= $_SESSION['result'] ?></p>

              <p style="text-align: center;" class="img-separator"><img alt="separateur rouge" class="mb-4 separator" src="../asset/img/separator.svg"></p>

              <p style="text-align: center;margin:auto!important;">Nous vous remercions pour votre confiance.</p>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>

</html>