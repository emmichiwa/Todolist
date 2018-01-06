<?php 
$message = "";
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $createdBy = $_POST['name'];
    if(empty($title)) {
        $message = "Please fill in a Task!";
    }elseif(empty($createdBy)) {
        $message = "Please fill in Created by!";
    } else { 
    echo $message = "Thank you your task has now been added!"; 
    $statement = $pdo->prepare("INSERT INTO todo (title, createdBy) VALUES ('$title', '$createdBy')");
    $statement ->execute();
    }
} //TOTALY DONE -> FOR THE TASKS!!

$tasks = $pdo->prepare("SELECT * FROM todo WHERE completed = 0 ORDER BY title DESC");
$tasks ->execute();
$todolist = $tasks -> fetchALL(PDO::FETCH_ASSOC);

if(isset($_GET['delete_task'])) {
        $id = $_GET['delete_task'];
        $delete = $pdo->prepare("DELETE FROM todo WHERE id = :id");
        $delete->execute(array(":id" => $id ));
        header('location: index.php');
}
if(isset($_GET['mark_complete'])) {
    $id = $_GET['mark_complete'];
    $complete = $pdo-> prepare("UPDATE todo SET completed = 1 WHERE id = :id");
    $complete->execute(array(":id" => $id ));
    header('location: index.php');
}
$completed = $pdo->prepare("SELECT * FROM todo WHERE completed = 1 ORDER BY completed DESC");
$completed ->execute();
$completedlist = $completed -> fetchALL(PDO::FETCH_ASSOC);

// elseif(!empty($title)) {
//     $message = "Thank you $createdBy you have now filled in a task!";
// }