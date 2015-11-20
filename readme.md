## Blog Api

Event is fired on create and delete which in information logged in laravel.log
<br>
BlogRepository is important of app which located inside App\Blog folder

### All Entries

~~~
GET /article HTTP/1.1
Host: blog.local
Content-Type: application/x-www-form-urlencoded
~~~

Response ( on success )

~~~
{
"title": "Blog Api",
"content": "Simple Blog Api",
"updated_at": "2015-06-24 02:59:52",
"created_at": "2015-06-24 02:59:52",
"id": 19
}
~~~

### One Entry

~~~
GET /article/1 HTTP/1.1
Host: blog.local
Content-Type: application/x-www-form-urlencoded
~~~

Response ( on success )

~~~
{
"title": "Blog Api",
"content": "Simple Blog Api",
"updated_at": "2015-06-24 02:59:52",
"created_at": "2015-06-24 02:59:52",
"id": 19
}
~~~

### Create

~~~
POST /article HTTP/1.1
Host: blog.local
Content-Type: application/x-www-form-urlencoded

title=Blog+Api&content=Simple+Blog+Api
~~~

Response ( on success )

~~~
{
"title": "Blog Api",
"content": "Simple Blog Api",
"updated_at": "2015-06-24 02:59:52",
"created_at": "2015-06-24 02:59:52",
"id": 19
}
~~~

### Updae

~~~
PUT /article/1 HTTP/1.1
Host: blog.local
Content-Type: application/x-www-form-urlencoded

title=Blog+Api&content=Simple+Blog+Api+2
~~~

Response ( on success )

~~~
{
"title": "Blog Api",
"content": "Simple Blog Api 2",
"updated_at": "2015-06-24 02:59:52",
"created_at": "2015-06-24 02:59:52",
"id": 19
}
~~~

### Delete


~~~
DELETE /article/1 HTTP/1.1
Host: blog.local
Content-Type: application/x-www-form-urlencoded

title=Blog+Api&content=Simple+Blog+Api+2
~~~

Response ( on success )

~~~
Deleted
~~~


Response ( on fail )

~~~
Not Found
~~~

p.s. if you need more features please create new issues