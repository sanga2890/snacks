<!-- Gioco del pinpong
Vince chi arriva prima ad un punteggio di almento 11 punti ma con un vantaggio di almeno 2 punti rispetto all'avversario;
 -->

<?php

$player1 = 0;
$player2 = 0;
$round = 0;

// continuo a cliclare fino a che la differenza tra player1 e player2 è inferiore a 2 in assoluto o fino a che entrambi i giocatori avranno un punteggio inferiore a 11;
while (abs($player1 - $player2) < 2 || ($player1 < 11 && $player2 < 11)) {
    // incremento il round di 1 ad ogni ciclo;
  $round++;
    // stampo il numero del round;
  echo "<h2>Round $round</h2>\n";
    // genero un numero random tra 0 e 1; Se il numero generato è uguale a 1, quindi a vero, aggiungo 1 punto al player1 altrimenti aggiungo il punto al player2;
  if (rand(0,1)) {
    $player1++;
  } else {
    $player2++;
  }

    // stampo il punteggio attual per ogni giocatore;
  echo "Player 1 = $player1<br>\n";
  echo "Player 2 = $player2\n";

};
    // stampo il vincitore in base a chi ha ottenuto il punteggio più alto e stampo anche il numero del round in cui ha vinto la partita e il punteggio totale ottenuto;
if ($player1 > $player2) {
  echo "<h1> Player 1 wins on Round $round with $player1 points</h1>";
} else {
  echo "<h1> Player 2 wins on Round $round with $player2 points</h1>";
};

?>
