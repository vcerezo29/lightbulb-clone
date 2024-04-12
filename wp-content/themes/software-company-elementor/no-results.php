<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package Software Company Elementor
 */
?>
<div class="col-12">
    <h2 class="entry-title-result mb-2">
        <?php echo esc_html(get_theme_mod('software_company_elementor_no_results_title', __('Nothing Found', 'software-company-elementor'))); ?>
    </h2>
</div>
<div class="col-12 mb-3">
    <?php if (is_home() && current_user_can('publish_posts')) : ?>
        <p>
            <?php printf(
                esc_html__('Ready to publish your first post? Get started %s.', 'software-company-elementor'),
                '<a href="' . esc_url(admin_url('post-new.php')) . '">' . esc_html__('here', 'software-company-elementor') . '</a>'
            ); ?>
        </p>
    <?php elseif (is_search()) : ?>
        <p class="mb-2">
            <?php echo esc_html(get_theme_mod('software_company_elementor_no_results_content', __('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'software-company-elementor'))); ?>
        </p>
        <br />
        <div class="result-search">
            <?php get_search_form(); ?>
        </div>
    <?php else : ?>
        <p>
            <?php esc_html_e('Don\'t worry&hellip; it happens to the best of us.', 'software-company-elementor'); ?>
        </p>
        <br />
        <div class="error-btn-result">
            <a class="view-more-result" href="<?php echo esc_url(home_url()); ?>">
                <?php esc_html_e('Back to Home Page', 'software-company-elementor'); ?>
                <span class="screen-reader-text">
                    <?php esc_html_e('Back to Home Page', 'software-company-elementor'); ?>
                </span>
            </a>
        </div>
    <?php endif; ?>
</div>

