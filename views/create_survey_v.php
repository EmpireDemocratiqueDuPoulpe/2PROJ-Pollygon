<!DOCTYPE html>

<html lang="fr">
    <head>
        <title>Pollygon - <?php echo $_SESSION["survey"]->getTitle(); ?></title>
        <?php include_once(ROOT."/views/models/head.php"); ?>
    </head>
    <body>
        <!-- Navbar -->
        <?php include_once(ROOT."/views/models/navbar.php"); ?>

        <!-- Survey viewer -->
        <div id="survey_viewer">
            <div id="sVQuestionList">
                <!-- Question list -->
                <ul>
                    <?= $questions; ?>
                    <li class="newQuestion">
                        <a href="<?= $newQuestionUrl ?>">
                            <i class="svgImport insideBtn"><?php echo file_get_contents(ROOT."/assets/images/icons/add_survey.svg"); ?></i>
                            Ajouter une question
                        </a>
                    </li>
                </ul>

                <!-- Finish edit -->
                <a class="btn filled" href="./php/survey/add.php">CR&Eacute;ER LE SONDAGE</a>
            </div>

            <!-- Question view -->
            <div id="sVQuestionView">
                <!-- Error/success box -->
                <?php if(isset($messages) && !empty($messages)) echo $messages; ?>

                <!-- Survey title -->
                <div id="sVQTitle">
                    <form action="./php/survey/set_survey_title.php" method="POST">
                        <h1>
                            <textarea name="survey_name" placeholder="Nouveau sondage"><?= $_SESSION["survey"]->getTitle(); ?></textarea>
                        </h1>

                        <input class="btn filled smaller-2" type="submit" value="CHANGER"/>
                    </form>
                </div>

                <!-- Question -->
                <?= $questionView; ?>
            </div>
        </div>

        <!-- Footer -->
        <?php include_once(ROOT."/views/models/footer.php"); ?>
    </body>
</html>