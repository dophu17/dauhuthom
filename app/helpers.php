<?php

if (! function_exists('createDeepLink')) {
    function createDeepLink($url = '', $utm_source = 'accesstrade', $utm_medium = '', $utm_campaign = '', $utm_content = '') {
    	$accessTrade = config('settings.accessTrade');
        return $accessTrade['deepLink'] . '?url=' . $url . '&utm_source=' . $utm_source . '&utm_medium=' . $utm_medium . '&utm_campaign=' . $utm_campaign . '&utm_content=' . $utm_content;
    }
}