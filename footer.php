                </section>
				<aside id="sidebar">
				<?php if ( is_active_sidebar( 'main-sidebar') ) : ?>
					<?php dynamic_sidebar( 'main-sidebar' ); ?>
				<?php endif; ?>
				</aside>
            </div>
            <footer>
            	<div class="content">
					<?php
					/*
					Menu follows pattern:
					<nav><ul class="navigation"><li><a></a></li></ul></nav>
					*/
					wp_nav_menu( array(
						'menu' => 'main-menu',
						'menu_class' => 'navigation',
						'container' => 'nav'
					) );
					?>
					<div class="copyright">&copy; <?php echo date('Y'); ?> onefortyeight.com</div>
					<div class="authors">Luciano Rodr&#237;guez - Antonio Mart&#237;n Tello</div>
					<div class="rights">All rights reserved</div>
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>