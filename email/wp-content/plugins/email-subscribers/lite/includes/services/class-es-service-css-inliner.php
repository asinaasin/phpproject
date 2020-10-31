<?php

class ES_Service_CSS_Inliner extends ES_Services {

	/**
	 * Service command
	 * 
	 * @var string
	 *
	 * @sinc 4.6.1
	 */
	public $cmd = '/email/process/';

	/**
	 * ES_Service_CSS_Inliner constructor.
	 *
	 * @since 4.6.1
	 */
	public function __construct() {
		parent::__construct();
	}

	/**
	 * Get inline CSS
	 *
	 * @param array $data
	 * 
	 * @return array
	 *
	 * @since 4.6.1
	 */
	public function get_inline_css( $data = array() ) {

		if ( ES()->validate_service_request( array( 'css_inliner' ) ) ) {
			if ( ! empty( $data ) ) {
				$meta            = ! empty( $data['campaign_id'] ) ? ES()->campaigns_db->get_campaign_meta_by_id( $data['campaign_id'] ) : '';
				$data['html']    = $data['content'];
				$data['css']     = ! empty( $meta['es_custom_css'] ) ? $meta['es_custom_css'] : get_post_meta( $data['tmpl_id'], 'es_custom_css', true );
				$data['tasks'][] = 'css-inliner';
				$options  = array(
					'timeout' => 15,
					'method'  => 'POST',
					'body'    => $data
				);

				$response = $this->send_request( $options );
				
				// Change data only if we have got a valid response from the service.
				if ( ! $response instanceof WP_Error ) {
					$data = $response;
				}
			}
		}

		return $data;
	}
}
