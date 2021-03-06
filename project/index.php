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
    <script src="https://use.fontawesome.com/67b80e2b65.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Courgette|Just+Another+Hand|Rancho|Sriracha" rel="stylesheet">
    <link rel="stylesheet" href="main.css">

    <title>Todo List</title>

</head>
<body>
    <main>
        <div class="todowrapper">

            <div class="todolist">
                <h2>TODO LIST</h2>

                <form class="add-item" action="index.php" method="POST">
                <p class="message"><?php echo $message; ?></p>
                    <input type="text"  name="title" placeholder="Add your task here" class="input" autocomplete="off" >
                    <input type="text"  name="name" placeholder="Created By" class="input" autocomplete="off" >
                    <button type="submit" name="submit" class="add_button">Add task</button>
                </form>

                <div class="tableTodo">
                    <table>
                        <thead>
                            <tr>
                                <th>All tasks listed</th>
                                <th>Created By</th>
                                <th class="thAction">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($todolist as $todo) {
                            ?>
                            <tr>
                            <td class="task"><p><?= $todo['title']; ?></p></td>
                            <td class="task"><p><?= $todo['createdBy']; ?></p></td>
                                <td class="action">
                                    <a href="index.php?mark_complete=<?php echo $todo['id']; ?>"><i class="fa fa-check" aria-hidden="true"></i></a>
                                </td>
                                <td class="action">
                                    <a href="index.php?delete_task=<?php echo $todo['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div> <!--tabletodo-->
            </div> <!--todolist-->

            <div class="doneTasks">
                <h2>DONE TASKS</h2>

                <div class="tableDone">
                    <table>
                        <thead>
                            <tr>
                                <th>Completed Tasks</th>
                                <th>Created By</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($completedlist as $complete) {
                            ?>
                        <tr>
                            <td class="task"><p><?= $complete['title']; ?></p></td>
                            <td class="task"><p><?= $complete['createdBy']; ?></p></td>
                            <td class="delete">
                                <a href="index.php?delete_task=<?php echo $complete['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div> <!--tableComplete-->
            </div> <!--doneTasks-->
        </div> <!--todowrapper-->

        <footer>

            <div class="socialicons">
            <h2><a href="https://github.com/emmichiwa"><i class="fa fa-github" aria-hidden="true"></i> EMMICHIWA</a></h2>
            </div>

            <div class="clear"></div>

        </footer>
    </main>
</body>
</html>