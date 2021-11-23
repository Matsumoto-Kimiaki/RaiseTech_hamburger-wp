<footer>
    <div class="l-footer">
        <div class="p-footer u-font-white">
           
            <?php wp_nav_menu( array(
                'menu' => 'footer',
                'menu_class' => 'p-footer__menu',
                'container' => false,
                'theme_location' => 'footer',
            ));
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