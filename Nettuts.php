<html>
<head>
<title>Reflection</title>
</head>
<body>
<?php
class Nettuts {
 
    function publishNextArticle($editor) {
        var_dump($editor->getEditorName());
 
        $reflector = new ReflectionClass($editor);
        $editorName = $reflector->getProperty('name');
        $editorName->setAccessible(true);
        $editorName->setValue($editor, 'Mark Twain');
        var_dump($editorName->getValue($editor));
    }
 
}
?>
</body>
</html>