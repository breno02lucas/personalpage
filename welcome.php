<?php 
    require_once('header.php');
    require_once('footer.php');

    $dia = new dia;
?>

<div class="container" id="welcome">

    <div class="form-welcome">

        <i class="fas fa-terminal visitIcon"></i>
        <p class="title-name"><?php $dia->amORpm(); ?>, digite seu nome!</p>

        <form action="functions.php?name" method="post">            
            <input type="text" name="visitante" id="visitName">
            <input type="submit" value="Okay!" id="visitSubmit">
        </form>

    </div>

</div>