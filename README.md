# PHP fun problem

## Description

Your aim is to write a function `calcMaxInConsecutiveItems` in the file `answer.php`.

The `$array` is an array of integers (from -99999 to 99999) and the `$n` is the number of items to be calculated.
Function `calcMaxInConsecutiveItems` will calculate max sum of N consecutive numbers. See the example below.

```PHP
$arr = [1, 3, 14, 2, 5];
calcMaxInConsecutiveItems($arr, 1); // results 14
calcMaxInConsecutiveItems($arr, 2); // results 17
calcMaxInConsecutiveItems($arr, 3); // results 21
calcMaxInConsecutiveItems($arr, 4); // results 24
calcMaxInConsecutiveItems($arr, 5); // results 25
```

Notes: \
The function will not take an argument `$n` greater than array length. \
The given array will be huge and you should take into consideration performance. \
Time for script to run 1 minute and 30 seconds. \
Memory limit is set by default to 256M, is enough to load the huge array and also a huge function. \
Good luck.

## Instructions

1. To be able to run the problem you should have installed PHP >= 7.1 or docker (with docker-compose)
   1. With docker, run `docker-compose up --build -d && docker run -it php-fun bash`, now you are able to use php command-line
2. Run the command `php answer.php` and see the results

(If you are not able to run php in command line, try to run docker (1.i) and enter docker container with `docker run -it php-fun bash`) and then try php command again