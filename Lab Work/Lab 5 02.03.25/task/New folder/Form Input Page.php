<!DOCTYPE HTML>

<head>
    <title>
        Form Input Page
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: rgba(217, 236, 225, 0.822);
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
            /* padding: 10%; */
            border: 1px;
            border-color: rgb(223, 44, 44);
            border-radius: 5%;
            text-shadow: black;

        }

        .div-theme {
            box-shadow: black;
        }

        input {
            border-radius: 5px 5px 5px 5px;
        }
    </style>
</head>

<body>
    <!-- <p>This is the form input page</p> -->

    <h1 align="center"><u>Registration Form</u></h1>

    <br>
    <div class="div-theme">
        <table align="center" border width="85%">
            <tr>
                <td>
                    <!-- <form action="fake-output.html"> -->
                    <form action="form-handler.php" method="POST">
                        <fieldset>
                            <legend style="text-shadow: 1px 1px black;">Required Informations</legend>
                            <p align="center"><i>(Personal Details)</i></p>


                            <strong> <label> First Name : </label>&nbsp;&nbsp;<input type="text" name="txt1"
                                    placeholder=" your first name"><br><br>

                                <label> Last Name : </label>&nbsp;&nbsp;<input type="text" name="txt1"
                                    placeholder=" your last name"><br><br>

                                <label> User Name : </label>&nbsp;&nbsp;<input type="text" name="txt1"
                                    placeholder=" your username"><br><br>
                            </strong>
                            <hr>
                            <p align="center"><i>(Security)</i></p>

                            <strong>
                                <label> Password : </label>&nbsp;&nbsp;<input type="password" name="txt1"
                                    placeholder=" set a strong password"><br><br>

                                <label> Confirm <br>Password : </label>&nbsp;&nbsp;<input type="password" name="txt1"
                                    placeholder=" re-enter the password">

                            </strong>

                            <br><br>
                            <hr>
                            <p align="center"><i>(Other Details)</i></p>

                            <strong>
                                <label> Your Date of Birth :</label> &nbsp; <input type="date" name="birthday">

                                <br><br>
                                <label> <u>Select your Gender:</u></label><br><br>
                                <input type="radio" name="rb1" value="Male">Male
                                <input type="radio" name="rb1" value="Female">Female

                                <br><br>
                                <label> <u>Select your Department:</u></label><br><br>
                                <input type="radio" name="dept" value="CSE">CSE
                                <input type="radio" name="dept" value="LAW">LAW
                                <input type="radio" name="dept" value="IT">IT
                                <input type="radio" name="dept" value="CE">CE
                                <input type="radio" name="dept" value="ECE">ECE

                                <br><br>

                                <label> Attach a photo : </label><input type="file">


                                <br><br>
                                <br><br>
                                <center>

                                    <!-- <input type="submit" value="submit" name="btn1"> &nbsp; -->
                                    <input type="submit" value="submit"> &nbsp;

                                    <input type="reset" value="Reset" name="btn2"> &nbsp;


                                    <input type="button" value="Cancel" name="btn2"
                                        onclick="javascript:window.location='index.html';">
                                </center>
                            </strong>
                        </fieldset>
                    </form>
                </td>
            </tr>
        </table>
    </div>

</body>