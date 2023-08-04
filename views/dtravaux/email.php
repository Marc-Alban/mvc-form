<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Email Template</title>
	<link rel="stylesheet" href="../asset/css/dtravauxEmail.css">
</head>
<body>
	<div class="container-page">
		<div class="header">
			<img src="../asset/img/mailDtravaux/logo_dtravaux.png" alt="logo_dtravaux">
			<img src="../asset/img/mailDtravaux/logo_epremio.png" alt="logo_epremio">
		</div>
		<div class="container-mail">
			<div class="background-image"></div>
			<div class="text-container">
				<h1>Financez votre
					<span class="break"></span>
					<span class="title-underline">projet DTRAVAUX.COM!</span>
				</h1>
				<p>Bonjour <?php echo $nom_prenom; ?></p>
				<p>Suite à votre demande avec DTravaux, E-Premio vous accompagne,
					<span class="break"></span>pour
					<span class="text-bold">comparer le meilleur</span>
					crédit du marché</p>
				<p class="text-bold">Simple, rapide, gratuit et vous choisissez !</p>
				<button>FInaliser votre projet travaux en 2 min
					<img src="../asset/img/mailDtravaux/call-to-action-dtravaux.png" alt="icon-fusee"></button>
			</div>
		</div>
		<div class="footer">
			<div class="block-1 text-bold"><img src="../asset/img/mailDtravaux/1dtravaux-picto.png" alt="icon"><p>Une offre pour tous vos projets et vos envies</p>
			</div>
			<div class="block-2 text-bold"><img src="../asset/img/mailDtravaux/2dtravaux-picto.png" alt="icon"><p>Financez votre projet travaux au meilleur taux</p>
			</div>
			<div class="block-3 text-bold"><img src="../asset/img/mailDtravaux/3dtravaux-picto.png" alt="icon"><p>Un crédit 100% en ligne avec un résultat immédiat</p>
			</div>
		</div>
	</div>
</body>
</html>
