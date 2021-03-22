<!doctype html>
<html>


<head>
    <title>Caffe&food and more</title>
    <link href="Style.css" rel="stylesheet" type="text/css"/>
    <script src="Restaurant.js " type = "text/javascript" language='javascript'></script>


    <div class="container" style="height: 60px;">
        <a href="Index.php">
            <img src="logo.jpg" alt="Index.php" style="padding-left: 20px;" width="55px" height="55px" />
        </a>

        <div id="list">
            <ul>
                <li class="lista"><a href="Index.php">Home</a> </li>
                <li class="lista"><a href="About_US.php">About Us</a> </li>
                <li class="lista"><a href="Contact.php">Contact</a></li>
            </ul>

        </div>

        <!--
            <div class="menu">
                <h3>Home</h3>
            </div>
            <div class="menu">
                <h3>About</h3>
            </div>
            <div class="menu">
                <h3>Contact</h3>
            </div>
            <div class="menu">
                <h3>Order Online</h3>
            </div>
           
            
            </div>
            -->

    </div>
</head>

<body>
    <div class="main">
        
        <?php
            if(isset($_POST['Login'])){
                 echo "<h1 style= 'color:green; background:white; width:300px; padding-left:40px;'>Login successeful </h1>";
            }else{
               echo "<h1 style= 'color:red; background:black; width:300px; padding-left:40px;'> Login not successful </h1";
            }
          
        ?>



    </div>


    <div id="foodContainer">
        <tr>
            <td>
                <h1>Zbritje deri 20%</h1>
            </td>
            <td>
                <h4>Per weekend</h4>
            </td>
        </tr>

    

        <div class="foods">

            <div class=food>
                <img src="pizza.jpg" alt="pizza" style="width: 140px;" height="100px">
                <h3>Pica me proshut</h3>
                zbritje 15%
            </div>
            <div class=food>
                <img src="SALLATMEMISH.jpg" alt="SALLATMEMISH" style="width: 140px;" height="100px">
                <h3>Sallat me mish pule</h3>
                zbritje 18%
            </div>
            <div class=food>
                <img src="beeftek.jpg" alt="beeftek" style="width: 140px;" height="100px">
                <h3>Beeftek</h3>
                zbritje 10%
            </div>
            <div class=food>
                <img src="trofta.jpg" alt="trofta" style="width: 140px;" height="100px">
                <h3>Peshk trofta</h3>
                zbritje 20%
            </div>
        </div>
    </div>
    <div id="PorositDiv" style="background-color: rgb(17, 45, 78); width: 100%; height: 170px">
        <h3>Caffe&Food and More</h3>
        <h3>Zgjedh vendin me te mire per te ushqyer me se miri</h3>
        <form>

            <button id="PorositTani"><a href="Foods.php">PorositOnline</a></button>

        </form>

    </div>

    <div class="photo">
        <img src="photo.jpg" alt="happy" style="width: 480px; padding-top: 20px;" height="300px" />


        <div id="get">

            <h1>Beni lidhje me restaurant<br>ushqehuni me lumturi</h1>
            <ul>
                <li>Porosit online</li>
                <li>Rezervo vendin online</li>
                <li>Njoftohuni me ofertat</li>

            </ul>
            <div>
                <form>

                    <input id="learnMore2" type="submit" value="learnMore" />
                </form>
            </div>

        </div>


    </div>
    <div id="chefs">
        <h1>Executive Team</h1>
        How we work


        <div class="CHEFS">


            <div class=LIKE>
                <img src="nusret.jpg" alt="Shqipdon" style="width: 150px;" height="100px">
                <h3>Nusret</h3>
                Master Chef / pergaditesi i mishit
            </div>



            <div class=LIKE>
                <img src="renatoMekolli.jpg" alt="Markc" style="width: 150px;" height="100px">
                <h3>Renato Mekolli</h3>
                Master Chef / kryekuzhinier
            </div>



            <div class=LIKE>
                <img src="alfioRotani.png" alt="Bill" style="width: 150px;" height="100px">
                <h3>Alfio Rotani</h3>
                Master Chef / Picamen
            </div>

            <div class=LIKE>
                <img src="kardeaBrown.jpeg" alt="Jeff" style="width: 150px;" height="100px">
                <h3>Jeff Bezos</h3>
                Master Chef / kuzhine franceze
            </div>

        </div>
    </div>

    <div id="kontenti">
        <header>
            <h2>Disa pamje te Restaurantit</h2>
            <img id="slideShow" />
        </header>


        <!--Nuk po ekzekutohet ne JS external-->
        <script type='text/javascript'>
            var i = 0;
            function ndrysho_Foto() {
                let fotot = document.getElementById('slideShow');
                fotot.src = 'inside' + (i++ % 4) + ".jpg";
            }
            function slider() {
                setInterval(ndrysho_Foto, 11600);
            }
            document.addEventListener('load', slider());

        </script>
        <script src="Restaurant.js " type = "text/javascript" language='javascript'></script>

    </div>


</body>

</html>