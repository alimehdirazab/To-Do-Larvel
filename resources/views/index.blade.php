<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!--Bootstrap Files-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   

    <title>My To_Do App</title>
</head>
<body>
    <div class="row">
        <div class="col-md-4 m-auto">
            <br>
            <h3>My ToDo App</h3>
            
            <form action="/add">
                <div class="form-group">
                    <input type="text" class="form-control" name="item" placeholder="Add an Item" size="50">
                </div>
                <input type="submit" class="btn btn-primary"  name="add" value="Add Item">
            </form>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-4 m-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Todo Items</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach($items as $item)
                    @php($i++)

                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->item }}</td>
                        <td><a href="/edit/{{$item->sNO}}">Edit</a></td>
                        <td><a href="/delete/{{$item->sNo}}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <center>Created By Ali Mehdi Raza</center>
</body>
</html>
