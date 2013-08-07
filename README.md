# Spider4Schema
A Web Bot using the cURL library that crawls the Schema.org web site and creates the PHP files for a Microdata PHP library. Created during the Google Summer of Code 2013 for my Joomla! project  
  
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
  
The libraries will be created in ```libraries``` folder  
  
##### Library Types
There are 2 types of Microdata library you can create:
* Minified → an array with all Types and Properties
* Normal → each Type is file (an abstract class with static Properties)
  
##### Performance
The __minified__ library:  
1 file, 71.7 KB, 2600 lines of code, the Types and Properties are in a hash table (array)  
  
The __normal__ abstract static library:   
428 files, 612.2 KB, 7.439 lines of code without comments and documentation, ~ 26.000 lines of code with comments and documentation     