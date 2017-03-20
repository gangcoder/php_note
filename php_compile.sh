git clone http://git.php.net/repository/php-src.git

cd php-src

./buildconf

./configure 
--prefix=/usr/local/php7 \
--with-config-file-path=/usr/local/php7/etc \
--with-mcrypt=/usr/include \
--with-mysql=mysqlnd  \
--with-mysqli=mysqlnd  \
--with-pdo-mysql=mysqlnd  \
--with-gd  \
--with-iconv  \
--with-zlib  \
--with-openssl  \
--without-pear  \
--with-gettext  \
--with-xmlrpc  \
--with-curl  \
--with-jpeg-dir \
--with-freetype-dir \
--enable-xml  \
--enable-bcmath  \
--enable-shmop  \
--enable-sysvsem  \
--enable-inline-optimization  \
--enable-mbregex  \
--enable-fpm  \
--enable-mbstring  \
--enable-ftp \
--enable-gd-native-ttf  \
--enable-pcntl  \
--enable-sockets  \
--enable-zip  \
--enable-soap  \
--enable-session  \
--enable-opcache \
--enable-fpm \
--with-fpm-user=www \
--with-fpm-group=www \
--enable-fastcgi \

make && sudo make install
