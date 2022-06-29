<?php include("../../config/config.php");?>
<?php include(DIRREQ."agendamento/lib/html/header.php");?>
<?php
    $objEvents=new \Classes\ClassEvents();
    $events=$objEvents->getEventsById($_GET['id']); 
    $date=new \DateTime($events['start'])
?>

<a id="delete" href="<?php echo DIRPAGE.'agendamento/controllers/ControllerDelete.php?id='.$_GET['id'];?>"><img src="<?php echo DIRPAGE.'agendamento/img/button-trash.png'?>" alt=""></a>
<form name="formEdit" id="formEdit" method="post" action="<?php echo DIRPAGE.'agendamento/controllers/ControllerEdit.php';?>">
    
    <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'];?>"><br>
    Data:<input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d");?>"><br>
    Hora:<input type="time" name="time" id="time" value="<?php echo $date->format("H:i");?>"><br>
    Cliente:<input type="text" name="title" id="title" value="<?php echo $events['title'];?>"> </input><br>
    Descrição:<input type="text" name="description" id="text" value="<?php echo $events['description'];?>"><br>
    <input type="submit" value="Confirmar Horário"></input>
</form>
<?php include(DIRREQ."agendamento/lib/html/footer.php");?>    




