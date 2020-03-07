<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/style.css">
    

    <title>DAY BY DAY</title>

</head>
<body>

    <?php 
    
        date_default_timezone_set('America/Sao_Paulo');

        $yesterday = date('l/d/M',strtotime('-1 day'));
        $today = date('l/d/M');
        $tomorrow = date('l/d/M', strtotime('+1 day'));

    ?>   

    <nav>

        <ul>

            <h3> </h3>

            <h1>|</h1>
            <h1>Day by Day</h1>
            <h1>|</h1>

            <h3> </h3>

        </ul>


    </nav>

    <div id="particles-js">

        <div class="days">

            <div id="yesterday" class="circle" >

                <a href="#" id="yesterday" >Ontem</a>

            </div>


            <div id="today" class="circle">

                <a href="#">Hoje</a>

            </div>

            
            <div id="tomorrow" class="circle">

                <a href="#">Amanha</a>

            </div>

        </div>

        <div class="days">

            <p id="date" style="margin: 55px 10px; text-align: center; font-size: 10pt;" > <?php echo $yesterday; ?> </p>
            <p id="date" style="margin: 55px 10px; text-align: center;" > <?php echo $today; ?> </p>
            <p id="date" style="margin: 55px 10px; text-align: center; font-size: 10pt;" > <?php echo $tomorrow; ?> </p>

        </div>

        <div id="principal">

            <div class="tarefas" id="div1">
                
                <textarea cols="25" rows="10" class="textarea"></textarea>
                <br>

                <div class="buttons">

                    <input type="button" value="Concluir" class="buttons">
                    <p style="color: black;">|</p>
                    <input type="button" value="Enviar" class="buttons">

                </div>

            </div>

            <div class="tarefas" id="div2" style="display: none;" >
                
                <textarea cols="25" rows="10" class="textarea"></textarea>
                <br>

                <div class="buttons">

                    <input type="button" value="Concluir" class="buttons">
                    <p style="color: black;">|</p>
                    <input type="button" value="Enviar" class="buttons">

                </div>

            </div>

            <div class="tarefas" id="div3" style="display: none;" >
                
                <textarea cols="25" rows="10" class="textarea"></textarea>
                <br>

                <div class="buttons">

                    <input type="button" value="Concluir" class="buttons">
                    <p style="color: black;">|</p>
                    <input type="button" value="Enviar" class="buttons">

                </div>

            </div>

            <div class="tarefas" id="div4" style="display: none;" >
                
                <textarea cols="25" rows="10" class="textarea"></textarea>
                <br>

                <div class="buttons">

                    <input type="button" value="Concluir" class="buttons">
                    <p style="color: black;">|</p>
                    <input type="button" value="Enviar" class="buttons">

                </div>

            </div>

            <div class="tarefas" id="div5" style="display: none;">
                
                <textarea cols="25" rows="10" class="textarea"></textarea>
                <br>

                <div class="buttons">

                    <input type="button" value="Concluir" class="buttons">
                    <p style="color: black;">|</p>
                    <input type="button" value="Enviar" class="buttons">

                </div>

            </div>

            <div class="tarefas" id="div6" style="display: none;">
                
                <textarea cols="25" rows="10" class="textarea"></textarea>
                <br>

                <div class="buttons">

                    <input type="button" value="Concluir" class="buttons">
                    <p style="color: black;">|</p>
                    <input type="button" value="Enviar" class="buttons">

                </div>

            </div>

        </div>

        <div class="flex" id="bot">

            <input type="button" value="+" id="add" style="margin: 0 auto; ">

        </div>

    </div>

    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="js/jasc.js" > </script>

</body>
</html>