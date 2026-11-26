<?php
$minimo = (int) readline("informe o valor minimo");
$maximo = (int) readline("informe o valor maximo");
$num_aleatorio = mt_rand($minimo, $maximo);
$tentativas = 0;

do{
 $chute = (int) readline("digite um numero ");
 $tentativas++;
 
 if($chute === $num_aleatorio){
    print("voce venceu. Voce tentou $tentativas vezes");
  } else if ($chute < $num_aleatorio) {
    print("valor muito baixo ");
  }  else {
    print("valor muito alto ");
 }
 
}
while ($chute != $num_aleatorio);
