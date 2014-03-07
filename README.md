# Spider4Schema
A Web Bot that crawls the http://Schema.org web site to retrieve all available Types and Properties in order to create some PHP microdata libraries.  
For generating Microdata semantics you can use the PHP library https://github.com/PAlexcom/PHPMicrodata.    
Created during the Google Summer of Code 2013 for my Joomla! project.  
  
# Documentation
  
#### Files structure:
* configuration.php → the configuration file, setup the type of library to be created
* http.php → a class that handles all HTTP requests
* parser.php → methods to parse the HTML and retrieve all Microdata information
* fileCreator.php → methods to create the library files  
  
#### Usage
* Make sure you have the cURL library installed, and PHP CLI shell script package
* Clone the repo: git clone https://github.com/PAlexcom/Spider4Schema.git
* Enter ```Spider4Schema``` directory
* Open ```configuration.php``` and edit the ```CREATE_LIBRARY``` constant in order to specify the type of library to be created
* Open your ```terminal/shell``` and call ```php spider.php```  
  
The libraries will be created in the ```libraries``` folder  
  
##### Library Types
There are 3 types of Microdata library you can create:
* JSON → a .json file containing all available Types and Properties, used in library https://github.com/PAlexcom/PHPMicrodata for generating Microdata semantics
* Minified → a .php file with an array containing all available Types and Properties
* Normal → each Type is a PHP class file (an abstract class with static Properties)
  
##### Performance
The __json__ library:  
1 .json file, 76.5 KB, contains all available Types (558) and its Properties
  
The __minified__ library:  
1 php file, 91.2 KB, 3347 lines of code, contains all available Types (558) and its Properties, stored in a hash table (array)  
  
The __normal__ abstract static library:   
558 php files, 582.4 KB, 8756 lines of code without comments and documentation, 1 file for each available Type     
