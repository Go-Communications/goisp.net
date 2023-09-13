<?php
/**
 * Show hide course list components.
 *
 * @since 1.6.7
 *
 * @package Masteriyo
 */

namespace Masteriyo\ShowHideComponents;

defined( 'ABSPATH' ) || exit;

/**
 * Show hide course list components.
 *
 * @since 1.6.7
 */
class ShowHideCourseListComponents {

	/**
	 * Init.
	 *
	 * @since 1.6.7
	 *
	 * @return void
	 */
	public static function init() {
		self::init_hooks();
	}

	/**
	 * Initialize hooks.
	 *
	 * @since 1.6.7
	 *
	 * @return void
	 */
	private static function init_hooks() {
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'print_styles' ), PHP_INT_MAX - 10 );
	}

	/**
	 * Print styles to show/hide components.
	 *
	 * @since 1.6.7
	 *
	 * @return void
	 */
	public static function print_styles() {
		if ( ! masteriyo_is_courses_page() ) {
			return;
		}

		$styles = self::get_styles();

		if ( empty( $styles ) ) {
			return;
		}

		wp_add_inline_style( 'masteriyo-public', $styles );
	}

	/**
	 * Get styles to show/hide components.
	 *
	 * @since 1.6.7
	 *
	 * @return string
	 */
	private static function get_styles() {
		$components        = array(
			'.masteriyo-course-list-display-section .masteriyo-course--img-wrap'             => masteriyo_get_setting( 'course_archive.components_visibility.thumbnail' ),
			'.masteriyo-course-list-display-section .difficulty-badge'                       => masteriyo_get_setting( 'course_archive.components_visibility.difficulty_badge' ),
			'.masteriyo-course-list-display-section .course-featured'                        => masteriyo_get_setting( 'course_archive.components_visibility.featured_ribbon' ),
			'.masteriyo-course-list-display-section .masteriyo-course--content__category'    => masteriyo_get_setting( 'course_archive.components_visibility.categories' ),
			'.masteriyo-course-list-display-section .masteriyo-course--content__title'       => masteriyo_get_setting( 'course_archive.components_visibility.course_title' ),
			'.masteriyo-course-list-display-section .masteriyo-course-author'                => masteriyo_get_setting( 'course_archive.components_visibility.author' ),
			'.masteriyo-course-list-display-section .masteriyo-course-author img'            => masteriyo_get_setting( 'course_archive.components_visibility.author_avatar' ),
			'.masteriyo-course-list-display-section .masteriyo-course-author--name'          => masteriyo_get_setting( 'course_archive.components_visibility.author_name' ),
			'.masteriyo-course-list-display-section .masteriyo-course--content__description' => masteriyo_get_setting( 'course_archive.components_visibility.course_description' ),
			'.masteriyo-course-list-display-section .masteriyo-course--content__stats'       => masteriyo_get_setting( 'course_archive.components_visibility.metadata' ),
			'.masteriyo-course-list-display-section .masteriyo-course-stats-duration'        => masteriyo_get_setting( 'course_archive.components_visibility.course_duration' ),
			'.masteriyo-course-list-display-section .masteriyo-course-stats-students'        => masteriyo_get_setting( 'course_archive.components_visibility.students_count' ),
			'.masteriyo-course-list-display-section .masteriyo-course-stats-curriculum'      => masteriyo_get_setting( 'course_archive.components_visibility.lessons_count' ),
			'.masteriyo-course-list-display-section .masteriyo-time-btn'                     => masteriyo_get_setting( 'course_archive.components_visibility.card_footer' ),
			'.masteriyo-course-list-display-section .masteriyo-course-price'                 => masteriyo_get_setting( 'course_archive.components_visibility.price' ),
			'.masteriyo-course-list-display-section .masteriyo-rating'                       => masteriyo_get_setting( 'course_archive.components_visibility.rating' ),
			'.masteriyo-course-list-display-section .masteriyo-single-course--btn'           => masteriyo_get_setting( 'course_archive.components_visibility.enroll_button' ),
		);
		$hidden_components = array_filter(
			$components,
			function ( $component_status ) {
				return ! $component_status;
			}
		);
		$styles            = '';

		if ( empty( $hidden_components ) ) {
			return $styles;
		}

		$styles .= implode( ',', array_keys( $hidden_components ) );
		$styles .= '{display:none !important;}';

		return $styles;
	}
}
