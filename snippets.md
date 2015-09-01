# GumGum Web Engineering - PHP Test
# Snippets

Integers and other numbers
--------------------------
- What will be the output of the following statements:
```php
var_dump(0123 == 123);  //output: boolean false
var_dump('0123' == 123); //output: boolean true
var_dump('0123' === 123); //output: boolean false
```
- What will be the value of the variables x and y? Why? How does that works?
```php
$x = 4 && 6; // == true, logical operator 
$y = 8 & 1; // == 0, bitwise operator (gives back +1 for every binary 1 that matches in the same digit column)
```
- What is PHP_INT_MAX? What is the result on each statement? Why?
```php
//PHP_INT_MAX is the largest integer available in php
var_dump(PHP_INT_MAX+1); //float 2147483648
var_dump((int)PHP_INT_MAX+1); float 2147483648 (because ints don't go that high on a 32 bit system)
```
- What is a try-catch block?
 - Write an example.
 - How would you use it in a MVC codebase?
```php
try{
    //code that might explode
}catch (\Exception $e){
    //an alternative when the code explodes
}
In an MVC framework it'd be best used to return a specific view that says something like "OOPS! That dinosaurs broke this page"
```

Arrays
------
- What will be printed?
```php
$a = array();
if ($a == null) {
    echo 'Indeed.';
} else {
    echo 'Nope.';
}
```
```php
//output: Indeed.
```
- Besides array_push(), name other ways to add elements to an array.
```php
$array[] = $newValue;
```
- What's the difference between [ ] and Array() ?
```php
[] is the a short syntax for creating an array in php 5.4+
```
- What's the maximum allowed items in an array?
```php
There is no max. It's based on memory
```
- What will be printed?
```php
echo count([
    null => 'a',
    true => 'b',
    false => 'c',
    0 => 'd',
    1 => 'e',
    '' => 'f',
]);
```
```php
//output: 3
```
- What's SplFixedArray and why does it exist?
```
SplFixedArray creates an array with a fixed length. It's also faster to read and write than a normal array()
```
- You have an array of random dates of a year, index them by month and order asc:
```php
$days = ['2015-01-01','2015-01-02','2015-02-20','2015-03-24','2015-03-21', ...];
$indexed = theFunction($days);
/*
[
    '01' => ['2015-01-01', '2015-01-02'],
    '02' => ['2015-02-20'],
    '03' => ['2015-03-21','2015-03-24'],
]
*/
```

        Solution:
        $days = ['2015-01-01','2015-01-02','2015-02-20','2015-03-24','2015-03-21', '2015-10-21'];
        
        $monthToDayTagMapping = array_reduce($days, function($reducedMonthList, $day){
            $month = (string)DateTime::createFromFormat("Y-m-d", $day)->format("m");
            $reducedMonthList[$month] .= $day . ",";
        
            return $reducedMonthList;
        }, []);
        
        $monthToDayListMapping = array_map(function($dayTag){
            $dayList = array_filter(explode(",", $dayTag));
            sort($dayList);
        
            return $dayList;
        }, $monthToDayTagMapping);
        
        ksort($monthToDayListMapping);
        var_dump($monthToDayListMapping);
OOP
---
- What does spl_autoload_register do?
```php
Calls a function before new AnyClass finishes resolving. Best used for autoloading classes
```
- What is late static binding?
```php
Lets inherited static functions be called properly instead of it calling it's parents.
```
- What is Type hinting and what are its limitations on PHP5?
```php
Type hinting ensures a parameter with from a specific class can only be accepted. Type hinting in php sucks when trying to do it with strings or ints.
```
- Explain in lay terms the concepts of the following terms, and write some use cases:
 - Abstract classes
```php
A class that can cannot be instantiated but holds general properties & functions for inherited classes.  
Best used when planning to create classes that share a lot of the same functionality.
I.e.  Give Employee is an abstract class, Developer inherits from Employee & Designer inherits from Employee. Developer & Designer will inherit Employee based properties and functionality when created, but Employee can never be created because it was decided it's too general of a class.
```
 - Interfaces
```php
Forces classes that have it to needs functions the interface specifies. 
Best used when ensure third-party Classes confine it's structure to be used with a First-Party Library.
```
 - Traits
```php
Introduced recently to add multiple inheritance to php. 
Best used to share common properties and functionality between classes
```