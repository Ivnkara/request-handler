Для начала создаём .env 
```
APP_SLEEP_PER_REQUEST=0
APP_LOG_FILE=/../../../log/log.txt
APP_REQUESTS_AMOUNT=10000
```

Затем вендор
```
composer install
```

На всяки случай в директории проекта
```
mkdir log && touch log/log.txt && mkdir docker/nginx/logs
```

Запуск апп, предварительно освободить 80 порт
```
docker-compose up -d
```

открываем в браузере ```http://localhost```
