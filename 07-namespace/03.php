<?php

// The way define multi namespace in 1 file

namespace ABC{
    function show($name){
        echo "<h3>Hello {$name}</h3>";
    }

    echo 'Current namespace is '.__NAMESPACE__;
    show('Akai');
}

namespace DEF{
    function show($name){
        echo "<h3>Hello {$name}</h3>";
    }

    echo 'Current namespace is '.__NAMESPACE__;
    show('Vermouth');
}




?>