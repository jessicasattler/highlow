<?php

// For loops

// for is just a common case of while, i.e.
// any for loop can be rewritten as a while loop

for (/* initialization */; /* condition */;  /* increment or decrement */ ) {
    // body
}

// 1. initialization
// 2. check condition  <--------+
// 3. run the code in the body  |
// 4. increment or decrement ---+


for ($i = 1; $i <= 10; $i += 1) {
    echo "$i\n";
}