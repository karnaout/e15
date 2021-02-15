<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E15 Project 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content-container">
        <h1>E15 Project 1</h1>
        <hr>

        <form method="GET" action='process.php'>
            <input type="text" name='str'>
            <button type='submit'>Process string</button>
        </form> 

        <hr>
        <div id="results">
            <h2>Results</h2>
            <hr>

            <!-- User's input -->
            <div>
                <h3>Your String:</h3>
                <p class="answer"><strong><?= $str; ?></strong></p>
            </div>
            <hr>
            
            <!-- Is palindrome -->
            <div>
                <h3>Is Palindrome?</h3>
                <p class="answer"><strong><?= $is_Palindrome; ?></strong></p>
            </div>
            <hr>

            <!-- Vowel count -->
            <div>
                <h3>Vowel Count:</h3>
                <p class="answer"><strong><?= $count_Vowels; ?></strong></p>
            </div>
            <hr>

            <!-- Letter shift -->
            <div>
                <h3>Letter Shift:</h3>
                <p class="answer"><strong><?= $letter_Shift; ?></strong></p>
            </div>
        </div>
    </div>




    

    <div class="results">
        

    </div>
    
</body>
</html>