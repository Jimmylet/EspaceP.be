<footer class="footer">
	<div class="footer__section1">
		<div class="footer__wrap">
			<div class="footer__espacep"><span class="footer__espacep__logo">Logo d’espace P…</span><span
								class="footer__espacep__title">Espace P…</span>
				<p class="footer__espacep__description">Espace P… est une A.S.B.L ayant pour but de soutenir, défendre
					et accompagner les travailleurs du sexe, que ce soit dans la vie ou dans leur métier.</p>
			</div>
			<div class="footer__informations"><span class="footer__informations__title">Informations</span><a
								class="footer__informations__link" href="<?php echo the_permalink('241'); ?>" title="Aller vers la page…">Je suis un travailleur du
					sexe</a><a class="footer__informations__link" href="<?php echo the_permalink('209'); ?>" title="Aller vers la page…">Je suis un
					étudiant</a><a class="footer__informations__link" href="<?php echo the_permalink('185'); ?>" title="Aller vers la page…">Je suis un
					sympathisant</a><a class="footer__informations__link" href="<?php the_permalink(128); ?>"
								title="Aller vers la page…">Je suis un potentiel client</a></div>
			<div class="footer__contacts">
				<span class="footer__contacts__title">Contacts</span>
				<div class="footer__contacts__wrap">
					<?php foreach (b_get_menu_items('city-nav') as $navItem): ?>
						<a href="<?php echo $navItem->url;?>" class="footer__contacts__link" title="Aller sur la page contact de <?php echo $navItem->label;?>">
							<?php $cityOnly = str_replace('Espace P… - ', '', $navItem->label); ?>
							<?php echo $cityOnly ;?>
						</a>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="footer__navigation"><span class="footer__navigation__title">Navigation</span><a
								class="footer__navigation__link" href="<?php the_permalink(25); ?>" title="Aller vers la page…">Achetez
					notre magazine</a><a class="footer__navigation__link" href="<?php the_permalink(27); ?>"
								title="Aller vers la page…">Nos partenaires</a><a
								class="footer__navigation__link" href="<?php the_permalink(29); ?>" title="Aller vers la page…">Notre
					manifeste</a></div>
		</div>
	</div>
	<div class="subfooter">
		<div class="subfooter__wrap"><span class="subfooter__copyright">© Espace P… - Tous droits réservés.</span>
			<a class="subfooter__webdesigner" href="http://letecheur.me" rel="external"
							title="Vers le site du webdesigner">Made
				with<span class="subfooter__webdesigner__heart">&nbsp;❤&nbsp;</span>by Jimmy Letecheur</a>
			<div class="subfooter__espaceplegal"><a class="subfooter__espaceplegal__rapport" href="rapport.html"
								title="Vers notre rapport d’activité">Notre rapport d’activité</a><a
								class="subfooter__espaceplegal__statut" href="<?php the_permalink('118'); ?>" title="Vers notre statut légal">Notre
					statut</a><a class="subfooter__espaceplegal__facebook" href="https://www.facebook.com/Espace-P-1166947833360506"
								title="Vers notre page facebook"><span class="subfooter__espaceplegal__facebook__text">Notre
						facebook</span></a>
			</div>
		</div>
	</div>
</footer>
<?php if (!is_page(19)): ?> <!-- uniquement sur home -->
</div> <!-- end site-content -->
<?php endif; ?>
<?php wp_footer(); ?>
<script src="<?php echo $scripts . '/main.js'; ?>"></script>
<?php if (is_page(29)): ?>
<script src="<?php echo $scripts . '/button-fixed-manifeste.js'; ?>"></script>
<?php endif; ?>
<?php if (is_page(128)): ?> <!-- Si c'est la page client -->
<script src="<?php echo $scripts . '/client.js'; ?>"></script>
<?php endif; ?>
<?php if (is_page(185) || is_page(128) || is_page(241) || is_page('128') || is_page(287) ||is_page(209)): ?> <!-- Si c'est une des page profile -->
<script src="<?php echo $scripts . '/button-scroll-profile.js'; ?>"></script>
<?php endif; ?>
<script>
	$(".select").change(function() {
		$(this).css('color','#383838')
	})
</script>
<script>
	$(".close-alert-lang").click(function () {
			$(".lang-alert").remove();
  })
</script>
</body>
</html>
