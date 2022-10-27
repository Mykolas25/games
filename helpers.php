
<?php

function dump(...$variables)
{
    foreach($variables as $variable){
        echo "<pre>". print_r($variable,true) ."</pre>";
    }
}

function view($path, $data)
{
    extract($data);
    ob_start();
    include $path;
    $result = ob_get_clean();
    echo $result;
}