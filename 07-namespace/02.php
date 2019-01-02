<?php

use xxx as zend;
use yyy\zzz as magento;

//  Thực hành namspace với function và const
require_once 'Zend/Student.php';
require_once 'Magento/Student.php';

xxx\showHello('Akai');      //Cách gọi 1
echo '<br />';
zend\showHello('Akai');      //Cách gọi 2
echo '<br />';
yyy\zzz\showHello('Akai');
echo '<br />';

echo magento\MYNAME;

?>