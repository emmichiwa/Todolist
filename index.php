<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Todo List</title>

    <link href="https://fonts.googleapis.com/css?family=Courgette|Just+Another+Hand|Rancho|Sriracha" rel="stylesheet">
    
    <link rel="stylesheet" href="css/main.css">
    

</head>
<body>
    <div class="list">
        <h1 class="header">TODO LIST</h1>

        <ul>
            <li></li>
        </ul>

        <form class="add-item" action="add.php" method="GET">
            <input type="text"  name="name" placeholder="Add you task here" class="input" autocomplete="off" required>
            <input type="text"  name="name" placeholder="Created By" class="input" autocomplete="off" required>
            <input type="submit" value="Add task" class="submit">
        </form>

    </div>    
</body>
</html>