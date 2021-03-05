## run php 
[localhost:8001](http://localhost:8001)

## run php mysql
[localhost:8000](http://localhost:8000)

## docker compose
[Rf](https://gist.github.com/jcavat/2ed51c6371b9b488d6a940ba1049189b)

## example config
[example config](https://github.com/jcavat/docker-lamp)

## export data mysql to file
``` base
docker exec  [container id] /usr/bin/mysqldump -u user --password=test myDb > myDb.sql
```

## connect server for keep mysql
``` base
docker exec -t -i [container_mysql_name] /bin/bash
```

## Clean everything:

``` base
docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)
docker rmi my-old-docker-image
docker volume rm $(docker volume ls -q)
```

## Dockerfile
I changed the Dockerfile to the following (using an older version):

``` base
FROM php:7.0.30-apache
RUN docker-php-ext-install mysqli

```