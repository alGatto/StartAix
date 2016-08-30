<?php $title="Inscription";?>
<?php include "includes/constants.php"; ?>
<?php include "partials/_header.php"; ?>

<body>
<?php include "partials/_navbar.php"; ?>

<div id="main-content">

    <div class="container">
        <h1 class="text-center">Devenez membre</h1>

        <form method="post" class="well col-md-6 col-md-offset-3">
            <!-- Champ nom-->
            <div class="form-group">
                <label class="control-label" for="name">Votre nom: </label>
                <input type="text" class="form-control" id="name" name="name" required="required" />
            </div>
            <!-- Champ prenom-->
            <div class="form-group">
                <label class="control-label" for="firstname">Votre prénom: </label>
                <input type="text" class="form-control" id="firstname" name="firstname" required="required" />
            </div>
            <!-- Champ email-->
            <div class="form-group">
                <label class="control-label" for="email">Votre adresse email: </label>
                <input type="text" class="form-control" id="email" name="email " required="required" />
            </div>
            <!-- Champ mot de passe-->
            <div class="form-group">
                <label class="control-label" for="password">Votre mot de passe: </label>
                <input type="password" class="form-control" id="password" name="password" required="required" />
            </div>
            <!-- Champ confirmation mot de passe-->
            <div class="form-group">
                <label class="control-label" for="password_confirm">Confirmer votre mot de passe: </label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm" required="required" />
            </div>
            <input type="submit" class="btn btn-primary" value="S'inscrire" name="register">
        </form>

    </div> <!-- /container -->
    <?php include "partials/_footer.php";?>
</div>

<?php include "partials/_scripts.php";?>
</body>
</html>