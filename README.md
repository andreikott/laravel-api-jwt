# laravel-api-jwt (test)
http://1331836.qievhous.web.hosting-test.net

## API URL's

### POST http://1331836.qievhous.web.hosting-test.net/api/login
#### Accept:application/json

#### email:john.doe@domain.com
#### password:qwerty


### GET http://1331836.qievhous.web.hosting-test.net/api/product
#### Accept:application/json

#### Authorization:Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMzMxODM2LnFpZXZob3VzLndlYi5ob3N0aW5nLXRlc3QubmV0XC9hcGlcL2xvZ2luIiwiaWF0IjoxNTM2NzUxNDg3LCJleHAiOjE1MzY3NTUwODcsIm5iZiI6MTUzNjc1MTQ4NywianRpIjoiYlZPVUs3RkxyamU3U1NIbyIsInN1YiI6MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.cbtPZGSA3JbaHRecD9OqYMs_AwFQLQCxtc1lJC38CNc

#### Query Parameters:

quantity - количество,
price_min - цена от,
price_max - цена до,
date_min - дата от,
date_max - дата до,
date_sort - сортировка по дате (asc, desc),
name_sort - сортировка по названию (asc, desc).

Example URL: http://1331836.qievhous.web.hosting-test.net/api/product?quantity=7&price_min=20000&price_max=180000&date_min=2018-09-11&date_max=2018-09-17&date_sort=desc&name_sort=asc

_________________________________
### Так же доступны:
#### GET http://1331836.qievhous.web.hosting-test.net/api/product/2 - получить запись с id 2;
#### PUT http://1331836.qievhous.web.hosting-test.net/api/product/2 - обновить запись с id 2;
#### DELETE http://1331836.qievhous.web.hosting-test.net/api/product/2 - удалить запись с id 2;
#### POST http://1331836.qievhous.web.hosting-test.net/api/product - создать новую запись;
