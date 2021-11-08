<aside>
    <div class="l-sidebar u-font-grey">
        <button class="c-cross-button"><span>閉じるボタン</span></button>

        <?php $args = array(
            'menu' => 'sidebar-menu',
            'menu_class' => 'p-menu-list',
            'container' => false,
            'theme_location' => 'sidebar',
        );
        wp_nav_menu($args);
        ?>

    </div>

    <div class="p-menu-bg"></div>
</aside>
</div>