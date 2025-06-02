<!DOCTYPE HTML>

<head>
    <title>
        Form Output Page
    </title>
    <style>
        html {
            zoom: 110%;
        }

        body {
            background-color: rgba(0, 0, 0, 0);
            max-width: 600px;
        }

        table {
            border-radius: 15px 0 15px 0;
            padding: 2%;
            border-color: rgba(71, 86, 251, 0.346);
            box-shadow: black;
            border-width: 4px;
        }

        fieldset {
            padding: 5%;
            border-radius: 15px 0 15px 0;
            border-color: rgba(36, 129, 236, 0.24);
            border-width: 7px;
        }

        td {
            border: 1px;
            border-color: rgba(223, 44, 44, 0);
            border-radius: 5%;
            text-shadow: black;

        }

        a {
            color: black;
            text-decoration: none;
            font-size: large;
            font-family: 'Times New Roman', Times, serif;
        }

        .div-theme3 {
            border-radius: 50px 50px 50px 50px;
            box-shadow: black;
            border-width: 2px;
            border-color: rgba(240, 248, 255, 0.238);
            width: 30%;
            margin: auto;
            box-shadow: 0 0 10px 1px black;
        }
    </style>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $firstname = $_POST["txt1"];
        $lastname = $_POST["txt2"];
        $username = $_POST["txt3"];
        $dob = $_POST["birthday"];
        $gender = $_POST["rb1"];
        $id = $_POST["txt4"];
        $dept = $_POST["dept"];
    }

    ?>

    <table align="center">
        <tr>
            <td>
                <hr>
            </td>
        </tr>
        <tr>
            <td style=" font-size: xx-large;" align="center">Congratulations!<br>You Have Submitted your Information.<br>

            </td>
        </tr>
        <tr>
            <td>
                <hr>

            </td>
        </tr>
        <tr>
            <td style="font-size:large;">
                <br><br>
                <fieldset>
                    <legend style="text-shadow: 1px 1px black;">Saved Information</legend>
                    <div class="div-theme" border>
                        <?php

                        echo "<br>";
                        echo "Your First Name : $firstname";
                        echo "<br>";
                        echo "<br>";
                        echo "Your Last Name : $lastname";
                        echo "<br>";
                        echo "<br>";
                        echo "Your User Name : $username ";
                        echo "<br>";
                        echo "<br>";
                        echo "Your Date of Birth : $dob ";
                        echo "<br>";
                        echo "<br>";
                        echo "Select your Gender: $gender ";
                        echo "<br>";
                        echo "<br>";
                        echo "Your ID: $id";
                        echo "<br>";
                        echo "<br>";
                        echo "Your Department: $dept";
                        echo "<br>";
                        echo "<br>";
                        ?>
                    </div>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td style="font-size:medium;">
                <br><br>
                <hr>
                <p>Submit another form?</p>
                <br>
                <p class="div-theme3" align=center> <br><a href="Form Input Page.html" style="border-radius: 2%;">Go Back</a><br><br></p>
            </td>
        </tr>
    </table>
    <br><br><br><br>

</body>