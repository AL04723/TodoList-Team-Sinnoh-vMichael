<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h1>To-do List</h1>

        <form action="{{route('store')}}" method="POST" autocomplete="off" >
            @csrf
                
                <div class="input-group">
                     <input required="" type="text" name="data"  class="input">
                     <label class="user-label">Add a new to-do</label>
                     <button type="Submit" class="btn-top"> Add New</button>
                </div>
         
        </form>
        @if (count($todolists))
        <ul class="wrapper">
            @foreach ($todolists as $todolist)
                <li>
                    <form action = "{{ route('destroy', $todolist->id) }}" method="POST">
                        <span class="list">{{ $todolist->data }}</span>
                        @csrf
                        @method('delete')
                        
                        <button type="submit" class="dlt-btn">
                        <i class="fa fa-trash"></i>
                        </button>
                    </form>
                   
                </li>
            @endforeach   
        </ul>
        @else
        <p class= "empty">No Tasks!</p>
        @endif

        @if (count($todolists))
            <p>You have <span style="color: #4EF4AF;">{{ count ($todolists)}} pending task</span> </p>
        @endif
        
        
    </div>

    
</body>
</html>