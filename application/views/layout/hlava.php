
<html>
 <head>
    <title>Knihy k maturitě</title>
    
   <!-- <link href="../../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <link rel='stylesheet' type='text/css' href='assets/bootstrap/css/bootstrap.min.css'/>
  -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  

</head>

 <body style="padding-top: 100; background-color: whitesmoke; ">    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <h1 class="navbar-brand">Maturitní četba</h1>
        <div class="container">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <?php foreach($polozky as $p): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url("stranka/".$p->idmenu)?>"><?= $p->categorie ?><span class="sr-only">(current)</span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
        </div>
    </nav> 
