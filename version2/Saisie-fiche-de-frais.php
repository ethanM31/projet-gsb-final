<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GSB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../version2/CSS/StyleConsultation-des-frais.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <html>

    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <div class="title"><label>sasie des frais de visite</label></div>
        <div class="landing-page">
            <div class="form-appointment">
                <div class="wpcf7" id="wpcf7-f560-p590-o1"></div>
                <form method="get" action="../version2/JS/script.js">
                    <fieldset>
                        <fieldset>
                            <legend>Période</legend>
                            Mois/Année <input type="text" name="periode" size="10">
                        </fieldset>

                        <legend></legend>
                        <div id="suivie-de-frais" class="NiceInput">
                            <fieldset>
                                <legend>frais au Forfait</legend>
                                <table>
                                    <thead>
                                        <tr>
                                            <td></td>
                                            <td>Repas midi</td>
                                            <td>nuitée</td>
                                            <td>Etape</td>
                                            <td>Km</td>
                                            <td>Situation</td>
                                            <td>Date opération</td>
                                            <td>Remboursement</td>
                                        </tr>
                                    </thead>
                                    <tbody id="body1">
                                        <tr id="saisie">
                                            <td>fiche</td>
                                            <td><input type="text" name="repas"></td>
                                            <td><input type="text" name="nuitée"></td>
                                            <td><input type="text" name="etape"></td>
                                            <td><input type="text" name="km"></td>
                                            <td><input type="text" name="Situation"></td>
                                            <td><input type="date" name="Date opération"></td>
                                            <td><input type="text" name="Remboursement"></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </fieldset>
                        </div>
                        <div id="hors-Forfait" class="hidden">
                            <fieldset>
                                <legend>Hors Forfait</legend>
                                <table>
                                    <thead>
                                        <tr>
                                            <td></td>
                                            <td>Date</td>
                                            <td>Libelle</td>
                                            <td>Montant</td>
                                            <td>Situation</td>
                                            <td>Date opération</td>
                                        </tr>
                                    </thead>
                                    <tbody id="body2">
                                        <tr id="Hors">
                                            <td>fiche</td>
                                            <td><input type="text" name="Date-e1"></td>
                                            <td><input type="text" name="Libelle-e1"></td>
                                            <td><input type="text" name="Montant-e1"></td>
                                            <td><input type="text" name="Situation-e1"></td>
                                            <td><input type="date" name="Date opération-e1"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>

                            <fieldset>
                                Nombre de justificatif <input type="text" name="NbJustificatif" size="5">
                            </fieldset>
                        </div>
                        <div>
                            <p>
                                <input type="submit" id="submit" onclick="verifMail" value="Envoyer">
                                <input type="RESET" value="Annuler">
                            </p>
                        </div>
                    </fieldset>
                </form>
                <script src="../version2/JS/script.js"></script>
            </div>
        </div>
        </div>
    </body>

    </html>
    <!-- partial -->
    <script src="../version2/JS/script.js"></script>

</body>

</html>