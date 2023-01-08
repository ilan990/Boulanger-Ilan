<?php $this->titre = "Boulanger'Ilan - Connexion"; ?>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Login Form -->
        <div id="formHeader">

        </div>
        <form action="index.php?action=getAuth" method="post">
            <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">

        </div>

    </div>
</div>

<style>
    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>