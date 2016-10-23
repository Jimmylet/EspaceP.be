<nav class="menu">
    <div class="fakemenu"></div>
    <h2 class="menu__title">Menu de navigation</h2>
    <div class="menu__wrap">
        <div class="menu__icon__wrap">
            <input class="menu__icon" id="menu__icon" type="checkbox">
            <label class="menu__icon__label" id="menu__icon__label" for="menu__icon"><span></span></label>
        </div>
        <ul class="menu__list">
            <li class="menu__item">
                <a class="menu__link menu__logo menu__item0" href="<?php echo get_home_url(); ?>">Accueil</a>
                <?php global $post; $thePostID = $post->ID; ?>
                <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
                    <a href="<?php echo $navItem->url;?>" class="menu__link <?php echo $thePostID == $navItem->id ? "menu-active" : "" ;?> <?php echo $navItem->class;?> "><?php echo $navItem->label;?></a>
                <?php endforeach; ?>
								<a href="<?php the_permalink(241); ?>" class="menu__link menu__link-res menu__item5">Je suis un TDS</a>
								<a href="<?php the_permalink(209); ?>" class="menu__link menu__link-res menu__item6" >Je suis un étudiant</a>
								<a href="<?php the_permalink(185); ?>" class="menu__link menu__link-res menu__item7">Je suis un sympathisant</a>
								<a href="<?php the_permalink(128); ?>" class="menu__link menu__link-res menu__item8">Je suis un client</a>
            </li>
        </ul>
    </div>
</nav>
<?php get_search_form(); ?>
