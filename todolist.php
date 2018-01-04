<?php 
$error = "";
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    if (empty($title)) {
        $error = "You must fill in a task"; 
    }else{
        $statement = $pdo->prepare("INSERT INTO todo (title) VALUES ('$title')");
        $statement ->execute();
        header('location: index.php');
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

 