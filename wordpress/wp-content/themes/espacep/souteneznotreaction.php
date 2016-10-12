<?php
/*
Template Name: Magazine
*/
include 'meta.php';
?>
<body class="no-js no-main">
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
    <div class="mag-wrap-top">
        <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <li class="breadcrumb__link" itemprop="title"><a
                    class="breadcrumb__link__text breadcrumb__link__text--home" itemprop="link" href="index.html"
                    title="Aller vers l’accueil"><span class="breadcrumb__link__text--hidden">Accueil</span></a>
            </li>
            <li class="breadcrumb__link" itemprop="title"><a class="breadcrumb__link__text" itemprop="link"
                                                             href="#">Soutenez notre action</a></li>
        </ol>
        <section class="mag-content"><h2 class="mag-content__title">Abonnez vous à notre magazine</h2>
            <blockquote class="mag-content__blockquote">
                <p class="mag-content__blockquote__text">
                    <?php the_field('mag_cite-intro'); ?>
                </p>
                <cite class="mag-content__author"><span class="mag-content__profession">L’équipe Espace P…</span></cite>
            </blockquote>
            <p class="mag-content__receivemoney">L’argent récolté sert entièrement notre cause</p></section>
        <section class="choose-plan"><h2 class="choose-plan__title-main">Choisissez votre plan</h2>
            <div class="choose-plan__wrap">
                <section class="choose-plan__normal"><h3 class="choose-plan__title">
                        Plan&nbsp;<strong>normal</strong></h3>
                    <div class="choose-plan__price"><span class="choose-plan__price__euro">€</span><span
                            class="choose-plan__price__number">20</span></div>
                    <ul class="choose-plan__list">
                        <li class="choose-plan__item">1 an d’abonnement</li>
                        <li class="choose-plan__item">4 numéros</li>
                    </ul>
                    <span class="choose-plan__buy choose-plan__buy--normal">Commander</span></section>
                <section class="choose-plan__soutien"><h3 class="choose-plan__title">
                        Plan&nbsp;<strong>soutien</strong></h3>
                    <div class="choose-plan__price"><span class="choose-plan__price__euro">€</span><span
                            class="choose-plan__price__number">50</span></div>
                    <ul class="choose-plan__list">
                        <li class="choose-plan__item">1 an d’abonnement</li>
                        <li class="choose-plan__item">4 numéros</li>
                        <li class="choose-plan__item">Reconnaissance éternelle</li>
                    </ul>
                    <span class="choose-plan__buy choose-plan__buy--soutien">Commander</span></section>
            </div>
            <div class="infos-email"><p class="infos-email__text">Pour toute informations, envoyez un email à <span
                        class="infos-email__email">espacepliege@gmail.com</span></p></div>
        </section>
        <section class="payement"><h2 class="payement__title-main">Pour payer, veuillez suivre les étapes
                suivantes</h2>
            <div class="clickplan clickplannormal"><span class="clickplan__desire">Vous désirez&nbsp;:</span><span
                    class="clickplan__title">Plan <strong>normal</strong></span><span class="clickplan__amount">Envoyez la somme de <strong>20€</strong> au numéro de compte suivant&nbsp;:</span><span
                    class="clickplan__account-number">
                        <?php the_field('mag_numcompte'); ?>
                    </span><span
                    class="clickplan__communication">Indiquez vos coordonnées en communication.</span><span
                    class="clickplan__confirm">Confirmez nous votre payement par email à <strong>espaceliege@gmail.com</strong></span><span
                    class="clickplan__exit"><svg width="30" height="29" viewBox="0 0 30 29"
                                                 xmlns="http://www.w3.org/2000/svg" class="clickplan__exit__svg"><g
                            fill="none" fill-rule="evenodd"><path
                                d="M24.86 4.2c-5.56-5.6-14.62-5.6-20.2 0-5.55 5.55-5.55 14.6 0 20.18 5.58 5.56 14.64 5.56 20.2 0 5.57-5.57 5.57-14.63 0-20.2z"
                                fill="#D85E72"/><path class="clickplan__exit__svg__cross"
                                                      d="M20.4 19.9c-.43.44-1.13.44-1.55 0l-4.08-4.07-4.27 4.28c-.43.45-1.13.45-1.55 0-.43-.4-.43-1.1 0-1.53l4.27-4.27-4.08-4.08c-.43-.42-.43-1.12 0-1.55.43-.43 1.12-.43 1.55 0l4.05 4.08 3.88-3.88c.43-.43 1.13-.43 1.55 0 .42.43.42 1.12 0 1.55l-3.9 3.88 4.1 4.08c.42.43.42 1.12 0 1.55z"
                                                      fill="#FFF"/></g></svg></span></div>
            <div class="clickplan clickplansoutien"><span class="clickplan__desire">Vous désirez&nbsp;:</span><span
                    class="clickplan__title">Plan <strong>soutien</strong></span><span class="clickplan__amount">Envoyez la somme de <strong>50€</strong> au numéro de compte suivant&nbsp;:</span><span
                    class="clickplan__account-number"><?php the_field('mag_numcompte'); ?></span><span
                    class="clickplan__communication">Indiquez vos coordonnées en communication.</span><span
                    class="clickplan__confirm">Confirmez nous votre payement par email à <strong>espaceliege@gmail.com</strong></span><span
                    class="clickplan__exit"><svg width="30" height="29" viewBox="0 0 30 29"
                                                 xmlns="http://www.w3.org/2000/svg" class="clickplan__exit__svg"><g
                            fill="none" fill-rule="evenodd"><path
                                d="M24.86 4.2c-5.56-5.6-14.62-5.6-20.2 0-5.55 5.55-5.55 14.6 0 20.18 5.58 5.56 14.64 5.56 20.2 0 5.57-5.57 5.57-14.63 0-20.2z"
                                fill="#D85E72"/><path class="clickplan__exit__svg__cross"
                                                      d="M20.4 19.9c-.43.44-1.13.44-1.55 0l-4.08-4.07-4.27 4.28c-.43.45-1.13.45-1.55 0-.43-.4-.43-1.1 0-1.53l4.27-4.27-4.08-4.08c-.43-.42-.43-1.12 0-1.55.43-.43 1.12-.43 1.55 0l4.05 4.08 3.88-3.88c.43-.43 1.13-.43 1.55 0 .42.43.42 1.12 0 1.55l-3.9 3.88 4.1 4.08c.42.43.42 1.12 0 1.55z"
                                                      fill="#FFF"/></g></svg></span></div>
        </section>
    </div> <!-- mag__wrap-top -->
</main>
<?php include 'footer.php'; ?>
