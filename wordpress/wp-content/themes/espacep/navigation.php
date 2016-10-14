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
                    <a href="<?php echo $navItem->url;?>" class="menu__link <?php echo $thePostID == $navItem->id ? "menu-active" : "" ;?>  "><?php echo $navItem->label;?></a>
                <?php endforeach; ?>
            </li>
        </ul>
    </div>
</nav>
<form class="menu__search" action="index.php" method="get">
    <label class="menu__search__label" for="search"></label>
    <input class="menu__search__input" type="search" id="search" required placeholder="Rechercher">
    <input class="menu__search__submit" type="image" name="image" alt="Boutton de recherche" src="<?php echo $images . '/svg/search.svg'; ?>" width="37"
           height="37">
</form>
