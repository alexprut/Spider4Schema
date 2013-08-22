# Spider4Schema
A Web Bot that crawls the http://Schema.org web site to retrieve all available Types and Properties in order to create some PHP microdata libraries.  
Created during the Google Summer of Code 2013 for my Joomla! project  
  
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
There are 3 types of Microdata library you can create:
* JSON → a .json file containing all Types and Properties
* Minified → an array with all Types and Properties
* Normal → each Type is file (an abstract class with static Properties)
  
##### Performance
The __json__ library:  
1 file, 70.2 KB, all Types and Properties are in JSON
  
The __minified__ library:  
1 file, 84.5 KB, 2600 lines of code, the Types and Properties are in a hash table (array)  
  
The __normal__ abstract static library:   
531 files, 541.5 KB, 8011 lines of code without comments and documentation, ~ 26.000 lines of code with comments and documentation     