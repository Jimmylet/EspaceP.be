<?php
/*
  Template Name: Single Contact
*/
include 'meta.php';
?>
<body class="no-js no-main contact">
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
        <div class="contact-top-wrap">
					
					<?php the_breadcrumb(); ?>
					
            <nav class="contact-list">
                <h2 class="contact-list__title">Choisissez votre ville</h2>
                <div class="contact-list__wrap">
									<?php global $post; $thePostID = $post->ID; ?>
									<?php foreach (b_get_menu_items('city-nav') as $navItem): ?>
										<a href="<?php echo $navItem->url;?>" class="contact-list__item <?php echo $thePostID == $navItem->id ? "contact-list__item--active" : "" ;?>  "><?php echo $navItem->label;?></a>
									<?php endforeach; ?>
									
								</div>
            </nav>
            <section class="team">
                <h2 class="team__title">L’équipe de <?php the_field('antennes_ville'); ?></h2>
                <div class="team__person__wrap">
                    <div class="team__person__row">
                    <!-- Start while with ACF -->
                        <?php if( have_rows('antennes_équipe') ):
                        while ( have_rows('antennes_équipe') ) : the_row();
                        $image = wp_get_attachment_image_src(get_sub_field('membre_photo')['id'], 'thumb-antenne-membre');?>
                        <div class="team__person">
                            <figure class="team__person__figure">
                                <img class="team__person__img" src="<?= $image[0]; ?>" width="115" height="115" alt="Photo de Joséphine Ange-Gardien">
                                <figcaption class="team__person__details">
                                    <p class="team__person__title"><?php echo the_sub_field('membre_name'); ?></p>
                                    <p class="team__person__paragraph">
                                        <?php echo the_sub_field('membre_description'); ?>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <!-- End while with ACF -->

                    </div>
                </div>
            </section>
        </div><a class="maps" href="https://www.google.be/maps/place/Espace+p...+Asbl/@50.6434524,5.5734331,17z/data=!4m13!1m7!3m6!1s0x47c0fa0eea904019:0xbf91a142d6e5adad!2sRue+Souverain+Pont+50,+4000+Li%C3%A8ge,+Belgique!3b1!8m2!3d50.6434524!4d5.5756218!3m4!1s0x47c0fa0eeaf2600d:0x57b2f2f122d7eb3c!8m2!3d50.6434448!4d5.5755642" title="Vers Google Maps" rel="external" target="_blank">
				<?php $image = get_field('antennes_map'); ?>
				<?php $imageResponsive = get_field('antennes_map-res'); ?>
            <div class="maps__img"><span class="maps__button">Aller vers Google Maps</span></div></a>
        <div class="contact-bottom-wrap">
            <section class="details">
                <h2 class="details__title">Contactez Espace P… <?php the_field('antennes_ville');?></h2>
                <div class="details__wrap-global">
                    <div class="details__wrap-left">
											<p class="details__paragraph">N’hésitez pas à prendre contact avec nous pour toute requêtes ou informations. Nous sommes à votre disposition pour vous venir en aide.</p>
                        <div class="details__wrap">
													<span class="details__subtitle">Adresse</span><span class="details__subtext"><?php the_field('antennes_adresse');?></span><span class="details__subtitle">Téléphone</span>
                        <span class="details__subtext"><?php the_field('antennes_telephone'); ?></span>
                        <?php if( get_field('antennes_fax') ): ?>
                        <span class="details__subtitle">Fax</span>
                        <span class="details__subtext"><?php the_field('antennes_fax'); ?></span>
                        <?php endif;?>
												</div>
                    </div>
                    <div class="details__wrap-right">
                        <form class="form">
                            <div class="form__top">
                                <div class="form__name">
                                    <label class="form__name__label" for="name">Votre nom</label>
                                    <input class="form__name__input" type="text" id="name" name="name" placeholder="Votre nom" required>
                                </div>
                                <div class="form__email">
                                    <label class="form__email__label" for="email">Votre email</label>
                                    <input class="form__email__input" type="email" id="email" name="email" placeholder="Votre email" required>
                                </div>
                            </div>
                            <div class="form__middle">
                                <div class="form__subject">
                                    <label class="form__subject__label" for="subject">Votre sujet</label>
                                    <input class="form__subject__input" type="text" id="subject" name="subject" placeholder="Le sujet de votre message" required>
                                </div>
                            </div>
                            <div class="form__bottom">
                                <div class="form__message">
                                    <label class="form__message__label" for="message">Votre message</label>
                                    <textarea class="form__message__input" id="message" name="message" placeholder="Votre message" required></textarea>
                                </div>
                            </div>
                            <input class="form__submit" type="submit" value="Envoyer le message">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
<?php include 'footer.php'; ?>
