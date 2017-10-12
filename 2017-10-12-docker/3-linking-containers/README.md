```
docker run -v $(pwd)/www-server:/var/www/html --name workshop_server php:7.1-apache
```

```
docker run -p 666:80 -v $(pwd)/www-client:/var/www/html --link workshop_server:server php:7.1-apache
```

http://127.0.0.1:666/

```
docker-compose up
```

http://127.0.0.1:666/
