<?php
/**
 * Controller Factory Class
 * @author Flipper Code <hello@flippercode.com>
 * @package Core
 */

if ( ! class_exists( 'FactoryControllerWCJP' ) ) {

	/**
	 * Controller Factory Class
	 * @author Flipper Code <hello@flippercode.com>
	 * @version 2.0.0
	 * @package Core
	 */
	class FactoryControllerWCJP extends AbstractFactoryFlipperCode {
		/**
		 * FactoryController constructer.
		 */
		public function __construct() {
		}
		/**
		 * Create controller object by passing object type.
		 * @param  string $objectType Object Type.
		 * @return object         Return class object.
		 */
		public function create_object($objectType) {

			switch ( $objectType ) {

				default : if ( file_exists( WCJP_CORE_CONTROLLER_CLASS ) ) {
						  require_once( WCJP_CORE_CONTROLLER_CLASS ); }
				if ( class_exists( 'wcjp_Core_Controller' ) ) {
					return new wcjp_Core_Controller( $objectType ); }
						  break;

			}

		}

	}
}
