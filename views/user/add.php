<?php include("../../config/config.php");?>
<?php include(DIRREQ."agendamento/lib/html/header.php");?>
<?php
    $date=new \DateTime($_GET['date'], new \DateTimeZone('America/Sao_Paulo'));  
?>

<form name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE.'agendamento/controllers/ControllerAdd.php';?>">
    
    Data:<input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d");?>"><br>
    Hora:<input type="time" name="time" id="time" value="<?php echo $date->format("H:i");?>"><br>
    Cliente:<input type="text" name="title" id="text"> </input><br>
    Descrição:<input type="text" name="description" id="text"><br>
    <input type="submit" value="Marcar"></input>
</form>
<?php include(DIRREQ."agendamento/lib/html/footer.php");?>    




