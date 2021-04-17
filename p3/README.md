# Project 3
+ By: **Khaled Arnaout**
+ Production URL: <http://e15p3.khaledarnaout.me>

## Feature summary
This is a traditional flashcards application where users might use it to study cards and organize them into decks with different categories. 

+ Visitors can register/log in
+ Users can create a new deck
+ Users can delete a deck
+ Users can rename a deck
+ Users can create a new card
+ Users can delete a card
+ Users can edit a card

  
## Database summary

+ My application has 3 tables in total (`users`, `cards`, `decks`)
+ There's a many-to-many relationship between `cards` and `decks`
+ There's a one-to-many relationship between `users` and `decks`
+ There's a one-to-many relationship between `users` and `cards`

## Outside resources
+ [Bootstrap Cover template](https://getbootstrap.com/docs/4.0/examples/)
+ [PHP to convert string to slug](https://stackoverflow.com/questions/40641973/php-to-convert-string-to-slug)
+ [Generate random number in Laravel](https://stackoverflow.com/questions/24884174/generate-random-number-in-laravel/24884343#:~:text=You%20can%20use%20the%20rand,the%20rand()%20with%20it.)
+ [Laravel redirect issue from blade template](https://stackoverflow.com/questions/43118075/laravel-redirect-issue-from-blade-template)

## Notes for instructor

