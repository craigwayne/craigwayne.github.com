<?php
$debug_configs = [
	'WP_DEBUG'                   => true,
	'GF_DEBUG'                   => true,
	'WP_DEBUG_LOG'               => true,
	'WP_DEBUG_DISPLAY'           => false,
	'WP_AUTO_UPDATE_CORE'        => true,
	'AUTOMATIC_UPDATER_DISABLED' => false,
	'SAVEQUERIES'                => true,
	'SCRIPT_DEBUG'               => true,
	'CONCATENATE_SCRIPTS'        => true,
	'COMPRESS_SCRIPTS'           => true,
	'COMPRESS_CSS'               => true,
	'WP_MEMORY_LIMIT'            => '128MB',
	'max_execution_time'         => '180',
	'memory_limit'               => '128M',
	'post_max_size'              => '32M',
	'upload_max_filesize'        => '32M',
	'DISALLOW_FILE_MODS'         => true,
	'DISALLOW_FILE_EDIT'         => true,
	'ALLOW_UNFILTERED_UPLOADS'   => true,
//	'DB_HOST'                    => '127.0.0.1',
//	'DB_USER'                    => 'wordpress',
//	'DB_PASSWORD'                => 'wordpress',
	'IMPORT_DEBUG',
	'WP_POST_REVISIONS'          => false,
	'EMPTY_TRASH_DAYS'           => 2,
	'WP_HTTP_BLOCK_EXTERNAL'     => false,
];

foreach ( $debug_configs as $index => $value ) {
	$constant       = is_int( $index ) ? $value : $index;
	$constant_value = is_int( $index ) ? true : $value;
	if ( defined( $constant ) ) {
		continue;
	}
	define( $constant, $constant_value );
}

if ( PHP_SAPI !== 'cli' && isset( $_SERVER[ 'HTTP_HOST' ] ) && isset( $_SERVER[ 'REQUEST_SCHEME' ] ) ) {
	define( 'WP_SITEURL', $_SERVER[ 'REQUEST_SCHEME' ] . '://' . $_SERVER[ 'HTTP_HOST' ] );
	define( 'WP_HOME', $_SERVER[ 'REQUEST_SCHEME' ] . '://' . $_SERVER[ 'HTTP_HOST' ] );
}

ini_set( "html_errors", 1 );
