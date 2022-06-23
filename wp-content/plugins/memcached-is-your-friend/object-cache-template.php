<?php
/*
** Copyright 2010-2015, Pye Brook Company, Inc.
**
**
** This software is provided under the GNU General Public License, version
** 2 (GPLv2), that covers its  copying, distribution and modification. The 
** GPLv2 license specifically states that it only covers only copying,
** distribution and modification activities. The GPLv2 further states that 
** all other activities are outside of the scope of the GPLv2.
**
** All activities outside the scope of the GPLv2 are covered by the Pye Brook
** Company, Inc. License. Any right not explicitly granted by the GPLv2, and 
** not explicitly granted by the Pye Brook Company, Inc. License are reserved
** by the Pye Brook Company, Inc.
**
** This software is copyrighted and the property of Pye Brook Company, Inc.
**
** Contact Pye Brook Company, Inc. at info@pyebrook.com for more information.
**
** This program is distributed in the hope that it will be useful, but WITHOUT ANY 
** WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR 
** A PARTICULAR PURPOSE. 
**
*/



// initialize the global that knows the addresses of the global memcached servers
if ( ! isset( $memcached_servers ) || ! is_array( $memcached_servers ) ) {
	$memcached_servers = array();
}

// if the list of memcached servers is empty add the default
if ( empty( $memcached_servers) ) {
	$memcached_servers = array( '127.0.0.1:11211' );
}

// Users with setups where multiple installs share a common wp-config.php or $table_prefix
// can use this to guarantee uniqueness for the keys generated by this object cache
if ( ! defined( 'WP_CACHE_KEY_SALT' ) ) {
	if ( isset( $table_prefix ) && ! empty( $table_prefix )) {
		define( 'WP_CACHE_KEY_SALT', $table_prefix );
	} else {
		define( 'WP_CACHE_KEY_SALT', md5( __FILE__ )  );
	}
}

if ( class_exists( 'Memcached' ) ) {
	if ( file_exists( '%PLUGININSTALLDIRECTORY%memcached-class-object-cache.php' ) ) {
		require_once '%PLUGININSTALLDIRECTORY%memcached-class-object-cache.php';
//		if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
//			error_log( 'Memcached support using PHP Memcached class enabled' );
//		}
	} else {
		error_log( 'ERROR: Could not find path to plugin directory with memcached support class! Has your configuration changed? Suggest you deactivate and re-activate the plugin.' );
	}
} else if ( class_exists( 'Memcache' ) ) {
	if ( file_exists(  '%PLUGININSTALLDIRECTORY%memcache-class-object-cache.php' ) ) {
		require_once '%PLUGININSTALLDIRECTORY%memcache-class-object-cache.php';
//		if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
//			error_log( 'Memcached support using PHP Memcache class enabled' );
//		}
	}else {
		error_log( 'ERROR: Could not find path to plugin directory with memcache support class! Has your configuration changed? Suggest you deactivate and re-activate the plugin.' );
	}
} else {
	error_log( 'No Memcached support, neither the PHP Memcached nor the PHP Memcache class was found, see http://pecl.php.net/ for configuration help' );
}

