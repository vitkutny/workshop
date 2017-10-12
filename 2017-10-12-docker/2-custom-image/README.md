```
docker build -t workshop:php-7.1-apache-with-bcmath .
```

```
docker run -p 666:80 -v $(pwd)/www:/var/www/html workshop:php-7.1-apache-with-bcmath
```

http://127.0.0.1:666/
