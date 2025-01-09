# PHP Uncommon Bug: Array Modification During foreach

This repository demonstrates a subtle yet common error in PHP: modifying an array during a `foreach` loop iteration. The `unset()` call inside the loop unexpectedly alters the array's internal structure, leading to unexpected results.

The `bug.php` file contains the problematic code.  The `bugSolution.php` file provides a corrected version.

## Bug Description
The issue arises when the code attempts to remove elements from an array while iterating over it using a `foreach` loop. This approach can lead to elements being skipped or causing unexpected behavior due to the changing index during iteration.

## Solution
The solution involves using an alternative approach that avoids modifying the array during iteration. This can involve creating a new array to store the processed data or using array filters instead.