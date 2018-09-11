# laravel-api-jwt (test)
http://1331836.qievhous.web.hosting-test.net

## API URL's

### http://1331836.qievhous.web.hosting-test.net/api/login
#### Accept:application/json

#### email:john.doe@domain.com
#### password:qwerty


### http://1331836.qievhous.web.hosting-test.net/api/product
#### Accept:application/json

#### Authorization:Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMzMxODM2LnFpZXZob3VzLndlYi5ob3N0aW5nLXRlc3QubmV0XC9hcGlcL2xvZ2luIiwiaWF0IjoxNTM2NzA2MTk5LCJleHAiOjE1MzY3MDk3OTksIm5iZiI6MTUzNjcwNjE5OSwianRpIjoibzNpZGFXS1hIYkpaRkRkeSIsInN1YiI6MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.GdWIp3LLmrntoHH_Z8Kz9ELIk-p3tNKK7eVEJW2Vfws

#### Query Parameters:

quantity - количество,
price_min - цена от,
price_max - цена до,
date_min - дата от,
date_max - дата до,
date_sort - сортировка по дате (asc, desc),
name_sort - сортировка по названию (asc, desc).

Example URL: http://1331836.qievhous.web.hosting-test.net/api/product?quantity=7&price_min=20000&price_max=180000&date_min=2018-09-11&date_max=2018-09-17&date_sort=desc&name_sort=asc
