<?php
function generateFibonacci($count) {
    // Initialize the first two Fibonacci numbers
    $first = 0;
    $second = 1;

    // Print the first two numbers manually
    echo $first . " " . $second . " ";

    // Use a for loop to generate and print the remaining Fibonacci numbers
    for ($i = 3; $i <= $count; $i++) {
        // Calculate the next Fibonacci number
        $next = $first + $second;

        // Print the current Fibonacci number
        echo $next . " ";

        // Update the values for the next iteration
        $first = $second;
        $second = $next;
    }
}

// Call the function with 15 as the argument to generate the first 15 Fibonacci numbers
generateFibonacci(15);
?>
