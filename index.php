<?php
// echo "Hello World";
// echo "<br>";
// print "Hello World";
// best practice php tags remove end tags if we have only php code ((output buffering))
?>

<?php
//! ====================comment====================

// single line comment

/* multi 
line 
comment */

//! ==================== Data Types ====================
// Boolean => bool 
// String    
// Integer => int
// Float => float -- double
// Array
// gettype() => get data type
// echo"<br>";
// echo gettype(true); // boolean
// echo"<br>";
// echo gettype("Hello World"); // string
// echo"<br>";
// echo gettype(10); // integer
// echo"<br>";
// echo gettype(-10); // integer
// echo"<br>";
// echo gettype(0); // integer
// echo"<br>";
// echo gettype(10.5); // double
// echo"<br>";
// echo gettype(- 10.5); // double
// echo"<br>";
// echo gettype([1,2,3]); // array
// echo"<br>";
// echo gettype(array("1"=>"1","2"=>"2","3"=>"3")); // array 
// echo"<br>";
// echo gettype(["1"=>"1","2"=>"2","3"=>"3"]); // array

//! ==================== Data Types ====================
//! ==== Type juggling + automatic type conversion =====

// echo 10 + "10"; // 20
// echo"<br>";
// echo 10 + "10.5"; // 20.5
// echo"<br>";
// echo gettype(10 + "10.5"); // double
// echo"<br>";
// // echo 10 + "Hello World"; // error
// echo"<br>";
// echo 10 + "10Hello World"; // 20 Warning
// echo"<br>";
// echo gettype(10 + "10Hello World"); // integer
// echo"<br>";
// // echo 10 + "Hello World10"; // error
// echo"<br>";
// echo true + true; // 2
// echo"<br>";
// echo true + false; // 1
// echo"<br>";
// echo gettype(10+10.2); // double
// echo"<br>";


//! ==================== Types Casting ====================
// (int) (integer)
// (bool) (boolean)
// (float) (double) (real)
// (string)
// (array)
// (object)
// (null)
// (settype) => set type

// echo (int) "10.5"; // 10
// echo"<br>";
// echo (int) "10Hello World"; // 10
// echo"<br>";
// echo (int) "Hello World10"; // 0
// echo"<br>";
//  echo (int) 10 + 10.5; // 20
// echo (bool) "true"; // 1
// echo"<br>";
// echo (bool) "string"; // 1
// echo"<br>";
// echo (bool) "false"; // 1 
// echo"<br>";
// echo (bool) "01"; // 1
// echo"<br>";
// echo (bool) ""; // 0
// echo "<br>";
// echo (bool) false; // 0
// echo "<br>";
// echo 10 + (int) "10.5"; // 20
// echo "<br>";
// //!settype($var, "type");
// $var = "10.5";
// settype($var, "integer");
// echo $var; // 10
// echo "<br>";
// $var = "10.5";
// settype($var, "double");
// echo $var; // 10.5
// echo "<br>";
// $var = "10.5";
// settype($var, "string");
// echo $var; // 10.5
// echo "<br>";
// var_dump((bool) ""); // bool(false)
// echo "<br>";
// var_dump((bool) "0"); // bool(false)
// echo "<br>";
// var_dump((bool) "1"); // bool(true)
// echo "<br>";
// var_dump((bool) array()); // bool(false)
// echo "<br>";
// var_dump((bool) []); // bool(false)

// var_dump((bool) to check the value and type


//! =============== string and Escaping ================

// echo "Hello 'World'"; // Hello 'World'
// echo "<br>";
// echo 'Hello "World"'; // Hello "World"
// echo "<br>";
// echo "Hello \"World\""; // Hello "World"
// echo "<br>";
// echo 'Hello \'World\''; // Hello 'World'
// echo "<br>";
// echo "Hello \"World\""; // Hello "World"
// echo "<br>";
// echo "Hello\tWorld"; // Hello     World
// echo "<br>";
// echo "Hello \\world\\ "; // Hello \world\
// echo "<br>";
// echo "Hello \\\\world\\ "; // Hello \\world\

// //? multi line string nl2br => new line to break
// echo "<br>";
// echo nl2br("Hello
//             world
//             "); // Hello

//! ================ Heredoc & Nowdoc =================
// heredoc => double quotes / nothing
// nowdoc => single quotes

// $name = "Ahmed";

// echo <<<here
// Hello $name
// some text """\\\\\\"
// here;

// echo "<br>";

// echo <<<'now'
// Hello $name
// some text """\\\\\\"
// now;

// echo "<ul>"
//     ."<li>$name</li>"
//     ."<li>$name</li>"
//     ."<li>$name</li>"
//     ."</ul>";

// echo <<< "listNames"
// <ul>
//     <li>$name</li>
//     <li>$name</li>
//     <li>$name</li>
// </ul>
// listNames;

//!========== Array ==========

// echo "<pre>";
// print_r(
//     [
//         "name" => "Ahmed",
//         "age" => 20,
//         "skills" => [
//             "html",
//             "css",
//             "js",
//             "php"
//         ]
//     ]
// );
// echo "</pre>";

//! ========= variables ===========
//! ========= naming rules ===========
// start with dollar sign $
// start with letter or underscore
// only letters, numbers and underscore
// case sensitive
// no reserved words
//? loosely typed language

// $name = "Ahmed";
// $age = 20;
// $skills = ["html", "css", "js", "php"];

// echo $name; 
// echo "<br>";
// echo $age;
// echo "<br>"; 
// echo $skills[0]; // html
// echo "<br>";
// echo $skills[1]; // css
// echo "<br>";
// echo "hello $name"; // hello Ahmed
// echo "<br>";
// echo 'hello $name'; // hello $name

//! ========= variable variables ===========

// $name = "Ahmed";
// $$name = "Ali";
// $$$name = "Mohamed";

// echo $name; // Ahmed
// echo "<br>";
// echo $$name; // Ali
// echo "<br>";
// echo $Ahmed; // Ali
// echo "<br>";
// echo $$$name; // Mohamed
// echo "<br>";
// echo $Ali; // Mohamed
// echo "<br>";

// echo "hello $name"; // hello Ahmed
// echo "<br>";
// echo "hello ${$name}"; // hello Ali
// echo "<br>";
// echo "hello ${$$name}"; // hello Mohamed
// echo "<br>";

//! ========= assign variable by Reference   ===========

// $a = 10;
// $b = &$a;
// $b = 20;
// echo $a; // 20
// echo "<br>";
// echo $b; // 20
// echo "<br>";


//! ================ Predefined Variables ================

// echo $_SERVER["SERVER_NAME"]; // localhost
// echo "<br>";
// echo $_SERVER["SERVER_PORT"]; // 80
// echo "<br>";
// echo $_SERVER["SERVER_PROTOCOL"]; // HTTP/1.1
// echo "<br>";
// echo $_POST["name"]; 
// echo "<br>";
// echo $_POST["age"]; 

//! 
// ?>

<!-- <form action="" method="post"> -->
    <!-- <input type="text" name="name"> -->
    <!-- <input type="text" name="age"> -->
    <!-- <input type="submit" value="submit"> -->
<!-- </form> -->
<?php

//! ================ Constant ================
// constant always uppercase

// define("NAME", "Ahmed");
// define("AGE", 20);
// echo NAME; // Ahmed
// echo "<br>";
// echo AGE*2; // 40


//! ================ Predefined Constants ================
//? predefined constants [sensitive case]
// echo PHP_VERSION; // 8.2.0
// echo "<br>";
// echo PHP_OS; // WINNT
// echo "<br>";
//? magic constants [insensitive case]
// echo __LINE__; // 299
// echo "<br>";
// echo __FILE__; // D:\PHP\htdocs\ala\index.php
// echo "<br>";
// echo __DIR__; // D:\PHP\htdocs\ala
// echo "<br>";

//! ================ Operators ================
//? arithmetic operators
// +$a => identity
// -$a => negation

// echo +"10";    // 10
// echo "<br>";
// echo gettype (+"10"); // integer
// echo "<br>";
// echo -"10";     // -10
// echo "<br>";
// echo gettype (-"10"); // integer

//? assignment operators
// $a = 10;
// $a += 10; // $a = $a + 10;
// echo $a; // 20
// echo "<br>";
// $a -= 10; // $a = $a - 10;
// echo $a; // 10
// echo "<br>";
// $a *= 10; // $a = $a * 10;
// echo $a; // 100
// echo "<br>";
// $a /= 10; // $a = $a / 10;
// echo $a; // 10
// echo "<br>";
// $a %= 10; // $a = $a % 10;
// echo $a; // 0
// echo "<br>";

//? comparison operators

// var_dump(10 == "10"); // true
// echo "<br>";
// var_dump(10 === "10"); // false
// echo "<br>";
// var_dump(10 != "10"); // false   <> 10 
// echo "<br>";
// var_dump(10 !== "10"); // true
// echo "<br>";

// space ship operator
// echo 10 <=> 10; // 0
// echo "<br>";
// echo 10 <=> 20; // -1
// echo "<br>";
// echo 20 <=> 10; // 1
// echo "<br>";

//? increment / decrement operators

// post increment
// $a = 10;
// echo $a++; // 10
// echo "<br>";
// echo $a; // 11
// echo "<br>";

// pre increment
// $a = 10;
// echo ++$a; // 11
// echo "<br>";
// echo $a; // 11
// echo "<br>";

// post decrement
// $a = 10;
// echo $a--; // 10
// echo "<br>";
// echo $a; // 9
// echo "<br>";

// pre decrement
// $a = 10;
// echo --$a; // 9
// echo "<br>";
// echo $a; // 9
// echo "<br>";

//? logical operators
// and &&  && has higher precedence than and 
// or || || has higher precedence than or 
// xor
// not !

//!=========== string operators ===========
// .
// .=

// define("NAME", "Ahmed");
// $a = "hello";
// $b = "world";
// $c = "!";
// echo $a . $b; // helloworld
// echo "<br>";
// echo $a .= $b; // helloworld
// echo "<br>";
// echo "hello" . "world" . "!"; // helloworld!
// echo "<br>";
// echo "{$a} {$b} {$c}"; // hello world !
// echo "<br>";
// echo "{$a} {$b} {$c}" .NAME ; // hello world !

//!=========== array operators ===========
// + => union
// == => equality
// === => identity [same type and value same order and same key]
// != => not equal
// <> => not equal
// !== => not identical

// $a = [1=> "A" , 2=> "B" ];
// $b = [3=> "C" , 4=> "D"  ];
// $c = $a + $b;

// echo "<pre>";
// print_r($c); 
// echo "</pre>";

// print_r($a == $b); // false
// print_r($a === $b); // false
// print_r($a != $b); // true
// print_r($a <> $b); // true
// print_r($a !== $b); // true



//!=========== error operators ===========
// @ => error control operator

// $a = 20;
// $b = @$a or die("not found"); // 15
// echo $b;
// echo "<br>";

// file 
// $file = @fopen("test.txt", "r") or die("not found");

// include
// (@include "test.txt" )or die("not found");


//!===========  Operators Precedence  ===========

// echo 10 + 20 * 30; // 610
// echo "<br>";
// echo (10 + 20) * 30; // 900
// echo "<br>";

// $a = 10 || false ; // $a = (10 || false) => $a = true
// echo $a; // 1
// echo "<br>";

// $b = 10 or false ; // ($b = 10 ) or false => $b = 10
// echo $b; // 10
// echo "<br>";




//! ================ Control Structures ================
//? if
// $a = 10;
// if($a == 10){
//     echo "true";
// }else{
//     echo "false";
// }

//? if else if
// $a = 20;
// if($a == 10){
//     echo "true";
// }else if($a == 20){
//     echo "false";
// }else{
//     echo "not found";
// }

//? alternative syntax
// $a = 20;
// if($a == 10):
//     echo "true";
// elseif($a == 20):
//     echo "false";
// else:
//     echo "not found";
// endif;


// ?>

<?php
// $page = "about" ;

// if ($page == "home"):
//     header("Location: homePage.php");
// exit();
// elseif ($page == "about"):
//     header("Location: aboutPage.php");
//     exit();
// endif;

//!========== ternary operator ==========

// $a = true;

// echo "i love php because it's easy" . ($a ? " and it's fun" : " and it's hard") . " to learn it";

//!========== switch ==========

// $day= "sunday" ;

// switch ($day) {
//     case "monday":
//         echo "today is $day";
//         break;
//     case "tuesday":
//         echo "today is $day";
//         break;
//     case "wednesday":
//         echo "today is $day";
//         break;
//     case "thursday":
//         echo "today is $day";
//         break;
//     case "friday":
//         echo "today is $day";
//         break;
//     case "saturday":             
//     case "sunday":
//         echo "today is $day and there is no school ";
//         break;
//     default:
//         echo "not found";
//         break;
// }

//!========== while ==========
// $i = 1;
// while ($i <= 10) :
//     echo $i . "<br>";
//     $i++;
// endwhile;

//!========== do while ==========
// $i = 1;
// do {
//     echo $i . "<br>";
//     $i++;
// } while ($i <= 10);

//!========== for ==========
// for ($i = 1; $i <= 10; $i++) :
//     echo $i . "<br>";
// endfor;

//!========== foreach ==========
// $a = [1, 2, 3, 4, 5];
// foreach ($a as $value) :
//     echo $value . "<br>";
// endforeach;

// key and value

// $a = [1, 2, 3, 4, 5];
// foreach ($a as $key => $value) :
//     echo $key . "=>" . $value . "<br>";
// endforeach;


//! ===== break and continue =====
// $a = [1, 2, 3, 4, 5];
// foreach ($a as $key => $value) :
//     if ($key == 2) {
//         break;
//     }
//     echo $key . "=>" . $value . "<br>";
// endforeach;

// $a = [1, 2, 3, 4, 5];
// foreach ($a as $key => $value) :
//     if ($key == 2) {
//         continue;
//     }
//     echo $key . "=>" . $value . "<br>";
// endforeach;

//! ======= include and require =======

// include "test.php";
// echo $a . "<br>";

// require "test.php";
// echo $a . "<br>";

// difference between include and require
// require will produce a fatal error (E_COMPILE_ERROR) and stop the script.
// include will only produce a warning (E_WARNING) and the script will continue.

//! ======= include_once and require_once =======
// include_once "test.php";
// echo $a . "<br>";
// $a=50;
// include_once "test.php";
// echo $a . "<br>";                // 50

//!============= function =============

//? introduction and dry concept (don't repeat yourself)
//?syntax
// function functionName($param1, $param2, $param3) {
//      code to be executed
// }
// functionName($arg1, $arg2, $arg3);

// function hello($user) {
//     echo "hello $user";
// }

// hello("ahmed");

// function sum($num1, $num2) {
//     return $num1 + $num2;
// }

// sum(10, 20); // 30



// function deep_freezer ($temp) {
//     if ($temp < -18):
//         return "the temperature is $temp and it's ok";
//     else:
//         return "the temperature is $temp and it's not ok";
//     endif;
    
// } 


// echo deep_freezer(20) . "<br>";


//? function 
//? optional return and null
//? end after return

// $prizes =["car", "house", "money", "nothing"];

// function get_number($num1,$num2) {
//     return $num1 + $num2;
// }

// echo $prizes[get_number(1,2)];


//? default value for parameters

// function get_number($num1=5,$num2 = 10,$num3 = 15) {
//     return $num1 + $num2 + $num3;
// }

// echo get_number(1,2,3);
// echo "<br>";
// echo get_number(num3:1);
// echo "<br>";
// echo get_number(num2:1);
// echo "<br>";


//! variable arguments list
//_______func_num_args()
//_______func_get_args()
//_______func_get_arg(index)
//? Spread operator

// function calculate () {
    // echo "Number of arguments :" . func_num_args() . "<br>";
    // echo "Argument Index 1 :" . func_get_arg(1) . "<br>";
    // print_r(func_get_args());
//     $result=0;
//     foreach (func_get_args() as $arg) :
//         $result += $arg;
        
//     endforeach;
//     echo "<br> result = $result";

// }

// ------ spread operator

// function calculate_2 (...$nums) {
//     $result=0;
//     foreach ($nums as $num) :
//         $result += $num;
        
//     endforeach;
//     echo "<br> result = $result";

// }

// calculate(10,20,30,40,50,100);
// calculate_2(10,20,30,40,50,100,150);


//----- unpacking array

// $group_of_skills=["html", "css", "js", "php", "mysql"];

// function get_data ($name, $position= "web developer " , ...$skills) {
//     echo "name : $name <br>";
//     echo "position : $position <br>";
//     echo "skills : <br>";
//     foreach ($skills as $skill) :
//         echo "-- $skill <br>";
//     endforeach;
// }


// get_data("Rami", "frontEnd developer" , "html", "css", "js");
// get_data("Ahmed", ...$group_of_skills);

//? variable function

// function one() {
//     echo "one";
// }

// $func1="one";

// echo $func1();
// echo "<br>";

// function hello ($name) {
//     echo "hello $name";
// }

// $func2="hello";

// echo $func2("ahmed");
// echo "<br>";
// ? built in functions

// echo strlen("ahmed");
// echo "<br>";
// echo str_word_count("ahmed abd elhady");

// echo "<br>";
// $func3 = "str_word_count";
// echo $func3("ahmed abd elhady");

//function existance
// function_exists("str_word_count");

//? passing arguments by reference

// function add(&$num) {       //!& is a reference operator
//     $num += 10;
//     return $num;
// }

// $a=10;
// echo add($a);
// echo "<br>";
// echo $a; // 20


//? return type declaration

// function add(int $num1, int $num2) : int {
//     return $num1 + $num2;
// }

// echo add(10, 20.5);
// echo "<br>";
// echo add(10, "20.5");
// echo "<br>";

//! ============= anonymous function =============


//? syntax
// $var = function ($param1, $param2, $param3) {
//     code to be executed
// };

// $sum = function ($num1, $num2) {
//     return $num1 + $num2;
// };

//? inherit variable from parent scope

// $a=10;
// $b=20;

// $sum = function (c$) use ($a, $b) {
//     return $a + $b + $c;
// };

// echo $sum(30); // 60

//?pass anonymous function to another function => array_map

$nums = [10, 20, 30, 40, 50];

// function add_10($num) {
//     return $num + 10;
// }

// $nums_after_adding_10  = array_map("add_10", $nums);

// echo "<pre>";
// print_r($nums_after_adding_10);
// echo "</pre>";

// $nums_after_adding_5  = array_map(function ($num) {return $num + 5;}, $nums);

// echo "<pre>";
// print_r($nums_after_adding_5);
// echo "</pre>";

//! ============= arrow function =============
//? syntax
// $var = fn ($param1, $param2, $param3) => code to be executed;

// $nums = [10, 20, 30, 40, 50];

// $nums_after_adding_5  = array_map(fn ($num) =>  $num + 5, $nums);

// echo "<pre>";
// print_r($nums_after_adding_5);
// echo "</pre>";

//? inherit variable from parent scope in arrow function => no need to use use keyword

//! ============= String Access And Update Elements =============
//? string is an array of characters
//? access string elements by index
//? negative index is allowed with the php version 7.1 or higher

// $str = "i love php";
// echo "first letter is : $str[0]";
// echo "<br>";
// echo "length is : " . strlen($str);
// echo "<br>";
// echo "last letter is : {$str[strlen($str)-1]}";
// echo "<br>";
// echo "last letter is : $str[-1]";
// echo "<br>";


// //? update string elements by index

// $str[0] = "I";
// echo $str;
// echo "<br>";

// $newstr = "we ". substr($str, 2);

// echo $newstr;
// echo "<br>";
// $newstr = substr_replace($str, "We ", 0, 2);
// echo $newstr;


//? string functions

// echo ucfirst("ahmed"); // first letter capital
// echo "<br>";
// echo lcfirst("AHMED"); // first letter small
// echo "<br>";
// echo ucwords("ala eddine azri"); // first letter of each word capital
// echo "<br>";
// echo ucwords("ala eddine.azri" ,"."); // 
// echo "<br>";
// echo strtoupper("ahmed"); // all letters capital
// echo "<br>";
// echo strtolower("AHMED"); // all letters small
// echo "<br>";
// echo str_replace("ala", "baha", "ala eddine azri"); // replace string
// echo "<br>";
// echo str_replace(["ala", "eddine"], ["baha", "azri"], "ala eddine azri"); // replace string
// echo "<br>";
// echo str_repeat("ahmed ", 5); // repeat string
// echo "<br>";
// echo strrev("ahmed");  // string reverse 
// echo "<br>";


//? string functions 
//implode => convert array to string
//explode => convert string to array
//str_shuffle => shuffle string
//strrev => reverse string
//trim => remove spaces from start and end of string
//ltrim => remove spaces from start of string
//rtrim => remove spaces from end of string
//--- space " "
//--- tab "\t"
//--- new line "\n"
//--- carriage return "\r"
//--- vertical tab "\v"
//--- form feed "\f"
//--- null byte "\0"
//--- unicode character "\u{a0}" 

// $friends = [ "ahmed","ali","kimo","baha","mohamed"];

// echo implode(" - ", $friends);
// echo "<br>";
// // implode list of friends with new line return
// echo implode("<br>", $friends);
// echo "<br>";


// $str = "i love php and i love javascript";

// echo "<pre>";
// print_r(explode(" ", $str));
// echo "</pre>";

// echo "<pre>";
// print_r(explode("and", $str));
// echo "</pre>";


// echo "<pre>";
// print_r(explode(" ", $str, 3));
// echo "</pre>";


// $new_str = " ala eddine azri   ";
// echo trim($new_str);
// echo "<br>";
// echo strlen(trim($new_str));
// echo "<br>";
// echo ltrim($new_str);
// echo "<br>";
// echo strlen(ltrim($new_str));
// echo "<br>";
// echo rtrim($new_str);
// echo "<br>";
// echo strlen(rtrim($new_str));
// echo "<br>";
// $new_str_2= " @ala eddine azri@## ";
// echo trim($new_str_2, "@ , #");
// echo "<br>";
// echo strlen(trim($new_str_2, "@ , #"));

// $new_str_3 = "ala eddine azri";

// echo chunk_split($new_str_3, 3, " ");
// echo "<br>";
// echo chunk_split($new_str_3, 3, "/");

//str_split => split string to array of characters
//chunk_split => split string to array of characters with a specific length

// echo "<pre>";
// print_r(str_split($new_str_3 , 3));
// echo "</pre>";

// echo "<br>";
// strip_tags => remove html tags from string
// echo strip_tags("<h1>ahmed</h1>");
// echo "<br>";


//? string functions 
//--- strpos => search for a specific string in a string and return the index of the first match
//--- strrpos => search for a specific string in a string and return the index of the last match
//--- stripos => search for a specific string in a string and return the index of the first match without case sensitive
//--- strripos => search for a specific string in a string and return the index of the last match without case sensitive
//--- substr_count => count the number of times a substring occurs in a string
//--- substr => return a part of a string

$str = "Hello Hello";
// echo strpos($str, "H");  // 0
// echo "<br>";
// echo strpos($str, "H", 1); // 6
// echo "<br>";
// echo strpos($str, "H", -5);  // 6
// echo "<br>";
// echo strpos($str, "H", -6);  // 0

// echo "<br>";
// echo stripos($str, "h");  // 0

// echo "<br>";
// echo substr_count($str, "H");  // 2
// echo "<br>";
// echo substr_count($str, "H", 1);  // 1
// echo "<br>";
// var_dump( substr_count($str, "He",1,5));  // 0 // 1=> start index 5=> length

// echo "<br>";
// echo substr_count("abcdabcda" , "abcda"); //  1 
