<?php
if ( !class_exists('Masonry_Grid_Dashboard_Notice') ):

    class Masonry_Grid_Dashboard_Notice
    {
        function __construct()
        {	
            global $pagenow;

        	if( $this->masonry_grid_show_hide_notice() ){

	            if( is_multisite() ){

                  add_action( 'network_admin_notices',array( $this,'masonry_grid_admin_notiece' ) );

                } else {

                  add_action( 'admin_notices',array( $this,'masonry_grid_admin_notiece' ) );
                }
	        }
	        add_action( 'wp_ajax_masonry_grid_notice_dismiss', array( $this, 'masonry_grid_notice_dismiss' ) );
			add_action( 'switch_theme', array( $this, 'masonry_grid_notice_clear_cache' ) );
        }
        
        public static function masonry_grid_show_hide_notice( $status = false ){

            if( $status ){

                if( (class_exists( 'Booster_Extension_Class' ) ) || get_option('twp_masonry_grid_admin_notice') ){

                    return false;

                }else{

                    return true;

                }

            }

            // Check If current Page 
            if ( isset( $_GET['page'] ) && $_GET['page'] == 'masonry-grid-about'  ) {
                return false;
            }

        	// Hide if dismiss notice
        	if( get_option('twp_masonry_grid_admin_notice') ){
				return false;
			}
        	// Hide if all plugin active
        	if ( class_exists( 'Booster_Extension_Class' ) ) {
				return false;
			}
			// Hide On TGMPA pages
			if ( ! empty( $_GET['tgmpa-nonce'] ) ) {
				return false;
			}
			// Hide if user can't access
        	if ( current_user_can( 'manage_options' ) ) {
				return true;
			}
			
        }

        // Define Global Value
        public static function masonry_grid_admin_notiece(){ ?>

            <div class="updated notice is-dismissible welcome-panel twp-masonry-grid-notice">

                <h3><?php esc_html_e('Quick Setup','masonry-grid'); ?></h3>

                <p><strong><?php esc_html_e('Masonry Grid is now installed and ready to use. Are you looking for a better experience to set up your site?','masonry-grid'); ?></strong></p>

                <small><?php esc_html_e("We've prepared a unique onboarding process through our",'masonry-grid'); ?> <a href="<?php echo esc_url( admin_url().'themes.php?page='.get_template().'-about') ?>"><?php esc_html_e('Getting started','masonry-grid'); ?></a> <?php esc_html_e("page. It helps you get started and configure your upcoming website with ease. Let's make it shine!",'masonry-grid'); ?></small>

                <p>
                    <a class="button button-primary twp-install-active" href="javascript:void(0)"><?php esc_html_e('Install and activate recommended plugins','masonry-grid'); ?></a>
                    <span class="quick-loader-wrapper"><span class="quick-loader"></span></span>

                    <a target="_blank" class="button button-primary" href="<?php echo esc_url( 'https://demo.themeinwp.com/masonry-grid/' ); ?>"><?php esc_html_e('View Demo','masonry-grid'); ?></a>
                    <a target="_blank" class="button button-primary" href="<?php echo esc_url( 'https://www.themeinwp.com/theme/masonry-grid-pro/' ); ?>"><?php esc_html_e('Upgrade to Pro','masonry-grid'); ?></a>
                    <a class="btn-dismiss twp-custom-setup" href="javascript:void(0)"><?php esc_html_e('Dismiss this notice.','masonry-grid'); ?></a>

                </p>

            </div>

        <?php
        }

        public function masonry_grid_notice_dismiss(){

        	if ( isset( $_POST[ '_wpnonce' ] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST[ '_wpnonce' ] ) ), 'masonry_grid_ajax_nonce' ) ) {

	        	update_option('twp_masonry_grid_admin_notice','hide');

	        }

            die();

        }

        public function masonry_grid_notice_clear_cache(){

        	update_option('twp_masonry_grid_admin_notice','');

        }

    }
    new Masonry_Grid_Dashboard_Notice();
endif;