Spider4Schema [![Build Status](https://travis-ci.org/PAlexcom/Spider4Schema.svg)](https://travis-ci.org/PAlexcom/Spider4Schema)
=============
A Web Bot that crawls the http://Schema.org web site to retrieve all available Types and Properties in order to create a JSON file and also some PHP libraries.  
For generating Microdata or RDFa Lite 1.1 semantics you can use the PHP library https://github.com/PAlexcom/PHPStructuredData.    
Created during the Google Summer of Code 2013 and 2014.  
  
Documentation
-------------  
#### Files structure:
* ```configuration.php``` → the configuration file, setup the type of library to be created.
* ```http.php``` → a class that handles all HTTP requests.
* ```parser.php``` → methods to parse the HTML and retrieve all needed information.
* ```fileCreator.php``` → methods to create the library files.
  
Usage
-----
* Make sure you have the cURL library installed, and the PHP CLI shell script package
* Clone the repo: git clone https://github.com/PAlexcom/Spider4Schema.git
* Enter ```Spider4Schema/src``` directory
* Open ```configuration.php``` and edit the ```CREATE_LIBRARY``` constant in order to specify the type of library to be created
* Open your ```terminal/shell``` and call ```php spider.php```  
  
The libraries will be created in the ```libraries``` folder.  
  
Library types
-------------
There are 3 types of libraries you can create:  

* JSON → a .json file containing all available Types and Properties, used in library https://github.com/PAlexcom/PHPStructuredData for generating valid Microdata and RDFa Lite 1.1 semantics
* Minified → a .php file with an array containing all available Types and Properties
* Normal → each Type is a PHP class file (an abstract class with static Properties)
  
Performance
-----------
The __json__ library:  
1 .json file, 83.6 KB, contains all available Types (580+) and its Properties
  
The __minified__ library:  
1 php file, 98.7 KB, 3590+ lines of code, contains all available Types (580+) and its Properties, stored in a hash table (array)  
  
The __normal__ abstract static library:   
583 php files, 641.1 KB, 12000+ lines of code without comments and documentation, 1 file for each available Type  

Todos
-----
* Add to the all the required properties specified by Google, Yandex, Baidu.
* Instead of making 580+ HTTP requests, parse one file: https://schema.org/docs/schema_org_rdfa.html
* Write tests.

License
-------
Spider4Schema is licensed under the MIT License – see the LICENSE file for details.