FROM tutum/apache-php:latest
MAINTAINER Gergo Ertli <egergo@gmail.com>

ENV WORDPRESS_VER=4.4.1 \
    DB_HOST="**LinkMe**" \
    DB_PORT="**LinkMe**" \
    DB_NAME=wordpress \
    DB_USER=admin \
    DB_PASS="**ChangeMe**"

RUN cd /tmp && \
    curl -s https://download.newrelic.com/548C16BF.gpg | apt-key add - && \
    echo "deb http://apt.newrelic.com/debian/ newrelic non-free" > /etc/apt/sources.list.d/newrelic.list && \
    apt-get update && \
    apt-get -yq install mysql-client curl unzip newrelic-php5 && \
    newrelic-install install && \
    rm -rf /app && \
    curl -0L http://wordpress.org/wordpress-${WORDPRESS_VER}.tar.gz | tar zxv && \
    mv wordpress /app && \
    rm -rf /app/wp-content/plugins/* && \
    rm -rf /app/wp-content/themes/* && \
    rm -rf /var/lib/apt/lists/* && \
    sed -i "s/AllowOverride None/AllowOverride All/g" /etc/apache2/apache2.conf && \
    a2enmod rewrite && \
    chown -R root:root /app && \
    mkdir /app/wp-content/uploads && \
    chown -R www-data:www-data /app/wp-content/uploads && \
    ln -sf /dev/stderr /var/log/apache2/error.log

ENV ARCADE_BASIC_VER=1.0.6 \
    AZURE_STORAGE_VER=2.2 \
    SHORTCODES_ULTIMATE_VER=4.9.9 \
    SVG_SUPPORT_VER=2.2.2

RUN cd /app/wp-content/plugins && \
    curl -otmp.zip https://downloads.wordpress.org/plugin/windows-azure-storage.${AZURE_STORAGE_VER}.zip && \
    unzip tmp.zip && \
    rm tmp.zip && \
    curl -otmp.zip https://downloads.wordpress.org/plugin/shortcodes-ultimate.${SHORTCODES_ULTIMATE_VER}.zip && \
    unzip tmp.zip && \
    rm tmp.zip && \
    curl -otmp.zip https://downloads.wordpress.org/plugin/svg-support.${SVG_SUPPORT_VER}.zip && \
    unzip tmp.zip && \
    rm tmp.zip && \

    cd /app/wp-content/themes && \
    curl -otmp.zip https://downloads.wordpress.org/theme/arcade-basic.${ARCADE_BASIC_VER}.zip && \
    unzip tmp.zip && \
    rm tmp.zip

COPY daheim /app/wp-content/themes/daheim
COPY wordpress.conf \
     wp-config.php \
     run.sh \
     daheim-google-analytics.php \
     .htaccess \
     /tmp/

RUN rm -rf /etc/apache2/sites-enabled/000-default.conf && \
    mv /tmp/wordpress.conf /etc/apache2/sites-enabled/ && \
    mv /tmp/wp-config.php /app/ && \
    mv /tmp/.htaccess /app/ && \
    mv /tmp/run.sh / && \
    mv /tmp/daheim-google-analytics.php /app/wp-content/plugins/ && \
    chmod +x /run.sh
