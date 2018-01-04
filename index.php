<?php
require 'database.php';
require 'todolist.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Todo List</title>

    <link href="https://fonts.googleapis.com/css?family=Courgette|Just+Another+Hand|Rancho|Sriracha" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>
    <div class="todolist">
        <h1 class="header">TODO LIST</h1>

        <ul>
            <li></li>
        </ul>

        <form class="add-item" action="index.php" method="POST">
            <input type="text"  name="task" placeholder="Add you task here" class="input" autocomplete="off" required>
            <input type="text"  name="name" placeholder="Created By" class="input" autocomplete="off" required>
            <button type="submit" name="submit" class="add_button">Add task</button>
        </form>

        <div class="tableTodo">
            <table>
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Created By</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($todolist as $todo) {
                    ?>
                    <tr>
                        <td></td>
                        <td class="task"><p><?= $todo['title']; ?></p></td>
                        <td>
                            <a href="index.php?mark_complete=<?php echo $todo['id']; ?>">Mark as done</a>
                        </td>
                        <td class="delete">
                            <a href="index.php?delete_task=<?php echo $todo['id']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div> <!--tabletodo-->

        <div class="completedTodos">
            <h2>Completed List</h2>
        </div>

        <div class="tableComplete">
            <table>
                <tbody>
                <?php foreach ($completedlist as $complete) {
                    ?>
                <tr>
                    <td></td>
                    <td class="task"><p><?= $complete['title']; ?></p></td>
                    <td class="delete">
                        <a href="index.php?delete_task=<?php echo $complete['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div> <!--tableComplete-->
    </div> <!--todolist-->
</body>
</html>