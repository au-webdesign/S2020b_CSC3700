<?php

namespace one;
Class myHtmlHelper2
{
    function __construct($color = 'red')
    {
        $this->COLOR = "<span style='color:$color'>";
    }
}

namespace two;
Class myHtmlHelper2
{
    function __construct($color = 'blue')
    {
        $this->COLOR = "<span style='color:$color'>";
    }
}

$HH = new myHtmlHelper2();
print "<br /> What just $HH->COLOR happened </span>";
$HH2 = new \one\myHtmlHelper2();
print "<br /> What just $HH2->COLOR happened </span>";


