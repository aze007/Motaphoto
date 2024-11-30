<?php get_header(); ?>

<div class="photo-container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="photo-content">
                <h1><?php the_title(); ?></h1>
                <div class="photo-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <div class="photo-meta">
                    <p><strong>Référence :</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'reference', true)); ?></p>
                    <p><strong>Type :</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'type', true)); ?></p>
                    <p><strong>Catégorie :</strong> <?php the_terms(get_the_ID(), 'categorie'); ?></p>
                    <p><strong>Format :</strong> <?php the_terms(get_the_ID(), 'format'); ?></p>
                </div>
                <div class="photo-description">
                    <?php the_content(); ?>
                </div>
                <button id="contact-btn" data-photo-ref="<?php echo esc_html(get_post_meta(get_the_ID(), 'reference', true)); ?>">Contact</button>
            </div>
        <?php endwhile;
    else : ?>
        <p><?php esc_html_e('No photos found.', 'your-theme-textdomain'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
