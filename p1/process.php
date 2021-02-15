<?php

session_start();

$str = $_GET['str'];

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
    // The following statement performs the following tasks:
        // Removes all vowels from the input text $str
        // Returns the subtraction of $str length - $str without vowels which is the number of vowels in a string.
    return strlen($str) - strlen(str_replace($vowels, "", strtolower($str)));
}

/**
 * Processses an input string such that each letter is shifted +1 position in the alphabet.
 *
 * @param string $str The string we want to check whether is a palindrome or not.
 * 
 * @return string
 */
function letterShift( $str )
{
    $alphas = array_merge(range('a', 'z'), range('A', 'Z'));
    $letter_Shifted_String = '';
    // Loop through each charcater in our input string $str
    foreach(str_split($str) as $char) {
        // Find the character index in $alphas
        $char_index = array_search($char, $alphas, true);

        // Do the following:
            // if the charcater @char exists in $alphas ( $char_index is NOT false )
                // append the following character to $letter_Shifted_String.
            // else append the same character to $letter_Shifted_String.
        $letter_Shifted_String .= ( false !== $char_index ) ? $alphas[$char_index + 1] : $char;
    }
    
    // TODO: fix a bug when character is z the following character should be a NOT A.
    return $letter_Shifted_String;
}

$_SESSION['results'] = [
    'isPalindrome' => isPalindrome($str),
    'countVowels' => countVowels($str),
    'letterShift' => letterShift($str),
    'str' => $str
];

header('Location: index.php');