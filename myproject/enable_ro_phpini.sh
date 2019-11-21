SEARCH="phar.readonly = Off"
REPLACE="phar.readonly = On"
FILEPATH="/etc/php.ini"
sed -i "s/$SEARCH/$REPLACE/g" $FILEPATH

