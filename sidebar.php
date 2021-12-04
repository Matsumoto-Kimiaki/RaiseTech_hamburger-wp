<aside>
    <div class="l-sidebar u-font-grey" ontouchstart="">
        <button class="c-cross-button"><span>閉じるボタン</span></button>

        <?php wp_nav_menu( array(
            'menu' => 'sidebar-menu',
            'menu_class' => 'p-menu-list',
            'container' => false,
            'theme_location' => 'sidebar',
        ));
        ?>

    </div>

    <div class="p-menu-bg"></div>
</aside>
</div>