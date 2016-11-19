<html>
<head>
<title>Object Functions</title>
</head>
<body>
<?php
abstract class AbstractFoo {
  abstract function aFunction();
}

class Foo extends AbstractFoo{ 
    public $aVar = 'This is a member variable of the Foo class called $aVar.  '; 
    private $privVar = 'This is a private variable.';
    public $FunctionName = 'This is a variable of the Foo class called $FunctionName.'; 
    
    
    function aFunction() { 
        echo 'This is inside `aFunction()`.'; 
    } 
} 

$foo = new Foo; 
echo '<h3>Objects and Reflection</h3>I created a class called Foo:<br><br>';
echo 'class Foo { <br>';
echo '<BLOCKQUOTE>public $aVar = \'This is a member variable of the Foo class called $aVar. \';<br>'; 
echo 'public $FunctionName = \'This is a variable of the Foo class called $FunctionName.\'<br><br><br>'; 
    
    
echo 'function aFunction() { <br>';
echo '<BLOCKQUOTE> echo \'This is inside `aFunction()`\';</BLOCKQUOTE><br>'; 
echo '} </BLOCKQUOTE><br>';
echo '} <br><br>';
echo 'I instantiated an object of the Foo class, $foo:  $foo = new Foo<br>';

echo '<br>The name of the class is: ';
echo get_class($foo);

echo '<br><br>Does the class exist?<br>';
$a = class_exists('Foo');
if ($a){
  echo 'The class exists.';
}
else {
  echo 'The class does NOT exist.';
}

echo '<br><br>Is $foo a member of the Foo class?<br>';
$b = is_a($foo, 'Foo');
if ($b){
  echo '$foo is a member of the Foo class.';
}
else {
  echo '$foo is NOT a member of the Foo class.';
}

echo '<br><br>The parent class of $foo is: ';
echo get_parent_class($foo);

echo '<br><br>The methods of the foo class are:<br>';
$c = get_class_methods($foo);
print_r($c);
?>
</body>
</html>