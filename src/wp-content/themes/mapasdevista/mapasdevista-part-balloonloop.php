<?php //global $post; ?>
<div id="balloon_<?php the_ID(); ?>" class="result clearfix">
    <div class="balloon">
        <div class="pin"><?php the_pin(); ?></div>
        <div class="content">
            <p class="metadata date bottom"><?php the_time( get_option('date_format') ); ?></p>
            <h1 class="bottom"><a class="js-link-to-post" id="balloon-post-link-<?php the_ID(); ?>" href="<?php the_permalink(); ?>" onClick="return mapasdevista.linkToPost(this);"><?php the_title(); ?></a></h1>
            <p class="metadata author"><?php _e('Published by', 'mapasdevista'); ?>
                <a class="js-filter-by-author-link" href="<?php echo get_author_posts_url( get_the_ID() ); ?>" id="balloon-author-link-<?php the_author_ID(); ?>" title="<?php esc_attr(the_author()); ?>"><?php the_author(); ?></a>
            </p>
        </div>
    </div>
</div>