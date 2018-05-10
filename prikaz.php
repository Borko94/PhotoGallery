<?php 
    include 'index2.php';

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>InfoArs Završni projekat - Borko Savić</title>


        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />

        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/upload.css">


<style type="text/css">
    .thumbnails {
        width: 30%;
        height: auto;
        float: left;
        margin: 10px;
        background: #fff;
        padding: 20px;
        box-sizing: border-box;
    }

    .thumbnails img {
        width: 100%;
        height: auto;
    }
</style>

</head>
<body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <?php include 'sidebar.html'; ?>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <h2>Završni projekat početnog PHP kursa - Borko Savić</h2>
                <p>Zadatak glasi: <br> <strong>Napisati php skriptu koja omogućava upload, delete i rename jpg i png slika ne većih od 5MB. Slike smjestati u folder „slike“ koji ste unaprijed kreirali na serveru. Uz korištenje HTML i CSS(koristiti već pripremljen template ili vi napravite vlastiti) unaprijediti izgled i preglednost slika i funkcionalnosti. Skripta može biti bazirana na primjeru koji smo uradili na poslednjem (12.) predavanju.</strong></p>

                <div class="line"></div>

<?php
    
    $folder = "uploads/";
    $slike = scandir($folder);

    foreach($slike as $slika){

        if($slika != '.' and $slika != "..")

            echo '<div class="thumbnails">
                    <a href="'.$folder.$slika.'" data-fancybox="images" data-caption="My caption"> <img  src="'.$folder.$slika.'"></a>
       
                        <a href="http://www.photoborko.com/prikaz.php?rename='.$slika.'"><i class="far fa-edit"></i></a> 
                        <a href="http://www.photoborko.com/prikaz.php?del=1&name='.$slika.'"><i class="far fa-trash-alt"></i></a><br>'.$slika.'
                   </div>';

    }
?>

      

    </div>
</div>
    








        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>


</body>
</html>
