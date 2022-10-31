<aside id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
    <h3 class="widget-title"><?php _e( 'Latest posts', 'shape' ); ?></h3>
    <?php wp_get_archives( array( 'type' => 'postbypost' , 'limit' => 5 ) ); ?>
</aside>