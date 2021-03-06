<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NFQ akademijos u&#382;duotis</title>
        <link rel="icon" type="image/png" href="../images/icon.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <!-- Navigacija -->
        <nav class="navbar navbar-default " id="top">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="data.php">DUOMENYS</a></li>
                <li><a href="#regform">ANKETA</a></li>
            </ul>
            </div>
        </div>
        </nav>
        <!-- logo ir paveiksliukas -->
        <header>
             <div class="container group" id="header">
                <h1><span>PROJEKTAS PRIE ALAUS</span></h1>
             </div>
        </header>

        <!-- Vidurine panele -->
        <div class="long-bg container-fluid">
            <div class="container" id="anketa">
                <div class="row">
                    <!-- Sukasi nuotraukos -->
                    <div class="col-sm-6 col-patraukimas">
                           <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                            
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active">
                                        <img src="images/rest.jpg" class="img-responsive img-circle margin" alt="Resting" width="350" height="350">
                                        <div class="carousel-caption">
                                        </div>     
                                      </div>
                                
                                      <div class="item">
                                        <img src="images/fruits.jpg" class="img-responsive img-circle margin" alt="Nutritions" width="350" height="350">
                                        <div class="carousel-caption">
                                        </div>    
                                      </div>
                                    
                                      <div class="item ">
                                        <img src="images/gym.jpg" class="img-responsive img-circle margin" alt="Trainning" width="350" height="350">
                                        <div class="carousel-caption">
                                        </div>      
                                      </div> 
                                    </div> 
                            </div>           
                    </div>
                    <!-- Anketa -->
                    <div class="col-sm-6 anketos-bg">
                        <h3 class="center">Norint gauti sporto programa užsiregistruokite!</h3>
                        <br />
                        <form id="regform" name="regform" data-toggle="validator" role="form">
                            <div class="form-group">
                                <label for="vardas" class="control-label" >Vardas</label>
                                <input type="text" class="form-control" maxlength="29" name="VARDAS" placeholder="Vardenis" required>
                            </div>
                            <div class="form-group">
                                <label class="radio-inline"><input type="radio" name="LYTIS" value="VYRAS" required>Vyras</label>
                                <label class="radio-inline"><input type="radio" name="LYTIS" value="MOTERIS"required>Moteris</label>
                            </div>
                            <div class="form-group">
                                    <label for="svoris">Svoris</label>
                                    <input type="text" class="form-control" maxlength="3" pattern="[0-9]{2,}" maxlength="3" name="SVORIS" placeholder="Jūsų svoris kilogramais" required>
                            </div>
                            <div class="form-group">
                                    <label for="ugis">Ūgis</label>
                                    <input type="text" class="form-control" maxlength="3" pattern="[0-9]{2,}"  name="UGIS" placeholder="Jūsų ūgis centimetrais" required>
                            </div>
                            <div class="form-group">
                                    <label for="telefonas">Telefonas</label>
                                    <input type="text" class="form-control" maxlength="8" pattern="[0-9]{8,}"  placeholder="6*******" name="TELEFONAS">
                            </div>
                            <div class="form-group">
                                    <label for="pastas">El. paštas</label>
                                    <input type="email" class="form-control" name="PASTAS" data-error="Bruh, that email address is invalid" required placeholder="vardenis@gmail.com" >
                            </div> 
                            <div class="form-group">
                                    <label for="comment">Ko tikitės iš trenerio</label>
                                    <textarea class="form-control" rows="5" maxlength="250" name="KOMENTARAS" required></textarea>
                            </div>
  
                                    <button type="submit" class="btn btn-block">siųsti 
                                    <span class="glyphicon glyphicon-ok"></span>
                                    </button>
                         </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer>
            <div class="container-fluid text-center footer" >
                <a href="#top" title="Į viršų">
                    <span class="glyphicon glyphicon-chevron-up totop"></span>
                </a>
                <p>Karolis Grunda NFQ project 2017</p>
            </div>
        </footer>

        <script>
               $(function() {
                    $("#regform").on('submit', function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "tomysql.php",
                        data: $(this).serialize(),
                        cache: false,
                        success: function(result){ 
                            $('#regform')[0].reset();
                            alert('SVEIKINAME UŽSIREGISTRAVUS!!! Laukite kol su jumis bus susisiekta.');
                            }
                        });
                    });
                    return false;
                 });
        </script>
    </body>
</html>