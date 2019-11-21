SEARCH=";phar.readonly = On"
REPLACE="phar.readonly = Off"
FILEPATH="/etc/php.ini"
sed -i "s/$SEARCH/$REPLACE/g" $FILEPATH

