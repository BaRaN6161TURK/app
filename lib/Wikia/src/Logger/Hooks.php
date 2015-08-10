<?php
/**
 * Wikia\Logger\Hooks:
 *	- onWikiaSkinTopScripts: load js for logging errors to the WikiaLogger
 *
 */

namespace Wikia\Logger;

use Wikia\Util\RequestId;

class Hooks {

	/**
	 * A hook for setting up the WikiaLogger early in the app initialization process.
	 *
	 * @param \WikiFactoryLoader $wikiFactoryLoader
	 * @return boolean true
	 */
	public static function onWikiFactoryExecute( \WikiFactoryLoader $wikiFactoryLoader ) {
		global $wgDevelEnvironment;
		if ( $wgDevelEnvironment ) {
			// default to syslog in dev. you can override this in DevBoxSettings.php
			WikiaLogger::instance()->setDevMode();
		}

		/**
		 * Setup the WikiaLogger as the error handler
		 */
		$logger = WikiaLogger::instance();

		set_error_handler( [$logger, 'onError'], error_reporting() );
		register_shutdown_function( [$logger, 'onShutdown'] );

		return true;
	}

	/**
	 * A hook for setting additional fields that will be sent to Logstash
	 *
	 * @param \WikiFactoryLoader $wikiFactoryLoader
	 * @return bool true
	 */
	public static function onWikiFactoryExecuteComplete( \WikiFactoryLoader $wikiFactoryLoader ) {
		global $wgRequest, $wgDBname, $wgCityId, $maintClass;

		$fields = [];

		if ( !empty( $wgDBname ) ) {
			$fields['db_name'] = $wgDBname;
		}

		if ( !empty( $wgCityId ) ) {
			$fields['city_id'] = $wgCityId;
		}

		if ( isset( $_SERVER['REQUEST_URI'] ) ) {
			$fields['url'] = $_SERVER['REQUEST_URI'];

			$ip = !empty( $wgRequest ) ? $wgRequest->getIP() : null;
			if ( $ip === null ) {
				$ip = isset( $_SERVER['REMOTE_ADDR'] ) ? $_SERVER['REMOTE_ADDR'] : null;
			}

			if ( $ip != null ) {
				$fields['ip'] = $ip;
			}

			if ( isset( $_SERVER['REQUEST_METHOD'] ) ) {
				$fields['http_method'] = $_SERVER['REQUEST_METHOD'];
			}

			if ( isset( $_SERVER['SERVER_NAME'] ) ) {
				$fields['server'] = $_SERVER['SERVER_NAME'];
			}

			if ( isset( $_SERVER['HTTP_REFERER'] ) ) {
				$fields['referrer'] = $_SERVER['HTTP_REFERER'];
			}
		}

		// add some context for maintenance scripts
		if ( defined( 'RUN_MAINTENANCE_IF_MAIN' ) ) {
			if ( isset( $_SERVER['SCRIPT_FILENAME'] ) ) {
				$fields['maintenance_file'] = realpath( $_SERVER['SCRIPT_FILENAME'] );
			}

			if ( !empty( $maintClass ) ) {
				$fields['maintenance_class'] = $maintClass;
			}
		}

		$fields['request_id'] = RequestId::instance()->getRequestId();

		WikiaLogger::instance()->pushContext( $fields, WebProcessor::RECORD_TYPE_FIELDS );

		return true;
	}

	/**
	 * Hook into wfDebugLog function and log errors via WikiaLogger
	 *
	 * @see PLATFORM-424
	 *
	 * @author macbre
	 * @return bool
	 */
	public static function onDebug($text, $logGroup ) {
		WikiaLogger::instance()->error(rtrim($text), [
			'logGroup' => $logGroup,
			'exception' => new \Exception() // report stack trace
		]);

		// prevent the default behaviour of wfDebugLog - we already logged all information we need
		return false;
	}
}
