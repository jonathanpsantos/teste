  <?php 
    function exibir(){

      STATIC $ano;  //definindo a variavel estatica
      $ano++;
      echo "<br/>".$ano;


    }

    echo exibir ();
    echo exibir ();
    echo exibir ();


    echo "<br/> Olá Seja Bem Vindo".$_SERVER['REMOTE_ADDR']."<br/> ";

    echo "Você está utilizando o navegador: ".$_SERVER['HTTP_USER_AGENT'];

   ?>


   <?php 

      define("PI", 3.14);
      define("DISC", "MATEMATICA");


      echo "<br/> Valor de PI: ".PI;
      echo "<br/> Disciplina: ".DISC;

    ?>


    