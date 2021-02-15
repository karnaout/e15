<?php

session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $is_Palindrome = $_SESSION['results']['isPalindrome'];
    $count_Vowels = $_SESSION['results']['countVowels'];
    $letter_Shift = $_SESSION['results']['letterShift'];
    $str = $_SESSION['results']['str'];   
}
require 'index-view.php';