<?php
//PHP function that uses a for loop to print all even numbers from 1 to 20

function print_Even_number_with_for_loop( $start, $end ) {

// Check if the start is even; if not, make it even
    if ( $start % 2 !== 0 ) {
        $start++;
    }

// Use a for loop to print even numbers within the given range
    for ( $i = $start; $i <= $end; $i += 2 ) {
        echo "{$i}, ";
    }

}

print_Even_number_with_for_loop( 1, 20 );

/* BREAK */

//PHP function that uses a while loop to print all even numbers from 1 to 20.

function print_Even_number_With_While_Loop( $start, $end ) {
    $number = 2;

    while ( $number <= 20 ) {
        echo "{$number}, ";
        $number += 2;
    }

}

print_Even_number_With_While_Loop( 1, 20 );

/* BREAK */

//PHP function that uses a do-while loop to print all even numbers from 1 to 20.
function print_Even_Numbers_With_Do_WhileL_Loop() {
    $number = 2;

    do {
        echo "{$number}, ";
        $number += 2;
    } while ( $number <= 20 );

}

// Call the function to print even numbers
print_Even_Numbers_With_Do_WhileL_Loop();
?>

