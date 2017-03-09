# prepend_var

## This function is used to prepend text to a variable in php

## Usage :-

####1. Download utility.php file and store it in your current working directory
####2. Include utility.php file in your php file so that you can use prepend_var function
####3. Function definition is like - prepend_var(data,text) where data is the string or var on which we have to prepend the text and 2nd argument is text which we have to prepend (it can be a string or another var) 
####Example -
```php 
include('utility.php');
var $data = "World";
$data = prepend_var($data,"Hello ");
echo $data;
// Output will be - Hello World //
```
####4. Function will return the updated var which you can use thereafter.
