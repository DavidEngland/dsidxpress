<?php
if(!is_admin()){
	add_action('init', array('dsIdxGlobals', 'enqueueGlobals'));
}

class dsIdxGlobals {
	public static function enqueueGlobals(){
		$options = get_option(DSIDXPRESS_OPTION_NAME);

		if (!$options["Activated"])
			return;

		$apiHttpResponse = dsSearchAgent_ApiRequest::FetchData("EnqueueGlobalAssets", array(), false, 3600);
	}
}