<?php

class ES_Services {
	
	/**
	 * API URL
	 * 
	 * @since 4.6.0
	 * @var string
	 *
	 */
	public $api_url = 'https://api.icegram.com';

	/**
	 * Service command
	 * 
	 * @var string
	 *
	 * @sinc 4.6.0
	 */
	public $cmd = '';

	/**
	 * ES_Services constructor.
	 *
	 * @since 4.6.0
	 */
	public function __construct() {

	}

	/**
	 * Send Request
	 *
	 * @param array $options
	 * @param string $method
	 *
	 * @since 4.6.0
	 */
	public function send_request( $options = array(), $method = 'POST' ) {

		
		$response = array();
		
		if ( empty( $this->cmd ) ) {
			return new WP_Error( '404', 'Command Not Found' );
		}
		
		// Check if trial is valid or user is on a premium plan, if not, then don't prcess the request.
		if ( ! ( ES()->is_trial_valid() || ES()->is_premium() ) ) {
			return $options;
		}
		
		$url = $this->api_url . $this->cmd;
		
		$options = apply_filters( 'ig_es_service_request_data', $options );

		if ( ! empty( $options ) && is_array( $options ) ) {
			if ( 'POST' === $method ) {
				$response = wp_remote_post( $url, $options );
			} else {
				$response = wp_remote_get( $url, $options );
			}
	
			if ( ! is_wp_error( $response ) ) {
	
				if ( 200 === wp_remote_retrieve_response_code( $response ) ) {
	
					$response_data = $response['body'];
	
					if ( 'error' != $response_data ) {

						$response_data = json_decode( $response_data, true );
						
						do_action( 'ig_es_service_response_received', $response_data, $options );

						return $response_data;
					}
				}
	
			}
		}

		return $response;

	}
}
