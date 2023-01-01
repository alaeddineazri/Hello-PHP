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
