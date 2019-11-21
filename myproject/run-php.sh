#!/bin/bash
PHP=`which php`
$PHP -d "phar.readonly = Off" create-phar-executeable.php
