<?php

namespace CTXFeed\V5\Output;

use CTXFeed\V5\Helper\CommonHelper;
use CTXFeed\V5\Product\AttributeValueByType;
use CTXFeed\V5\Utility\Config;
use WC_Product;
/**
 * Class AttributeMapping
 *
 * @package    CTXFeed
 * @subpackage CTXFeed\V5\Output
 * @author     Ohidul Islam <wahid0003@gmail.com>
 * @link       https://webappick.com
 * @license    https://opensource.org/licenses/gpl-license.php GNU Public License
 * @category   Output
 */
class AttributeMapping {

	/**
	 *  Get Attribute Mapping Value.
	 *
	 * @param            $attribute
	 * @param            $merchant_attribute
	 * @param WC_Product $product
	 * @param Config     $config
	 *
	 * @return string
	 */
	public function getMappingValue( $attribute, $merchant_attribute, $product, $config ) {
		$getAttributeValueByType = new AttributeValueByType( $attribute, $product, $config, $merchant_attribute );
		$attributes              = get_option( $attribute );
		$glue                    = ! empty( $attributes['glue'] ) ? $attributes['glue'] : ' ';
		$output                  = '';

		if ( isset( $attributes['mapping'] ) ) {
			foreach ( $attributes['mapping'] as $map ) {
				$get_value = $getAttributeValueByType->get_value( $map );
				if ( ! empty( $get_value ) ) {
					$output .= $glue . $get_value;
				}
			}
		}

		//trim extra glue
		$output = trim( $output, $glue );

		// remove extra whitespace
		$output = preg_replace( '!\s\s+!', ' ', $output );

		return apply_filters( 'woo_feed_filter_attribute_mapping', $output, $attribute, $product, $config );
	}

	/**
	 * Get Attribute Mapping.
	 *
	 * @param $attribute
	 *
	 * @return false|mixed|null
	 */
	public function getMapping( $attribute ) {
		if ( strpos( $attribute, AttributeValueByType::PRODUCT_ATTRIBUTE_MAPPING_PREFIX ) === false ) {
			$attribute = AttributeValueByType::PRODUCT_ATTRIBUTE_MAPPING_PREFIX . $attribute;
		}

		return get_option( $attribute );
	}


	public function getMappings() {

		$mappings = CommonHelper::get_options( AttributeValueByType::PRODUCT_ATTRIBUTE_MAPPING_PREFIX );
		$data     = array();
		if ( ! empty( $mappings ) ) {
			foreach ( $mappings as $mapping ) {
				$data[ $mapping->option_name ] = get_option( $mapping->option_name );
			}

			return $data;
		}

		return false;
	}

	/**
	 * Save Attribute mapping.
	 *
	 * @param array $mappingConfig
	 *
	 * @return bool
	 */
	public function saveMapping( $mappingConfig ) {

		$data = array();

		$data['name'] = '';
		if ( isset( $mappingConfig['mapping_name'] ) ) {
			$data['name'] = sanitize_text_field( $mappingConfig['mapping_name'] );
		}

		// Set Multiple Attributes or texts.
		if ( isset( $mappingConfig['value'] ) ) {
			foreach ( $mappingConfig['value'] as $item ) { // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized
				if ( ' ' === $item ) {
					$data['mapping'][] = $item;
				} elseif ( '' !== $item ) {
					$data['mapping'][] = sanitize_text_field( $item );
				}
			}
			$data['mapping'] = array_filter( $data['mapping'] );
		}

		// Set Glue.
		if ( isset( $mappingConfig['mapping_glue'] ) ) {
			$data['glue'] = $mappingConfig['mapping_glue'];
		} else {
			$data['glue'] = '';
		}

		// Set Option Name.
		if ( isset( $mappingConfig['option_name'] ) &&
			 ! empty( $mappingConfig['option_name'] ) &&
			 false !== strpos( $mappingConfig['option_name'], AttributeValueByType::PRODUCT_ATTRIBUTE_MAPPING_PREFIX ) // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized
		) {
			$option = sanitize_text_field( $mappingConfig['option_name'] );
		} else {
			// generate unique one.
			$option = CommonHelper::unique_option_name( AttributeValueByType::PRODUCT_ATTRIBUTE_MAPPING_PREFIX . $data['name'] );
		}

		return update_option( $option, $data );
	}

	/**
	 * Save Attribute mapping.
	 *
	 * @param array $mappingConfig
	 *
	 * @return bool
	 */
	public function updateMapping( $mappingConfig ) {

		$data = array();

		$data['name'] = '';
		if ( isset( $mappingConfig['mapping_name'] ) ) {
			$data['name'] = sanitize_text_field( $mappingConfig['mapping_name'] );
		}

		// Set Multiple Attributes or texts.
		if ( isset( $mappingConfig['value'] ) ) {
			foreach ( $mappingConfig['value'] as $item ) { // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized
				if ( ' ' === $item ) {
					$data['mapping'][] = $item;
				} elseif ( '' !== $item ) {
					$data['mapping'][] = sanitize_text_field( $item );
				}
			}
			$data['mapping'] = array_filter( $data['mapping'] );
		}

		// Set Glue.
		if ( isset( $mappingConfig['mapping_glue'] ) ) {
			$data['glue'] = $mappingConfig['mapping_glue'];
		} else {
			$data['glue'] = '';
		}

		// Set Option Name.
		if ( isset( $mappingConfig['option_name'] ) &&
			 ! empty( $mappingConfig['option_name'] ) &&
			 false !== strpos( $mappingConfig['option_name'], AttributeValueByType::PRODUCT_ATTRIBUTE_MAPPING_PREFIX ) // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized
		) {
			$option = sanitize_text_field( $mappingConfig['option_name'] );
		} else {
			// generate unique one.
			$option = CommonHelper::unique_option_name( AttributeValueByType::PRODUCT_ATTRIBUTE_MAPPING_PREFIX . $data['name'] );
		}

		return update_option( $option, $data );
	}

	/**
	 * Delete Attribute Mapping.
	 *
	 * @param $attribute
	 *
	 * @return bool
	 */
	public function deleteMapping( $attribute ) {
		if ( strpos( $attribute, AttributeValueByType::PRODUCT_ATTRIBUTE_MAPPING_PREFIX ) === false ) {
			$attribute = AttributeValueByType::PRODUCT_ATTRIBUTE_MAPPING_PREFIX . $attribute;
		}

		return delete_option( $attribute );
	}


	/**
	 * Get a random product data for view attribute mapping data
	 *
	 * @param $option_name
	 *
	 * @return string
	 */
	public static function get_attribute_value( $option_name ) {
		$args      = array(
			'posts_per_page' => 1,
			'orderby'        => 'rand',
			'post_type'      => 'product',
		);

		$random_products = get_posts( $args );
		$product_id      = $random_products[0]->ID;
		$product         = wc_get_product( $product_id );
		$product_array   = (array) json_decode( ( wc_get_product( $product_id ) ) );

		$config = array(
			'feedrules' =>
				array(
					'provider'              => 'google',
					'feed_country'          => 'US',
					'feed_id'               => '123',
					'filename'              => 'GoogleFeed',
					'feedType'              => 'xml',
					'ftpenabled'            => 0,
					'ftporsftp'             => 'ftp',
					'ftphost'               => '127.0.0.1',
					'ftpport'               => '21',
					'ftpuser'               => 'ftpuser',
					'ftppassword'           => 'ftppassword',
					'ftppath'               => 'ftppathf/to/dir',
					'ftpmode'               => 'active',
					'is_variations'         => 'y', // Only Variations (All Variations)
					'variable_price'        => 'first',
					'variable_quantity'     => 'first',
					'feedLanguage'          => 'en',
					'feedCurrency'          => 'USD',
					'itemsWrapper'          => 'products',
					'itemWrapper'           => 'product',
					'delimiter'             => ',',
					'enclosure'             => 'double',
					'extraHeader'           => '',
					'vendors'               => array(),
					// Feed Config
					'mattributes'           => array(), // merchant attributes
					'prefix'                => array(), // prefixes
					'type'                  => array(), // value (attribute) types
					'attributes'            => array(), // product attribute mappings
					'default'               => array(), // default values (patterns) if value type set to pattern
					'suffix'                => array(), // suffixes
					'output_type'           => array(), // output type (output filter)
					'limit'                 => array(), // limit or command
					// filters tab
					'composite_price'       => 'all_product_price',
					'product_ids'           => '',
					'categories'            => array(),
					'post_status'           => array( 'publish' ),
					'filter_mode'           => array(
						'categories'  => 'include',
						'post_status' => 'include',
						'product_ids' => 'exclude',
					),
					'campaign_parameters'   => array(),
					'is_outOfStock'         => 'n',
					'is_backorder'          => 'n',
					'is_emptyDescription'   => 'n',
					'is_emptyTitle'         => 'n',
					'is_emptyImage'         => 'n',
					'is_emptyPrice'         => 'n',
					'product_visibility'    => 0,
					'shipping_country'      => '',
					'tax_country'           => '',
					// include hidden ? 1 yes 0 no
					'outofstock_visibility' => 0,
					// override wc global option for out-of-stock product hidden from catalog? 1 yes 0 no
					'ptitle_show'           => '',
					'decimal_separator'     => '.',
					'thousand_separator'    => ',',
					'decimals'              => '2',
				),
			'url'       => 'http://ctxfeed.test:8888/wp-content/uploads/woo-feed/google/xml/google.xml',
			'status'    => '1',
		);
		$attr_value        = array();
		$dynamic_attribute = new DynamicAttributes();
		$config            = new Config( $config );

		$attr_code = get_option( $option_name );

		$total_elements        = isset( $attr_code['mapping'] ) ? count( $attr_code['mapping'] ) : 0;
		$current_element_index = 0;

		if( isset( $attr_code['mapping']) ) {
			foreach ( $attr_code['mapping'] as $key ) {
				$attr_option = get_option( $key );
				$saperator   = $attr_code['glue'] ? $attr_code['glue'] : ' ';
				if ( $attr_option && isset( $attr_option['mapping'] ) ) {
					$attr_option    = $attr_option['mapping'];
					$attr_saperator = $attr_option['glue'] ? $attr_option['glue'] : ' ';
					if ( $attr_option && is_array( $attr_option ) ) {
						//dynamic attribute value
						if ( strpos( $key, 'wf_dattribute_' ) !== false ) {
							$dynamic_attribute_value = $dynamic_attribute->getDynamicAttributeValue( $key, '', $product, $config );
							$value                   = $dynamic_attribute_value ? $dynamic_attribute_value : 'No data';
							$attr_value[]            = ( $current_element_index < ( $total_elements - 1 ) ) ? $value . $saperator : $value;
						}
						$total_elements_attr        = count( $attr_code['mapping'] );
						$current_element_index_attr = 0;
						foreach ( $attr_option as $key ) {
							$value        = self::attribute_mapping_value( $product, $product_id, $key, $product_array );
							$value        = $value ? $value : 'No data';
							$attr_value[] = ( $current_element_index_attr < ( $total_elements_attr - 1 ) ) ? $value . $attr_saperator : $value;
							$current_element_index_attr++;
						}
					}
				} else {
					$value        = self::attribute_mapping_value( $product, $product_id, $key, $product_array );
					$value        = $value ? $value : 'No data';
					$attr_value[] = ( $current_element_index < ( $total_elements - 1 ) ) ? $value . $saperator : $value;
				}
				$current_element_index++;
			}
		}


		return $attr_value;
	}

	/**
	 * Get a random product data for view attribute mapping data
	 *
	 * @param $product  $   id $key $array
	 *
	 * @return array | object
	 */
	public static function attribute_mapping_value( $product, $product_id, $key, $product_array ) {
		$attr_value = '';
		if ( array_key_exists( $key, $product_array ) ) {
			$value      = "get_$key";
			$attr_value = $product->$value();
		} else {
			if ( strpos( $key, 'wf_cattr_' ) !== false ) {
				$trimmed_string = substr( $key, 9 );
				$attr_value     = get_post_meta( $product_id, $trimmed_string, true );
			}

			if ( strpos( $key, 'wf_attr_' ) !== false ) {
				$trimmed_string = substr( $key, 8 );
				$attribute      = wc_get_product_terms( $product_id, $trimmed_string, array( 'fields' => 'all' ) );
				if ( ! empty( $attribute ) && is_object( $attribute[0] ) ) {
					$attr_value = $attribute[0]->name;
				}
			} else {
				if ( $key === 'title' || $key === 'parent_title' ) {
					$attr_value = $product->get_title();
				}
				if ( $key === 'link' || $key === 'parent_link' || $key === 'canonical_link' || $key === 'ex_link' ) {
					$attr_value = $product->get_permalink();
				}
				if ( $key === 'description_with_html' ) {
					$attr_value = $product->get_description();
				}
				if ( $key === 'product_type' || $key === 'type' ) {
					$attr_value = $product->get_type();
				}
				if ( $key === 'add_to_cart_link' ) {
					$attr_value = $product->add_to_cart_url();
				}
				if ( $key === 'item_group_id' ) {
					$attr_value = $product->get_parent_id();
				}
				if ( $key === 'sku_id' ) {
					$attr_value = $product->get_sku();
				}
				if ( $key === 'availability' ) {
					if ( $product->is_in_stock() ) {
						$attr_value = 'in stock';
					} else {
						$attr_value = 'out of stock';
					}
				}
				if ( $key === 'availability_date' ) {
					$attr_value = 'available';
				}
				if ( $key === 'quantity' ) {
					$attr_value = $product->get_stock_quantity();
				}
				if ( $key === 'weight_unit' ) {
					$attr_value = get_option( 'woocommerce_weight_unit' );
				}
				if ( $key === 'visibility' ) {
					$attr_value = get_post_meta( $product_id, '_visibility', true );

				}
				if ( $key === 'rating_total' || $key === 'rating_average' ) {
					$attr_value = $product->get_average_rating();
				}
				if ( $key === 'is_bundle' ) {
					$attr_value = $product->is_type( 'bundle' ) ? 'yes' : 'no';
				}
				if ( $key === 'product_status' ) {
					$attr_value = get_post_status( $product_id );
				}
				if ( $key === 'featured_status' ) {
					$attr_value = get_post_meta( $product_id, '_featured', true );
				}
				if (
					$key === 'image' ||
					$key === 'feature_image' ||
					$key === 'image1' ||
					$key === 'image2' ||
					$key === 'image3' ||
					$key === 'image4'
				) {
					$attr_value = get_the_post_thumbnail_url( $product_id );
				}
				if ( $key === 'currency' ) {
					$attr_value = get_woocommerce_currency();

				}
				// Get the product categories
				$categories = wp_get_post_terms( $product->get_id(), 'product_cat' );
				// Retrieve the first category assigned to the product
				$primary_category = $categories[0];

				// Check if any categories are assigned to the product
				if ( ! empty( $categories ) ) {
					// Output the primary category name
					if ( $key === 'primary_category' ) {
						$attr_value = $primary_category->name;
					}
					if ( $key === 'primary_category_id' ) {
						$attr_value = $primary_category->term_id;
					}
				}
			}
		}
		return $attr_value;
	}
}
