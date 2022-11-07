<?php
if (!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"]))){
    header("Location: ./index.php?content=message&alert=hacker-alert");
} 
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-6">
            <form action="./index.php?content=activate_script" method="post">
                <div class="form-group">
                    <label for="InputPassword">Kies een nieuw wachtwoord:</label>
                    <input name="password" type="password" class="form-control" id="InputPassword" aria-describedby="passwordHelp" autofocus >
                    <small id="PasswordHelp" class="form-text text-muted">Kies een veilig wachtwoord...</small>
                </div>
                <div class="form-group">
                    <label for="InputPasswordCheck">Type het wachtwoord opnieuw:</label>
                    <input name="passwordCheck" type="password" class="form-control" id="InputPasswordCheck" aria-describedby="passwordHelpCheck" >
                    <small id="PasswordHelpCheck" class="form-text text-muted">Ter controle voert u normaals uw wachtwoord in...</small>
                </div>
            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>"> 
            <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>"> 
            <button type="submit" class="btn btn-primary">Activeer</button>
            </form>
        </div>
        <div class="col-12 col-sm-6">
        <img src="./img/egghead.jpg" alt="" class="w-75 mx-auto d-block">
        </div>
    </div>
</div>