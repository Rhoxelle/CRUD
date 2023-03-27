<?php
$dbcred = require "db.config.php";

class Connection
{
    public static function make($dbcred)
    {
        try {
            return new PDO(
                $dbcred['connection'] . ';dbname=' . $dbcred['name'],
                $dbcred['username'],
                $dbcred['password'],
                $dbcred['options']
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

class DatabaseQuery
{

    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function viewTable($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function deleteUser($table, $id)
    {
        $sql = "DELETE  FROM `crud` WHERE id = $id";
        $statement = $this->pdo->prepare("delete from {$table} where id = {$id}");
        $statement->execute();
    }
}
class DatabaseQueryUser extends DatabaseQuery
{

    public function addToTable($first_name, $last_name, $email, $contact_number, $gender, $department, $position)
    {

        $sql = "INSERT INTO `crud`(`first_name`, `last_name`, `email`, `contact_number`, `gender`,`department`,`position`) VALUES (:first_name, :last_name, :email, :contact_number, :gender, :department, :position)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([':first_name'=>$first_name, ':last_name'=>$last_name, ':email'=>$email, ':contact_number'=>$contact_number, ':gender'=>$gender, ':department'=>$department, ':position'=>$position]);
        //$result = mysqli_query($conn, $sql); 
    }

    public function updateTable($first_name, $last_name, $email, $contact_number, $gender, $department, $position)
    {

        $sql = "UPDATE `crud` SET first_name=:first_name, last_name=:last_name, email=:email, contact_number=:contact_number, gender=:gender, marital_status=:marital_status, department=:department, position=:position WHERE id = {:id}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([':first_name'=>$first_name, ':last_name'=>$last_name, ':email'=>$email, ':contact_number'=>$contact_number, ':gender'=>$gender, ':department'=>$department, ':position'=>$position]);
        //$result = mysqli_query($conn, $sql); 
    }
}