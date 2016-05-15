<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>My tasks:</h1>
            <ul class="list-group">
               @foreach ($data as $item)
                <li class="list-group-item">{{$item->body}}</li>
               @endforeach
            </ul>
        </div>
    </body>
</html>
