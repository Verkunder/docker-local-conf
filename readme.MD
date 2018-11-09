https://phptoday.ru/post-preview/gotovim-lokalnuyu-sredu-docker-dlya-razrabotki-na-php

Run with docker-compose:

```
$docker-compose up
```

Stop with docker-compose:

```
$docker-compose down
```

look up my containers:

```
$docker ps 
```

Stop all containers:

```
$docker stop $(docker ps -a -q)
```

Remove all containers:

```
$docker rm $(docker ps -a -q)
```

Remove all images:

```
$docker rmi $(docker images -q)
```