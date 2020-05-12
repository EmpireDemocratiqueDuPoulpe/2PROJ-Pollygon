<!DOCTYPE html>

<html lang="fr">
    <head>
        <title>Pollygon - Vos sondages</title>
        <?php include_once(ROOT."/views/models/head.php"); ?>
    </head>
    <body>
        <!-- Navbar -->
        <?php include_once(ROOT."/views/models/navbar.php"); ?>

        <!-- Buttons -->
        <div id="surveys_btn">
            <a class="btn filled smaller" href="#" draggable="false">
                <i class="svgImport insideBtn"><?php echo file_get_contents(ROOT."/assets/images/surveys/add_survey.svg"); ?></i>
                Nouveau sondage
            </a>

            <a class="btn filled red smaller" href="#" draggable="false">
                <i class="svgImport insideBtn"><?php echo file_get_contents(ROOT."/assets/images/surveys/del_survey.svg"); ?></i>
                Supprimer sondage
            </a>
        </div>

        <div id="surveys_container">
            <h2>Mes sondages</h2>

            <ul id="surveys_list">
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>
                <li class="survey">
                    <a class="surveyLink" href="#">Nom du sondage</a>
                </li>

            </ul>
        </div>

        <!-- Footer -->
        <?php include_once(ROOT."/views/models/footer.php"); ?>
    </body>
</html>