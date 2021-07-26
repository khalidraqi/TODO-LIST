<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <title>todo-list</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background: black!important;
            }
            table {
                background: white!important;
                margin-top: 80px;
            }
        </style>
    </head>
    <body class="antialiased">
     <div class="container">
         <div class="text-right">
             <a href="create" class="btn btn-primary">Creat New Liste</a>
         </div>
         <table class="table">
    <tr>
      <th >id</th>
      <th >Name</th>
      <th >Creat at</th>
      <th >Action</th>
    </tr>

    
        @foreach ($todo_arr as $td)
        <tr>
        <td>{{$td->id}}</td>
        <td>{{$td->name}}</td>
        <td>{{$td->created_at}}</td>
        <td><a href="delete/{{$td->id}}">Delete</a> | <a href="edit/{{$td->id}}">Edit</a></td>
      </tr>
        @endforeach
   
   
</table>
     </div>
        

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
