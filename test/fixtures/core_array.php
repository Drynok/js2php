<?php
$items = [ "One", "Two", "Three" ];

array_unshift( $items, "Zero" );
array_shift( $items );
$items[] = "Four";
array_push( $items, "Four", "Five" );

var_dump( $items );
echo( join( ", ", $items ) );

echo( count( $items ) );
echo( array_search( [ "name" => "Three" ], $items ) );
echo( join( ", ", $items ) );
echo( "\n" );

$count = array_reduce( $items, function ( $curr, $string ) {
		return $curr + strlen( $string );
	}, 0
)

;
var_dump( $count );

var_dump( is_array( $items ) );
var_dump( is_array( $count ) );

/* This might not work, but it shouldn't crash! */
$a = call_user_func( [ Array::prototype, 'slice' ], 1 );
var_dump( $a );
