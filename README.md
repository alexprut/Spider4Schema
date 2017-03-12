Spider4Schema [![Build Status](https://travis-ci.org/alexprut/Spider4Schema.svg)](https://travis-ci.org/alexprut/Spider4Schema)
=============
A Web Bot that crawls the http://Schema.org web site to retrieve all available Types and Properties in order to create a JSON file and also some PHP libraries.  
For generating Microdata or RDFa Lite 1.1 semantics you can use the PHP library https://github.com/alexprut/PHPStructuredData.
Created during the Google Summer of Code 2013 and 2014.    
  
(__Deprecated__)

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
* Clone the repo: git clone https://github.com/alexprut/Spider4Schema.git
* Enter ```Spider4Schema/``` directory
* Open your ```terminal/shell``` and call ```php bin/spider.php [minified|json|normal] [true|false|verbose]```
  
The libraries will be created in the ```dist/``` folder.
  
Library types
-------------
There are 3 types of libraries you can create:  

* JSON → a .json file containing all available Types and Properties, used in library https://github.com/alexprut/PHPStructuredData for generating valid Microdata and RDFa Lite 1.1 semantics
* Minified → a .php file with an array containing all available Types and Properties
* Normal → each Type is a PHP class file (an abstract class with static Properties)
  
Performance
-----------
The __json__ library:  
1 .json file, 91 KB, contains all available Types (620+) and its Properties
  
The __minified__ library:  
1 php file, 107 KB, contains all available Types (620+) and its Properties, stored in a hash table (array)
  
The __normal__ abstract static library:   
622 php files, 710 KB, 1 file for each available Type

Todos
-----
* Add to the all the required properties specified by Google, Yandex, Baidu.
* Instead of making 620+ HTTP requests, parse one file: https://schema.org/docs/schema_org_rdfa.html
* Write tests.

License
-------
Spider4Schema is licensed under the MIT License – see the LICENSE file for details.
