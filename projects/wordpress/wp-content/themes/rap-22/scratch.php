<?php
$featured_posts = get_field('featured_posts');
if( $featured_posts ): ?>
    <ul>
    <?php foreach( $featured_posts as $featured_post ): 
        $permalink = get_permalink( $featured_post->ID );
        $title = get_the_title( $featured_post->ID );
        $custom_field = get_field( 'field_name', $featured_post->ID );
        ?>
        <li>
            <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
            <span>A custom field from this post: <?php echo esc_html( $custom_field ); ?></span>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>