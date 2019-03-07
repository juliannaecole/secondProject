# Definitions of PHP Syntax

**_<?php_** - The opening tag for the file that tells PHP to start interpreting the code; anything that is not between the opening tag and closing tag **_<?_** is ignored 

**_declare_** - Used to set execution directives for just a section of code or for all of the code following it

**_strict_types=1_** - Enables strict typing when used with declare construct; this forces you to declare a type and use variables of that exact type, otherwise you will get a TypeError

**_use_** - Tells PHP to use the specific class or file you are referring to

**_final_** - Putting "final" before the class means that the class cannot be extended; a final class should hold specific information, while an abstract class should hold more generic information; Example of a final class: "Ford" or "Volvo"

**_abstract_** - Putting "abstract" before the class means that the class can be extended; there should be one abstract class that many final classes may look back at; Example of an abstract class: "Car"

**_class_** - Think of "class" as a bag; the bag can be filled with functions; there should only be one class per file

**_Car_** - The name of a class, which should match the name of the PHP class file

**_extends_** - Used to allow a subclass to inherit the class's public functions; Example: "final class Volvo extends Car" - in this case, Volvo class is inheriting Car class's functions

**_public_** - Declaring a variable or function as "public" means that it can be accessed from anywhere, even outside of the class

**_private_** - Declaring a variable or function as "private" means that it can only be accessed from within that class

**_function_** - Code that does something; ideally, each function only does one thing; functions can be called in different parts of the program to do that thing; AKA "method"

**_testCarAccelerates()_** - A function in the test file that tests if a function in the class file is working or meeting parameters

**_void_** - This is a return type that does not return anything; another example of a return type is "int" which returns an integer

**_$car_** - This is an object; Example: "$car = new Ford();" $car is a new object being created as an instance of the Ford class

**_new_** - Creates an instance of a class, which is an object

**_$this->_** - self-pointer to the current object

**_assertInstanceOf_** - Assertions are used to debug code. You can check if a function returns the correct value or does the right job. In this case, the assertion is checking whether the given object is an instance of a given class

**_assertClassHasAttribute_** - Assertions are used to debug code. You can check if a function returns the correct value or does the right job. In this case, the assertion is checking whether the class has a specific attribute.

**_assertEquals_** - Assertions are used to debug code. You can check if a function returns the correct value or does the right job. In this case, the assertion is checking two values, the expected and the actual value, to see if they are equal.

**_assertTrue_** - Assertions are used to debug code. You can check if a function returns the correct value or does the right job. In this case, the assertion is checking whether the returned boolean is true.

**_expected_** - In assertions, there is a expected value, or the correct value that should be returned by a method. This is compared to the actual value.

**_actual_** -  In assertions, there is an actual value, or the value that the method is actually returned. This is compared to the expeted value.

**_Car::class_** - Returns the class name with its namespace; this is like grabbing the whole class

**_method_exists_** - Built in PHP function that check if a method exists in a specified class

**_int_** - notation for the data type integer

**_return_** - stops executing the function and returns a value of a specific data type

**_static_** -  we can declaring classes and methods as static to make makes them accessible without instantiating the class. 


