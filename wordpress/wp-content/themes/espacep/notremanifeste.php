<?php
/*
Template Name: Notre manifeste
*/
include 'meta.php';?>

<body class="no-js no-main manifeste">
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
        <div class="mag-header">
            <section class="mag-header__wrap-top">
                
								<?php the_breadcrumb(); ?>
							
                <h2 class="mag-header__wrap-top__title" id="manifeste-top">Lisez et signez notre manifeste</h2><small class="mag-header__wrap-top__subtitle"><?php echo get_bloginfo('description'); ?></small>
            </section>
        </div>
        <div class="tds"><span class="tds__title">Travailleur du sexe (tds)</span>
            <?php the_field('man_tds-desc'); ?>
        </div>
        <article class="mag-constats">
            <h3 class="mag-constats__title">Forts de 25 ans de travail de terrain, nous formulons les constats suivant</h3>
            <?php if( have_rows('man_gr1') ):
            while ( have_rows('man_gr1') ) : the_row(); ?>
            <section class="mag-chapter">
                <h4 class="mag-chapter__title">
                    <span class="mag-chapter__number"><?php the_sub_field('gr1_num'); ?>/</span>
                    <?php the_sub_field('gr1_title'); ?>
                </h4>
                <?php the_sub_field('gr1_texte'); ?>
            </section>
            <?php endwhile; ?>
            <?php endif; ?>

            <div class="mag-quote-img">
                <blockquote data-type="parallax" data-depth="-0.06">
                    <?php the_field('man_quoteR1'); ?>
                </blockquote>
            </div>

            <?php if( have_rows('man_gr2') ):
            while ( have_rows('man_gr2') ) : the_row(); ?>
            <section class="mag-chapter">
                <h4 class="mag-chapter__title"><span class="mag-chapter__number"><?php the_sub_field('gr2_num'); ?>/</span><?php the_sub_field('gr2_title'); ?></h4>
                <?php the_sub_field('gr2_texte'); ?>
            </section>
            <?php endwhile; ?>
            <?php endif; ?>

            <div class="mag-quote-text">
                <blockquote><?php the_field('man_quoteT1'); ?></blockquote>
            </div>
            <?php if( have_rows('man_gr3') ):
            while ( have_rows('man_gr3') ) : the_row(); ?>
            <section class="mag-chapter">
                <h4 class="mag-chapter__title"><span class="mag-chapter__number"><?php the_sub_field('gr3_num'); ?>/</span>
                    <?php the_sub_field('gr3_titre'); ?></h4>
                <p class="mag-chapter__paragraph"><?php the_sub_field('gr3_texte'); ?></p>
            </section>
            <?php endwhile; ?>
            <?php endif; ?>

        </article>
        <article class="mag-propo">
            <h3 class="mag-propo__title">Propositions et revendications</h3>
            <div class="mag-propo__wrap">
                <?php the_field('man_propositions'); ?>
            </div>
            <div class="mag-quote-img mag-quote-img2">
                <blockquote data-type="parallax" data-depth="-0.06"><?php the_field('man_quoteR2'); ?></blockquote>
            </div>
            <?php if( have_rows('man_gr4') ):
            while ( have_rows('man_gr4') ) : the_row(); ?>
            <section class="mag-chapter">
                <h4 class="mag-chapter__title"><span class="mag-chapter__number"><?php the_sub_field('gr4_num'); ?>/</span><?php the_sub_field('gr4_titre'); ?></h4>
                <p class="mag-chapter__paragraph"><?php the_sub_field('gr4_texte'); ?></p>
            </section>
            <?php endwhile; ?>
            <?php endif; ?>

            <div class="mag-quote-text">
                <blockquote><?php the_field('man_quoteT2'); ?></blockquote>
            </div>

            <?php if( have_rows('man_gr5') ):
            while ( have_rows('man_gr5') ) : the_row(); ?>
            <section class="mag-chapter">
                <h4 class="mag-chapter__title"><span class="mag-chapter__number"><?php the_sub_field('gr5_num'); ?>/</span><?php the_sub_field('gr5_titre'); ?></h4>
                <?php the_sub_field('gr5_texte'); ?>
            </section>
            <?php endwhile; ?>
            <?php endif; ?>
        </article>
        <section class="signez" id="signez">
            <h2 class="signez__title">Signez notre manifeste</h2>
            <p class="signez__paragraph">Si vous êtes en accord avec ce que vous venez de lire, témoignez de votre approbation en laissant un commentaire ci-dessous. Veuillez aussi indiquer votre profession. Si vous voulez rester anonyme, vous pouvez choisir un pseudo à la place de votre nom.</p>


            <div class="signez__comwrap">
                <section class="commentaire">
                    <h2 class="signez__comwrap__title"><?php echo (count(get_comments(array('post_id'=>get_the_ID())))); ?> signatures</h2>
                    <?php $comment=get_comments(array('post_id'=>get_the_ID()));?>
                    <?php foreach($comment as $key):?>
                    <div class="comment" id="comment-<?php echo $key->comment_ID ;?>">
                    <p class="signez__comwrap__namedate">
                    <?php echo($key->comment_author);?>
                    <time>
                        Le <?php the_time('j F Y');?>
                    </time>
                    </p>
                    <p class="signez__comwrap__commentaire">
                    <?php echo $key->comment_content;?>
                    </p>
                    </div>
                    <?php endforeach;?>
                </section>

                <div class="signez__send">
                    <p class="signez__send__title" id="signer">Vous aussi, signez notre manifeste</p>
                    <?php comment_form($comments_args = array(
                        // Change the title for submit button
                        'label_submit' => __( 'Signer&nbsp;!' ),
                        'title_reply_before' => __(''),
                        'title_reply_after' => __(''),
                        'title_reply' => __(''),
                        'comment_notes_before' => __('<p class="signez__send__notes">' . __( 'Votre adresse de messagerie ne sera pas publiée. Tous les champs sont obligatoire.') . '</p>')
                    )); ?>
                </div>

        </section>
        <div class="manifeste-button"><a class="manifeste-button__top" href="#" title="Remonter en haut"><svg width="19" height="19" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg"><path class="manifeste-button__top__svg" d="M18.856 10.018c0 .412-.149.775-.448 1.089l-.908.908c-.307.307-.674.46-1.101.46-.436 0-.799-.153-1.089-.46l-3.558-3.546v8.52c0 .42-.151.76-.454 1.023-.303.262-.668.393-1.095.393h-1.549c-.428 0-.793-.131-1.095-.393-.303-.262-.454-.603-.454-1.023v-8.52l-3.558 3.546c-.29.307-.654.46-1.089.46-.436 0-.799-.153-1.089-.46l-.908-.908c-.307-.307-.46-.67-.46-1.089 0-.428.153-.795.46-1.101l7.879-7.879c.282-.299.645-.448 1.089-.448.436 0 .803.149 1.101.448l7.879 7.879c.299.315.448.682.448 1.101z" fill="#000"/></svg><span class="manifeste-button__top__text">Remonter en haut</span></a><a class="manifeste-button__signez" href="#" title="Signez le manifeste">
                <svg width="19" height="19" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg"><path class="manifeste-button__signez__svg" d="M13.759 7.344l2.755 1.012-2.291 6.238c-.214.587-1.377 2.423-2.187 2.797l-.197.536c-.05.136-.179.221-.315.221l-.116-.021c-.174-.064-.264-.257-.199-.432l.186-.507c-.411-.798-.104-3.117.076-3.607l2.288-6.238zm3.987-6.601c-.758-.277-1.644.296-1.898.988l-1.659 4.521 2.754 1.011 1.657-4.52c.209-.566-.095-1.722-.854-2zm-4.985 6.367l.234.042c.273 0 .53-.167.63-.439l1.751-4.723c.129-.348-.049-.735-.397-.863-.351-.127-.735.049-.864.397l-1.751 4.723c-.129.348.049.735.397.863zm-2.819 8.856c-.181-.171-.406-.384-.77-.546-.3-.134-.592-.14-.806-.145l-.074-.001c-.134-.366-.405-.596-.811-.686-.538-.114-.968.14-1.266.336l.102-.457c.103-.415.209-.843.13-1.245-.062-.317-.33-.553-.653-.576-.833-.046-1.513.402-2.113.807-.63.425-1.033.679-1.435.535-.49-.174-.54-1.502-.304-2.684.211-1.065.603-3.047 1.609-3.948.339-.303.829-.631 1.232-.472.474.186.865.966.953 1.896.036.392.379.68.778.645.393-.036.682-.385.645-.778-.142-1.515-.852-2.7-1.853-3.094-.6-.233-1.553-.296-2.709.738-1.257 1.126-1.722 3.035-2.058 4.735-.169.849-.58 3.666 1.227 4.309 1.101.392 1.995-.213 2.713-.698l.387-.254c-.119.518-.194 1.073.119 1.54.467.702 1.126.778 1.96.229l.104-.069c.077.162.214.339.462.461.3.147.6.154.819.16l.26.022c.134.059.214.132.368.278.116.109.238.223.393.34.129.096.279.142.427.142.217 0 .432-.099.572-.286.237-.316.172-.764-.144-1.001l-.265-.234z" fill="#383838"/></svg>Signer le manifeste</a></div>
</main>
    <script type="text/javascript">
        window.addEventListener('scroll', function(event) {
            var depth, i, layer, layers, len, movement, topDistance, translate3d;
            topDistance = this.pageYOffset;
            layers = document.querySelectorAll("[data-type='parallax']");
            for (i = 0, len = layers.length; i < len; i++) {
                layer = layers[i];
                depth = layer.getAttribute('data-depth');
                movement = -(topDistance * depth);
                translate3d = 'translate3d(0, ' + movement + 'px, 0)';
                layer.style['-webkit-transform'] = translate3d;
                layer.style['-moz-transform'] = translate3d;
                layer.style['-ms-transform'] = translate3d;
                layer.style['-o-transform'] = translate3d;
                layer.style.transform = translate3d;
            }
        });
    </script>
<?php include 'footer.php'; ?>

