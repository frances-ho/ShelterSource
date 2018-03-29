<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shelter Source</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>
    <!-- Header Begin -->
    <div id="header">
        <div class="container">

            <!--Logo starts -->
                <div class="row justify-content-start">
                    <div class="col-12">
                        <div id="logo">
                                <img src="Images/logo.png" id="logo1">
                        </div>
                    </div>
                </div>
            <!--Logo ends -->

            <!-- Form starts -->
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div id="question" class="animated fadeIn">
                            <div class="form">
                                    <form action="/action_page.php" method="post">
                                        <p id="welcome2">Please pick a county nearest to you.</p>
                                        <select id="county" name="county">
                                                <option value="fulton">Fulton</option>
                                                <option value="dekalb">Dekalb</option>
                                        </select>
                                    </form>
                                </div>
            <!-- Form ends -->

                                <div id="button">
                                    <div id="button1"><a href="home.html">Previous</a></div>
                                    <div id="button2"><a href="q2.html">Next</a></div>
                                </div>
                        </div>
                    </div>
            </div>
    </div>
    <!-- Header End -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>