<?php

namespace App\Helpers;

use Request;

class Helper
{
    public static function format_uri($uri)
    {	
    	$first_segment = Request::segment(1);

    	if (in_array($first_segment, config('app')['supported_languages']) && $first_segment != config('app')['fallback_locale']) {

    		return '/' . $first_segment . '/' . $uri;
    	}
        return '/' . $uri;
    }

    public static function switch_language($language)
    {	
    	$uri = Request::path();
    	$first_segment = Request::segment(1);
    	if (substr($uri, 0, 1) == '/') {
    		$uri = substr($uri,1);
    	}

    	if (in_array($first_segment, config('app')['supported_languages'])) { 
    		if ($language != config('app')['fallback_locale']) {
    			return '/' . $language . substr($uri,2);
    		}
    		return '/' .substr($uri,3);
    	} elseif (in_array($language, config('app')['supported_languages'])) {
    		if ($language != config('app')['fallback_locale']) {
    			return '/' . $language .( $uri != '/' ? '/'. $uri : '');
    		}
    		return $uri;
    	}
    }
}