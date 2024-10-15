<?php
/**
 * Admin functions.
 *
 * @package Property Management Company
 */

define('PROPERTY_MANAGEMENT_COMPANY_SUPPORT',__('https://wordpress.org/support/theme/property-management-company/','property-management-company'));
define('PROPERTY_MANAGEMENT_COMPANY_REVIEW',__('https://wordpress.org/support/theme/property-management-company/reviews/#new-post','property-management-company'));
define('PROPERTY_MANAGEMENT_COMPANY_DOC_URL',__('https://preview.wpradiant.net/tutorial/property-management-company-free/','property-management-company'));
define('PROPERTY_MANAGEMENT_COMPANY_BUY_NOW',__('https://www.wpradiant.net/products/property-management-wordpress-theme','property-management-company'));
define('PROPERTY_MANAGEMENT_COMPANY_LIVE_DEMO',__('https://preview.wpradiant.net/property-management-company/','property-management-company'));
define('PROPERTY_MANAGEMENT_COMPANY_PRO_DOC',__('https://preview.wpradiant.net/tutorial/property-management-company-pro/','property-management-company'));

/**
 * Register admin page.
 *
 * @since 1.0.0
 */

function property_management_company_admin_menu_page() {

	$property_management_company_theme = wp_get_theme( get_template() );

	add_theme_page(
		$property_management_company_theme->display( 'Name' ),
		$property_management_company_theme->display( 'Name' ),
		'manage_options',
		'property-management-company',
		'property_management_company_do_admin_page'
	);

}
add_action( 'admin_menu', 'property_management_company_admin_menu_page' );

function property_management_company_admin_theme_style() {
	wp_enqueue_style('property-management-company-custom-admin-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
  wp_enqueue_script( 'admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', array( 'jquery' ) );
  wp_localize_script('admin-notice-script', 'example_ajax_obj', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'property_management_company_admin_theme_style');

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function property_management_company_do_admin_page() {

	$property_management_company_theme = wp_get_theme( get_template() );
	?>
	<div class="property-management-company-appearence wrap about-wrap">
		<div class="head-btn">
			<div><h1><?php echo $property_management_company_theme->display( 'Name' ); ?></h1></div>
			<div class="demo-btn">
				<span>
					<a class="button button-pro" href="<?php echo esc_url( PROPERTY_MANAGEMENT_COMPANY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now', 'property-management-company' ); ?></a>
				</span>
				<span>
					<a class="button button-demo" href="<?php echo esc_url( PROPERTY_MANAGEMENT_COMPANY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Demo', 'property-management-company' ); ?></a>
				</span>
				<span>
					<a class="button button-doc" href="<?php echo esc_url( PROPERTY_MANAGEMENT_COMPANY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'property-management-company' ); ?></a>
				</span>
			</div>
		</div>
		
		<div class="two-col">

			<div class="about-text">
				<?php
					$description_raw = $property_management_company_theme->display( 'Description' );
					$main_description = explode( 'Official', $description_raw );
					?>
				<?php echo wp_kses_post( $main_description[0] ); ?>
			</div><!-- .col -->

			<div class="about-img">
				<a href="<?php echo esc_url( $property_management_company_theme->display( 'ThemeURI' ) ); ?>" target="_blank"><img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="<?php echo esc_attr( $property_management_company_theme->display( 'Name' ) ); ?>" /></a>
			</div><!-- .col -->

		</div><!-- .two-col -->

  <nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'property-management-company' ); ?>">
    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'property-management-company' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'property-management-company' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'property-management-company' ); ?></a>

    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'property-management-company', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'property-management-company' ); ?></a>

    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'property-management-company', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Changelog', 'property-management-company' ); ?></a>
  </nav>

    <?php
      property_management_company_main_screen();

      property_management_company_changelog_screen();

      property_management_company_free_vs_pro();
}
/**
 * Output the main about screen.
 */
function property_management_company_main_screen() {
  if ( isset( $_GET['page'] ) && 'property-management-company' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
  ?>
    
<div class="four-col">

	<div class="col">

		<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Free Theme Directives', 'property-management-company' ); ?></h3>

		<p>
			<?php esc_html_e( 'This article will walk you through the different phases of setting up and handling your WordPress website.', 'property-management-company' ); ?>
		</p>

		<p>
			<a class="button green button-primary" href="<?php echo esc_url( PROPERTY_MANAGEMENT_COMPANY_DOC_URL ); ?>" target="_blank"><?php esc_html_e( 'Free Documentation', 'property-management-company' ); ?></a>
		</p>

	</div><!-- .col -->

	<div class="col">

		<h3><i class="dashicons dashicons-admin-customizer"></i><?php esc_html_e( 'Full Site Editing', 'property-management-company' ); ?></h3>

		<p>
			<?php esc_html_e( 'We have used Full Site Editing which will help you preview your changes live and fast.', 'property-management-company' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" ><?php esc_html_e( 'Use Site Editor', 'property-management-company' ); ?></a>
		</p>

	</div><!-- .col -->

	<div class="col">

		<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Leave us a review', 'property-management-company' ); ?></h3>
		<p>
			<?php esc_html_e( 'We would love to hear your feedback.', 'property-management-company' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( PROPERTY_MANAGEMENT_COMPANY_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Review', 'property-management-company' ); ?></a>
		</p>

	</div><!-- .col -->


	<div class="col">

		<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'property-management-company' ); ?></h3>

		<p>
			<?php esc_html_e( 'If you have any question/feedback regarding theme, please post in our official support forum.', 'property-management-company' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( PROPERTY_MANAGEMENT_COMPANY_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Get Support', 'property-management-company' ); ?></a>
		</p>

	</div><!-- .col -->

</div><!-- .four-col -->
  <?php
  }
}

/**
 * Output the changelog screen.
 */
function property_management_company_changelog_screen() {
  if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
    global $wp_filesystem;
    ?>
    <div class="wrap about-wrap">
      <p class="about-description"><?php esc_html_e( 'Want to know whats been happening with the latest changes?', 'property-management-company' ); ?></p>
      <?php
        // Get the path to the readme.txt file.
        $readme_file = get_template_directory() . '/README.txt';

        // Check if the readme file exists and is readable.
        if ( file_exists( $readme_file ) && is_readable( $readme_file ) ) {
          $changelog = file_get_contents( $readme_file );
          $changelog_list = property_management_company_parse_changelog( $changelog );
          echo wp_kses_post( $changelog_list );
        } else {
          echo '<p>Changelog file does not exist or is not readable.</p>';
        }
      ?>
    </div>
    <?php
  }
}

/**
 * Parse changelog from readme file.
 * @param  string $content
 * @return string
 */
function property_management_company_parse_changelog( $content ) {
  // Explode content with '== ' to separate main content into an array of headings.
  $content = explode( '== ', $content );

  $changelog_isolated = '';

  // Find the part that starts with 'Changelog ==', i.e., isolate changelog.
  foreach ( $content as $key => $value ) {
    if ( strpos( $value, 'Changelog ==' ) === 0 ) {
      $changelog_isolated = str_replace( 'Changelog ==', '', $value );
    }
  }

  // Explode $changelog_isolated to manipulate it and add HTML elements.
  $changelog_array = explode( '- ', $changelog_isolated );

  // Prepare the HTML structure.
  $changelog = '<pre class="changelog">';
  foreach ( $changelog_array as $value ) {
    // Add opening and closing div and span, only the first span element will have the heading class.
    $value = '<div class="block"><span class="heading">- ' . esc_html( $value ) . '</span></div>';
    // Append the value to the changelog.
    $changelog .= $value;
  }
  $changelog .= '</pre>';

  return wp_kses_post( $changelog );
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function property_management_company_free_vs_pro() {
  if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
  ?>
    <div class="wrap about-wrap">

      <h3 class="about-description"><?php esc_html_e( 'Compare Free Vs Pro', 'property-management-company' ); ?></h3>
      <div class="vs-theme-table">
        <table>
          <thead>
            <tr><th class="head" scope="col"><?php esc_html_e( 'Theme Features', 'property-management-company' ); ?></th>
              <th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'property-management-company' ); ?></th>
              <th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'property-management-company' ); ?></th>
            </tr>
          </thead>
          <tbody>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><span><?php esc_html_e( 'Responsive Design', 'property-management-company' ); ?></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Painless Setup', 'property-management-company' ); ?></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Color Options', 'property-management-company' ); ?></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Premium site demo', 'property-management-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Multiple Block Layout', 'property-management-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Premium Patterns', 'property-management-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Multiple Fonts', 'property-management-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Slider Block', 'property-management-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Post Listing Block', 'property-management-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'WooCommerce Filter Block', 'property-management-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Gallery Block', 'property-management-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Post Carousel Block', 'property-management-company' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td class="feature feature--empty"></td>
              <td class="feature feature--empty"></td>
              <td headers="comp-2" class="td-btn-2"><a target="_blank" href="<?php echo esc_url(PROPERTY_MANAGEMENT_COMPANY_BUY_NOW ); ?>" class="sidebar-button single-btn" target="_blank"><?php esc_html_e( 'Buy It Now', 'property-management-company' ); ?></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  <?php
  }
}