<?php include("config.php"); 

$certificate_id = $_GET["certificate_id"];
$query1 = pg_query("SELECT * FROM certificate WHERE certificate_id = $certificate_id");
$edit = pg_fetch_assoc($query1);
$mundur = $edit["adopter_id"];
$query2 = pg_query("SELECT * FROM adopter WHERE adopter_id = $mundur");
$sertif = pg_fetch_assoc($query2);
?>

<!DOCTYPE html>
<html>
    <head>
        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            .container {
                border: 20px solid tan;
                width: 750px;
                height: 563px;
                display: table-cell;
                vertical-align: middle;
            }
            .logo {
                color: tan;
            }

            .marquee {
                color: tan;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="logo">
                Adoption Center Present
            </div>

            <div class="marquee">
                Certificate of Adoption
            </div>

            <div class="assignment">
                This certificate is presented to
            </div>

            <div class="person">
            <?= $sertif["name"]; ?>
            </div>

            <div class="reason">
                For giving some animal a second chance<br/>
                to get a new family
            </div>
        </div>
    </body>
</html>
