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
                    <label class="control-label" for="name">Votre nom*: </label>
                    <input type="text" class="form-control" id="name" name="name" required="required" placeholder="Votre nom"/>
                </div>
                <!-- Champ prenom-->
                <div class="form-group">
                    <label class="control-label" for="firstname">Votre prénom*: </label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required="required" placeholder="Votre prénom" />
                </div>
                <div class="form-group">
                    <label>Sélectionnez votre statut*:</label>
                    <select name="how" class="selectfield form-control" id="how">
                        <option value="">...</option>
                        <option value="Dir">Directeur de startup</option>
                        <option value="Student">Etudiant</option>
                        <option value="Corp">Entreprise</option>
                    </select>
                </div>
                <!-- Champ formation-->
                <div class="form-group">
                    <label class="hidden control-label" id="label-formation" for="formation">Votre formation*: </label>
                    <!--<input type='text' id="formation" class="hidden form-control" name="formation" required="required" placeholder="ex: Ingésup" />-->
                    <select name="formation" class="hidden selectfield form-control" id="formation" >
                        <option value="">Ma formation...</option>
                        <option value="ingesup">Ingésup</option>
                        <option value="limart">Lim'art</option>
                        <option value="essca">ESSCA</option>
                    </select>
                </div>
                <!-- Champ niveau-->
                <div class="form-group">
                    <label class="hidden control-label" id="label-level" for="level">Votre niveau*: </label>
                    <select name="level" class="hidden selectfield form-control" id="level" >
                        <option value="">Ma classe...</option>
                        <option value="b1">B1 - Bachelor 1</option>
                        <option value="b2">B2 - Bachelor 2</option>
                        <option value="b3">B3 - Bachelor 3</option>
                        <option value="m1">M1 - Master 1</option>
                        <option value="m2">M2 - Master 2</option>
                    </select>
                </div>
                <!-- Champ email-->
                <div class="form-group">
                    <label class="control-label" for="email">Votre adresse email*: </label>
                    <input type="text" class="form-control" id="email" name="email " required="required" placeholder="exemple@email.com" />
                </div>
                <!-- Champ mot de passe-->
                <div class="form-group">
                    <label class="control-label" for="password">Votre mot de passe*: </label>
                    <input type="password" class="form-control" id="password" name="password" required="required" placeholder="Minimum 8 caractères" />
                </div>
                <!-- Champ confirmation mot de passe-->
                <div class="form-group">
                    <label class="control-label" for="password_confirm">Confirmer votre mot de passe*: </label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" required="required" />
                </div>
                <p>* Champs requis.</p>
                <input type="submit" class="btn btn-primary" value="S'inscrire" name="register">
            </form>

        </div> <!-- /container -->
        <?php include "partials/_footer.php";?>
    </div>

    <?php include "partials/_scripts.php";?>
    </body>
</html>