<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E15 Project 1</title>
</head>
<body>
    <h1>E15 Project 1</h1>
    <hr>
    <p>is Anna palindrome? <span style="color:red"><?php echo isPalindrome('Anna'); ?></span></p>
    <p>is Code palindrome? <span style="color:red"><?php echo isPalindrome('Code'); ?></span></p>
    <hr>
    <p>How many vowels in Khaled? <span style="color:red">There <?php echo countVowels('Khaled') > 0 ? 'are ' . countVowels('Khaled') : 'is No '; ?> vowel letters in Khaled.</span></p>
    <p>How many vowels in Rhythm? <span style="color:red">There <?php echo countVowels('Rhythm') > 0 ? 'are ' . countVowels('Rhythm') : 'is No '; ?> vowel letters in Rhythm.</span></p>
    
</body>
</html>