<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>CodeIgniter!</title>
  </head>
  <body>

  <div id="container">
    <h1> Welcome to CodeIgniter!</h1>

    <div id="body">
        <form action="<?php echo base_url().'/Homie/lempar'; ?>" method="post">
            <input type="text" name="data" placeholder="masukkan disini">
            <input type="submit" value="klik">
        </form>


    </div>


   </div>
   </body>
</html>