<?php

/**
 * Checks if a string is palindrome.
 *
 * @param string $str The string we want to check whether is a palindrome or not.
 * 
 * @return string
 */
function isPalindrome( $str ) 
{
    $str = strtolower($str);
    return $str == strrev($str) ? 'Yes' : 'No';
}

/**
 * Checks if a string is palindrome.
 *
 * @param string $str The string we want to check whether is a palindrome or not.
 * 
 * @return int
 */
function countVowels( $str )
{
    $vowels = ['a','u','o','i','e'];
    $str = str_split(strtolower($str));
    return count(array_intersect($vowels, $str));
}

require 'index-view.php';