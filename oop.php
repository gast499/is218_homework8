<html>
<head>
<title>Object Functions using Reflection</title>
</head>
<body>
<?php
class Foo { 
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
echo 'I can call the variables of the object of the class by using $foo -> aVar:  ';
echo $foo->aVar;
$reflector = new ReflectionClass($foo);

echo '<br><br>You can use reflection to get the name of the class of an instantiated object:<br>';
echo $reflector->getName();

echo '<br><br>You can use reflection to check if a class is abstract:<br>';
$ab = $reflector->isAbstract();
if ($ab){
  echo 'The class is abstract.';
}

else {
  echo 'The class is NOT abstract.';
}

echo '<br><br>You can use reflection to access private properties as well.<br>';
$pvar = $reflector -> getProperty('privVar');
echo $pvar;

echo '<br><br>You can use reflection to check if a class has methods:<br>';
$a = $reflector->getMethods();
print_r($a);

echo '<br><br>You can use reflection to get a string representation of an object:<br>';
echo $reflector->__toString();

?>
</body>
</html>