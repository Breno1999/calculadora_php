<!doctype html>
<html lang="en">
  <head>
    <title>Calculadora</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bo=p CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
      body{
        background-image: linear-gradient(to bottom right, #ccddff, yellow);
      }

      .centro{
        background-color: #e6f2ff;
        border: solid 1px;
        border-radius: 25px;
        margin-top: 5vh;
        margin-left: auto;
        margin-right: auto;
        height: 350px;
        width: 400px;
        text-align: center;
      }

      .corpo{
        margin-top: 50px;
        margin-left: 20px;
        margin-right: 20px;
      }

      .resultado{
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        height: 102px;
      }

      input{
        color: #fff;
        font-size: 28px;
        width: 100%;
        padding: 20px 5px 5px;
        background-color: #4f4f4f;
        border: none;
        border-radius: 4px;
      }

      label{
        margin-bottom: 8px;
      }

      .titulo{
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
      }
    </style>

    
  </head>
  <body>

      
      <div class="titulo">
        <h1>Calculadora Básica</h1>
      </div>
        <div class="centro">
          <div class="corpo">
            <form method="post">
              <input type="text" name="n1" placeholder="primeiro valor" class="form-control" required>
              <br>
              <input type="text" name="n2" placeholder="segundo valor" class="form-control" required>
              <br>
              <div class="form-group">
                <label>Operação</label>
                <select class="form-control col-4 ml-auto mr-auto" name="opcao" >
                  <option value="somar">Somar</option>
                  <option value="subtrair">Subtrair</option>
                  <option value="multiplicar">Multiplicar</option>
                  <option value="dividir">Dividir</option>
                </select>
                <br>
              </div>
              <input type="submit" name="calcular" value="Calcular" class="btn btn-primary">
            </form>
          </div>
        </div>


        <div class="resultado">
          
            <?php
              include_once('funcao.php');


              $num1 = @$_POST['n1'];
              $num2 = @$_POST['n2'];
              $option = @$_POST['opcao']; 
              $resultado;

              switch ($option) {
                
                  case 'somar':

                    $f = new Operacoes();
                    $f = $f->somar($num1, $num2);
                    $resultado= $f;
                    echo "<h2>Resultado: ".$resultado."</h2>";
                  break;
                
                  case 'subtrair':
                    $f = new Operacoes();
                    $f = $f->subtracao($num1, $num2);
                    $resultado= $f;
                    echo "<h2>Resultado: ".$resultado."</h2>";
                  break;

                  case 'multiplicar':
                    $f = new Operacoes();
                    $f = $f->multiplicacao($num1, $num2);
                    $resultado= $f;
                    echo "<h2>Resultado: ".$resultado."</h2>";
                  break;

                  case 'dividir':
                    $f = new Operacoes();
                    $f = $f->divisao($num1, $num2);
                    $resultado= $f;
                    echo "<h2>Resultado: ".$resultado."</h2>";
                  break;

              }

            ?>
          
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bo=p JS -->
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    </body>
</html>