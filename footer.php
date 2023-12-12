<footer
        class="flex flex-col w-full min-h-fit items-center justify-around p-2 font-secondary-light bg-gray-700 lg:flex-row">
        <ul class="flex flex-col w-1/3 items-center my-4">
            <h3 class="font-secondary">About us</h3>
            <p class="max-w-[12rem] text-center">
                At cafe italia, we believe that great coffee is an art form. From the careful selection of
                premium coffee beans to the expertly crafted brewing techniques.
            </p>
        </ul>
        <?php
            wp_nav_menu( array(
                'menu'=>'footer-menu',
                'container'=>'',
                'menu_class'=>'flex items-center justify-around w-2/3 my-4',
            ) )
        ?>
    </footer>
</body>
</html>