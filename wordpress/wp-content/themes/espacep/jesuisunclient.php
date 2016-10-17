<?php
/*
Template Name: Je suis un client
*/
include 'meta.php';?>

<body class="no-js no-main client-page">
<header class="header">
	<div class="header__wrap-title">
		<h1 class="header__title" aria-level="1">
			<?php echo the_title(); ?> - <?php echo bloginfo(); ?>
		</h1>
	</div>
	<?php include 'navigation.php'; ?>
</header>
<div class="site-content">
	<main>
		<div class="client-top-wrap">
			<?php the_breadcrumb(); ?>
			<section class="client">
				<h2 class="client__title">Je suis un client</h2>
				<?php the_field('client_intro'); ?>
				<span class="client__signature">Tendrement,<strong>Les travailleurs du sexe</strong><img alt="Lèvres enduite d’un rouge à lèvre" width="46" height="33" src="<?php echo $images . '/svg/bigbisous.svg';?>"></span>
			</section>
		</div>
		<section class="guideclient">
			<h2 class="guideclient__title"><span>Le guide du parfait client</span></h2>
			<div class="guideclient__wrap">
				<ul class="guideclient__categories">
					<li class="guideclient__categories__item"><a class="guideclient__categories__link selected" href="#section1">Des réponses à vos questions</a></li>
					<li class="guideclient__categories__item"><a class="guideclient__categories__link" href="#section2">Quelques tuyaux pour que l’aventure se passe bien</a></li>
					<li class="guideclient__categories__item"><a class="guideclient__categories__link" href="#section3">Une liste des services sexuels les plus courants</a></li>
					<li class="guideclient__categories__item"><a class="guideclient__categories__link" href="#section4">Les risques qu’il vaut mieux éviter</a></li>
					<li class="guideclient__categories__item"><a class="guideclient__categories__link" href="#section5">Le point sur la violence</a></li>
					<li class="guideclient__categories__item"><a class="guideclient__categories__link" href="#section6">Le point sur votre santé sexuelle</a></li>
					<li class="guideclient__categories__item"><a class="guideclient__categories__link" href="#section7">Un relevé des principales IST Un rappel sur la façon d’utiliser la capote</a></li>
					<li class="guideclient__categories__item"><a class="guideclient__categories__link" href="#section8">Un rappel sur la façon d’utiliser la capote</a></li>
				</ul>
				<section class="guideclient__section">
					<ul class="guideclient__section__group" id="section1">
						<li class="guideclient__section__title">
							<h3>Des réponses à vos questions</h3>
						</li>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">Qu’est-ce que les personnes prostituées acceptent de faire, que refusent-elles ?</a>
							<div class="guideclient__section__content">
								<p class="guideclient__section__paragraph">«&nbsp;Il n’y a pas deux travailleuses du sexe identiques. Chaque travailleuse du sexe établit ses propres règles et ses limites. Chacune accepte de faire des choses et refuse d’en faire d’autres. Comme client, tu dois demander d’avance et clairement les services que tu veux recevoir. Suite à quoi, la travailleuse du sexe avec qui tu fais affaire te dira ce qu’elle accepte de faire pour répondre à tes désirs. Elle te fera aussi clairement part de ses limites par rapport aux choses qu’elle refuse de faire. Les limites des travailleuses du sexe ne sont pas négociables. Tu dois les respecter. Si la travailleuse du sexe avec qui tu as pris contact a ses limites par rapport aux services que tu désirerais, soit tu acceptes de recevoir les services qu’elle est prête à t’offrir, tu respectes les limites convenues et tu n’insistes pas, soit tu prends contact avec quelqu’un d’autre&nbsp;»</p>
							</div>
						</li>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">Est-ce qu’il est possible d’avoir une relation sans préservatif ?</a>
							<div class="guideclient__section__content">
								<p class="guideclient__section__paragraph">« Nous sommes toujours étonnées par cette demande. Plusieurs clients ne semblent pas se rendre compte qu'il est de leur propre intérêt d'utiliser un préservatif, de se protéger et de protéger l'ensemble de leurs partenaires contre les infections sexuellement transmises, les IST. Celles-ci sont pourtant assez répandues et il est impossible de savoir si une personne est porteuse d'une infection ou non en la regardant. L'utilisation du préservatif fait partie de notre travail. Il nous protège et il te protège aussi. Nous l’exigeons, et c'est aussi dans ton intérêt. »</p>
							</div>
						</li>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">Est-ce que les personnes qui se prostituent ont le sida ou d’autres IST (infections sexuellement transmises) ?</a>
							<div class="guideclient__section__content">
								<p class="guideclient__section__paragraph">« Nous sommes toujours étonnées par cette demande. Plusieurs clients ne semblent pas se rendre compte qu'il est de leur propre intérêt d'utiliser un préservatif, de se protéger et de protéger l'ensemble de leurs partenaires contre les infections sexuellement transmises, les IST. Celles-ci sont pourtant assez répandues et il est impossible de savoir si une personne est porteuse d'une infection ou non en la regardant. L'utilisation du préservatif fait partie de notre travail. Il nous protège et il te protège aussi. Nous l’exigeons, et c'est aussi dans ton intérêt. »</p>
							</div>
						</li>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">Qu’est-ce que je dois faire si je croise par hasard une personne prostituée que je connais en dehors de ses heures de travail ?</a>
							<div class="guideclient__section__content">
								<p class="guideclient__section__paragraph">« Ce qui arrivera dépend de toi et de la travailleuse du sexe en question. Si cela t'inquiète, parles-en avec elle auparavant. En général, si elle ne t'aborde pas, c'est qu'il est préférable de rester discret et de l’ignorer. Certaines préfèrent ne pas être abordées du tout en dehors du travail. »</p>
							</div>
						</li>
					</ul>
				</section>
				<section class="guideclient__section">
					<ul class="guideclient__section__group" id="section2">
						<li class="guideclient__section__title">
							<h3>Quelques tuyaux pour que l’aventure se passe bien</h3>
						</li>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">Essayer d’être poli et respectueur.</a>
							<div class="guideclient__section__content">
								<p class="guideclient__section__paragraph">Cela est une évidence, mais pour que la rencontre se passe bien, soyez poli et respecter la personne avec qui vous envisagez une relation.</p>
							</div>
						</li>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">Concluez des arrangements clairs</a>
							<div class="guideclient__section__content">
								<p class="guideclient__section__paragraph">Déterminez le montant d’argent que vous êtes prêt à dépenser, ce que vous voulez, et demandez-en le prix. Voilà qui vous évitera de vous énerver après coup. Chaque prostituée a ses limites et a le droit de dire non.</p>
							</div>
						</li>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">Il faut payer d’avance.</a>
							<div class="guideclient__section__content">
								<p class="guideclient__section__paragraph">Payez d’avance et faites en sorte que la travailleuse n’ait pas à vous le demander. Soyez discret, pour votre sécurité et pour la leur.</p>
							</div>
						</li>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">Respecter la limite de temps</a>
							<div class="guideclient__section__content">
								<p class="guideclient__section__paragraph">Respectez la limite de temps qui vous est allouée. Si vous voulez prolonger la durée du service, renégociez le prix.</p>
							</div>
						</li>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">Communiquez vos besoins</a>
							<div class="guideclient__section__content">
								<p class="guideclient__section__paragraph">Pour une expérience agréable, communiquez vos besoins, ce que vous préférez, ce que vous n’aimez pas.</p>
							</div>
						</li>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">Hygiène : soyez un client que l’on a plaisir à voir</a>
							<div class="guideclient__section__content">
								<p class="guideclient__section__paragraph">Votre hygiène sera appréciée par votre partenaire. Prenez une douche et assurez-vous de bien savonner et laver vos zones de plaisir : pénis, scrotum (couilles), anus.</p>
							</div>
						</li>
					</ul>
				</section>
				<section class="guideclient__section" id="section3">
					<ul class="guideclient__section__group">
						<li class="guideclient__section__title">
							<h3>Les services les plus courant</h3>
						</li>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">Annulingus</a>
							<div class="guideclient__section__content">
								<p class="guideclient__section__paragraph">Excitation de l’anus par des caresses faites avec la langue et la bouche.</p>
							</div>
						</li>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">Branlette, masturbation</a>
							<div class="guideclient__section__content">
								<p class="guideclient__section__paragraph">C’est une stimulation du pénis ou du clitoris avec la main, d’autres parties du corps, un vibromasseur.</p>
							</div>
						</li>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">Branlette espagnole</a>
							<div class="guideclient__section__content">
								<p class="guideclient__section__paragraph">Masturbation du pénis entre les seins de la travailleuse du sexe</p>
							</div>
						</li>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">Branlette espagnole</a>
							<div class="guideclient__section__content">
								<p class="guideclient__section__paragraph">Masturbation du pénis entre les seins de la travailleuse du sexe</p>
							</div>
						</li>
					</ul>
				</section>
			</div>
		</section>
	</main>
	<?php include 'footer.php'; ?>
