<?php
// Initialize the first two Fibonacci numbers
$first = 0;
$second = 1;

// Count the Fibonacci numbers
$count = 0;

while ($count < 10) {
    // Calculate the next Fibonacci number
    $next = $first + $second;

    // Check if the next Fibonacci number is greater than 100
    if ($next > 100) {
        break; // Exit the loop if it's greater than 100
    }

    // Print the current Fibonacci number
    echo $next . " ";

    // Update the values for the next iteration
    $first = $second;
    $second = $next;

    // Increase the count
    $count++;
}
?>
