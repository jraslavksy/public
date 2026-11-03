<?php
/**
 * Plugin Name: API Catalog (RFC 9727)
 * Description: Serves /.well-known/api-catalog as application/linkset+json so the response does not depend on web server config.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'muplugins_loaded',
	static function () {
		$method = isset( $_SERVER['REQUEST_METHOD'] ) ? $_SERVER['REQUEST_METHOD'] : 'GET';
		if ( 'GET' !== $method && 'HEAD' !== $method ) {
			return;
		}

		$path = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) : '';
		if ( '/.well-known/api-catalog' !== untrailingslashit( (string) $path ) ) {
			return;
		}

		$home = trailingslashit( get_option( 'home' ) );
		$api  = $home . 'wp-json/';

		$catalog = array(
			'linkset' => array(
				array(
					'anchor'       => $api,
					'service-desc' => array(
						array(
							'href' => $api,
							'type' => 'application/json',
						),
					),
					'service-doc'  => array(
						array(
							'href' => 'https://developer.wordpress.org/rest-api/',
							'type' => 'text/html',
						),
					),
				),
			),
		);

		http_response_code( 200 );
		header( 'Content-Type: application/linkset+json' );
		header( 'Cache-Control: public, max-age=3600' );

		if ( 'HEAD' !== $method ) {
			echo wp_json_encode( $catalog, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT );
		}
		exit;
	}
);
