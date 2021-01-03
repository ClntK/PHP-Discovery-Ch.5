<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>

<section id="section">
	<h1>1. How can you display the values of variables in a script?</h1>
		<p>To display a variable you must first declare the variable. Once its been declared you can display the variable using an “echo” statement. 
	Example :
	// declaring the variable
	$Variable = GoodBread;
	// displaying the variable
	Echo $Variable;</p> 


	<h1>2. How can you name variables? What rules do you follow in naming them? What cant you do?</h1>
	<p>First, it should be said that the name a variable is given is called an identifier. Identifiers must begin with a dollar sign. The first character
	after the dollar sign must be a letter, although they may also contain uppercase and lowercase letters, numbers, or underscores. Identifiers may not 
	contain spaces, and they are case sensitive.</p>


	<h1>3. How would you use constants in a script?</h1>
	<p>Constants are not declared or initialized in the same way as variables. Constants are declared using the define() function, and usually have 2 arguments. 
	The first being the constant’s name, and the second being its value. Constant names, unlike variables, do not begin with a dollar sign, and are typically 
	all CAPS.  Constant values can be text strings, numbers, or a Boolean value. 
	Example:
	define(“DEFAULT_CONDIMENT”, “ketchup”);
	You can also make a constant’s name case insensitive by adding a third argument to the define function in the form of the Boolean value “TRUE”. 
	Example:
	define(“DEFAULT_BEVERAGE”, “coffee”, “TRUE”);
	This then allows you to refer to the “DEFAULT_BEVERAGE” constant as “default_beverage” or “Default_Beverage”. Though, contrary to most online media 
	etiquette, it’s actually considered best practice to just use all CAPS.</p>


	<h1>4. What data types are primitive? What about reference data types?</h1>
	<p>Primitive data types are those that can be assigned only a single value. Primitive data types include:
	•	Integer Numbers - a set of all pos+ or neg- numbers including 0, with no decimal places. A whole number. 
	•	Floating - point Numbers – numbers using decimal places or using exponential notation.
	•	Booleans - “true” or “false”.
	•	Strings - Text.
	•	And NULLS - an empty value.
	Reference data types, aka composite data types, are those that can contain more than one value, or more complex types of information. These data types 
	include:
	Arrays – sets of data represented by a single variable name.
	And Objects – complex data structures made up of variables and functions that work together as a single entity.</p>
</section>

</body>
</html>