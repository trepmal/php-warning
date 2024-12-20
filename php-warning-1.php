<?php

function php_warning_testing1() {
	//
	//
	//
	//
	//
	//
	//
	//
	// just pumping up the line numbers
	//
	//
	//
	//
	//
	//
	//
	//
	//
	//
	//
	//
	//
	//
	//
	//
	//
	//
	//
	//

	$str = '';
	foreach( $str as $arr ) {
	}
	return;

	$range = range( 'a', 'z' );
	shuffle( $range );
	$var = array_pop( $range );
	// enforce variety of error messages
	// should get:
	// 1. undefined variable (a-z)
	// 2. foreach() argument must be of type array
	foreach ( ${$var} as $arr ) {
	}

}
