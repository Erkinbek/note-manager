### User

example.domain/api/user

register
```json
{
  "email" : "erkin.pardayev@gmail.com",
  "pass" : "password",
  "address" : "Jayhun 4/9",
  "fio" : "Pardayev Erkin",
  "phone" : "+998912247734"
}
```

activate
```json
{
  "email" : "erkin.pardayev@gmail.com",
  "token" : "zgsiqCJkDSgBz_1"
}
```

login
```json
{
  "email" : "erkin.pardayev@gmail.com",
  "pass" : "password"
}
```


### Todo categories

example.domain/api/todo-cat

index
```json
{
  "token": "token",
  "user": 1
}
```

create

```json
{
  "token": "token",
  "user": 1,
  "title" : "test1",
  "comment" : "For testing #1"
}
```

view
```json
{
  "token": "token",
  "user": 1,
  "id" : 2
}
```


update

```json
{
  "token": "token",
  "user": 1,
  "id" : 1,
  "title" : "tested #1",
  "comment" : "For testing #1"
}
```


delete 
```json
{
  "token": "token",
  "user": 1,
  "id" : 3
}
```


### Todo list

example.domain/api/todo-list

index
```json
{
  "token": "token",
  "user": 1
}
```

create
```json
{
  "token": "token",
  "user": 1,
  "body" : "to do item for testing 1",
  "cat_id" : 1
}
```

view
```json
{
  "token": "token",
  "user": 1,
  "id": 1
}
```

update
```json
{
  "token": "token",
  "user": 1,
  "body" : "to do item for testing 1",
  "cat_id" : 1,
  "id": 1
}
```

delete
```json
{
  "token": "token",
  "user": 1,
  "id": 1
}
```


### Debts

example.domain/api/debts

index
```json
{
  "token": "token",
  "user": 1
}
```

create
```json
{
  "token": "token",
  "user": 1,
  "person" : "Javohir",
  "comment" : "He is won from gamble",
  "amount" : 500000,
  "type" : 1
}
```

view
```json
{
  "token": "token",
  "user": 1,
  "id" : 1
}
```

update
```json
{
  "token": "token",
  "user": 1,
  "person" : "Javohir",
  "comment" : "He is won from gamble",
  "amount" : 500000,
  "type" : 1,
  "id" : 2
}
```

delete 
```json
{
  "token": "token",
  "user": 1,
  "id" : 3
}
```

### Notes

example.domain/api/notes

index
```json
{
  "token": "token",
  "user": 1
}
```

create
```json
{
  "token": "token",
  "user": 1,
  "body" : "Note for test #1"
}
```

view
```json
{
  "token": "token",
  "user": 1,
  "id" : 1
}
```

update
```json
{
  "token": "token",
  "user": 1,
  "body" : "Note for test #1",
  "id" : 1
}
```

delete
```json
{
  "token": "token",
  "user": 1,
  "id" : 1
}
```

### Costs

example.domain/api/costs

index
```json
{
  "token": "token",
  "user": 1
}
```

create
```json
{
  "token": "token",
  "user": 1,
  "amount": 150,
  "pay_type" : 2,
  "comment" : "Some comment",
  "cost_type" : 2
}
```

view
```json
{
	"token": "N6WR5900QWhX6ZovVy5mp301zBTSv9Qp",
	"user": 1,
	"id" : 1
}
```

update
```json
{
  "token": "token",
  "user": 1,
  "amount": 150,
  "pay_type" : 2,
  "comment" : "Some comment",
  "cost_type" : 2,
  "id" : 1
}
```

delete
```json
{
	"token": "N6WR5900QWhX6ZovVy5mp301zBTSv9Qp",
	"user": 1,
	"id" : 1
}
```

### Birthdays

example.domain/api/birthdays

index
```json
{
  "user" : 1,
  "token" : "Me2RN-fCbNH0M44fl41OKCk5wX7-ffh2"
}
```

create
```json
{
  "user" : 1,
  "token" : "Me2RN-fCbNH0M44fl41OKCk5wX7-ffh2",
  "name": "Erkin Pardayev",
  "comment" : "Owner of app",
  "month" : 1,
  "day" : 7
}
```

update
```json
{
  "user" : 1,
  "token" : "Me2RN-fCbNH0M44fl41OKCk5wX7-ffh2",
  "name": "Erkin Pardayev",
  "comment" : "Owner of app",
  "month" : 1,
  "day" : 7,
  "id": 1
}
```

view
```json
{
  "user" : 1,
  "token" : "Me2RN-fCbNH0M44fl41OKCk5wX7-ffh2",
  "id": 1
}
```

delete
```json
{
  "user" : 1,
  "token" : "Me2RN-fCbNH0M44fl41OKCk5wX7-ffh2",
  "id": 1
}
```