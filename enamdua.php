<?php
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax
EOD;
/*More complex example,with variables.*/
class foo{
    var $foo;
    var $bar;
    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('bar1','bar2','bar3');
    }
}
$foo = new foo();
$name = 'Achamatim';
echo <<<EOT

<u>$str</u><br>
My name is "<b>$name</b>". I am Printing some <b>$foo->foo</b>.
Now, I am Printing some <b>{$foo->bar[1]}</b>.
This should print a capital 'A'; \x41;


EOT;
?>