<?php include_once "bk/index_bk.php"?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Catalog System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/index.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans|Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display. -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="font-family: 'Poiret One', cursive; font-size: 17pt;">Catalogs</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="font-family: 'IBM Plex Sans', sans-serif; font-size: 10pt;">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="groceries.php">Go shopping!</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mk<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">En</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR#END -->
    <center>
        <div style="width: 80%">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search products...">
                <span class="input-group-btn">
        <button class="btn btn-default" type="button"><span class="
glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>

        <div class="well" style="width: 80%; margin-top: 25px;">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Store</th>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>KAM Market</td>
                <td>Bitolsko Mleko</td>
                <td>39</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Stokomak</td>
                <td>Bitolsko Mleko</td>
                <td>40</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Ramstore</td>
                <td>Bitolsko Mleko</td>
                <td>35</td>
              </tr>
            </tbody>
          </table>
        </div>
    </center>
</body>
</html>
