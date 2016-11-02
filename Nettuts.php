<html>
<head>
<title>Reflection</title>
</head>
<body>
<?php
class Nettuts {
 
    function publishNextArticle($editor) {
        $editor->setNextArticle('135523');
        $editor->publish(); // first call to publish()
 
        $reflector = new ReflectionClass($editor);
        $publishMethod = $reflector->getMethod('publish');
        $publishMethod->invoke($editor); // second call to publish()
    }
 
}
?>
</body>
</html>