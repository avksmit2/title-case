# _Title-case_

#### _Program that changes the first letter of each word to upper case, September 12, 2016_

#### By _**Angie Smith**_

## Description

_This website receives a string from the user and changes the beginning letter of each word to upper case. The code is tested with PHPUnit._

## Specifications
    1. program will capitalize the first letter of a single word.  
    * input example: word
    * output example: word
    2. program will capitalize each letter for multiple words.
    * input example: word or words
    * output example: Word Or Words
    3. program will ignore numbers.
    * input example: 27 words
    * output example: 27 words
    4. program will change words that have all capitalized letters correctly.
    * input example: WORD
    * output example: Word
    5. program will handle words that have some capitalized letters mixed through the word.
    * input example: wORd OR words
    * output example: Word or Words
    6. program will not capitalize words that are prepositions or conjunctions.
    * input example: word or words
    * output example: Word or words
    7. program will capitalize words that are prepositions or conjunctions if they are at the beginning of the sentance.
    * input example: the word or words
    * output example: The Word or Words


## Setup/Installation Requirements

* Clone the GitHub repository to your local machine
* Make sure you have composer installed
* Run composer install from the project root folder
* Start php server from the web folder ( php -S localhost:8000 )
* Go to localhost:8000 from your web browser

## Known Bugs

None

## Support and contact details

_Contact avksmit2@gmail.com with any comments or questions_

## Technologies Used

* PHP
* Silex
* Twig
* Composer
* PHPUnit

### License

*MIT License*

Copyright (c) 2016 **_Angie Smith_**
