<?php
/**
 *  Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Real Estate Management
 */

$real_estate_management_single_post_thumb =  get_theme_mod( 'real_estate_management_single_post_thumb', 1 );
$real_estate_management_single_post_meta =  get_theme_mod( 'real_estate_management_single_post_meta', 1 );
$real_estate_management_single_post_title = get_theme_mod( 'real_estate_management_single_post_title', 1 );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ($real_estate_management_single_post_title == 1 ) {?>
            <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
        <?php }?>
        <?php if ($real_estate_management_single_post_thumb == 1 ) {?>
            <?php if(has_post_thumbnail()) {?>
                <?php the_post_thumbnail(); ?>
            <?php }?>
        <?php }?>
    </header>
    <?php if ($real_estate_management_single_post_meta == 1 ) {?>
        <div class="meta-info-box my-2">
            <span class="entry-author"><?php esc_html_e('BY','real-estate-management'); ?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
            <span class="ml-2"></i><?php echo esc_html(get_the_date()); ?></span>
        </div>
    <?php }?>
    <div class="flat-meta my-2">
        <?php if( get_post_meta($post->ID, 'real_estate_management_flat_bedroom', true) ) {?>
            <span class="mr-2"><i class="fas fa-bed mr-2"></i><?php esc_html_e('Beds: ','real-estate-management'); ?><?php echo esc_html(get_post_meta($post->ID,'real_estate_management_flat_bedroom',true)); ?></span>
        <?php }?>
        <?php if( get_post_meta($post->ID, 'real_estate_management_flat_bathroom', true) ) {?>
            <span class="mr-2"><i class="fas fa-bath mr-2"></i><?php esc_html_e('Bath: ','real-estate-management'); ?><?php echo esc_html(get_post_meta($post->ID,'real_estate_management_flat_bathroom',true)); ?></span>
        <?php }?>
        <?php if( get_post_meta($post->ID, 'real_estate_management_flat_sqrfit', true) ) {?>
            <span><i class="fas fa-vector-square mr-2"></i><?php echo esc_html(get_post_meta($post->ID,'real_estate_management_flat_sqrfit',true)); ?></span>
        <?php }?>
    </div>
    <?php if( get_post_meta($post->ID, 'real_estate_management_flat_location', true) ) {?>
        <p class="flat-locatn"><i class="fas fa-map-marker-alt mr-2"></i><?php echo esc_html(get_post_meta($post->ID,'real_estate_management_flat_location',true)); ?></p>
    <?php }?>
    <?php if( get_post_meta($post->ID, 'real_estate_management_flat_rent', true) ) {?>
        <span class="flat-rent"><?php echo esc_html(get_post_meta($post->ID,'real_estate_management_flat_rent',true)); ?></span>
    <?php }?>
    <div class="entry-content">
        <?php
        the_content(sprintf(
            wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'real-estate-management'),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
            esc_html( get_the_title() )
        ));

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'real-estate-management'),
            'after' => '</div>',
        ));

        the_tags();
        ?>
    </div>
</article>