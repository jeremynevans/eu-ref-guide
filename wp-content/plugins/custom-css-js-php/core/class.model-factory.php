<?php
/**
 * Model Factory Class
 * @author Flipper Code <hello@flippercode.com>
 * @package Core
 */

if ( ! class_exists( 'FactoryModelWCJP' ) ) {

	/**
	 * Model Factory Class
	 * @author Flipper Code <hello@flippercode.com>
	 * @version 2.0.0
	 * @package Core
	 */
	class FactoryModelWCJP extends AbstractFactoryFlipperCode{
		/**
		 * FactoryModel constructer.
		 */
		public function __construct() {

		}
		/**
		 * Create model object by passing object type.
		 * @param  string $objectType Object Type.
		 * @return object         Return class object.
		 */
		public function create_object($objectType) {
			switch ( $objectType ) {

				default:
					require_once( WCJP_MODEL.$objectType.'/model.'.$objectType.'.php' );
					$object = 'wcjp_Model_'.$objectType;

				return new $object();
				break;
			}

		}

	}
}
