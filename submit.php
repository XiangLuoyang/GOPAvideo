<?
    $title=$_POST["title"]; $author=$_POST["author"];
    $sex=$_POST["sex"]; $context=$_POST["context"];
    $email=$_POST["email"]; $date=date("Y-m-d H:i:s");
    require('conn.php');
    $sql="insert into lyb(title,author,context,sex,date) values(?,?,?,?,?)";
    $stmt=$db->prepare($sql);
    $stmt->bindParam(1,$title);
    $stmt->bindParam(2,$author); $stmt->bindParam(3,$context);
    $stmt->bindParam(4,$sex); $stmt->bindParam(5,$date);
    $stmt->execute();
    header("Location:message.php");
?>
