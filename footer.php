<footer>
    <div class="l-footer">
        <div class="p-footer u-font-white">
            <?php
            $args = array(
                'menu' => 'footer',
                'menu_class' => 'p-footer__menu',
                'container' => false,
            );
            wp_nav_menu($args);
            ?>

            <div class="p-footer__license">
                <p>Copyright: RaiseTech</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>