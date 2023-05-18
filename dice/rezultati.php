<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="CSS/rezultati.css">
    <title>Dice</title>
    <script src="js/rezultati.js"></script>
    <link rel="icon" type="image/x-icon" href="images/diceV2.png">
</head>

<body>
    <h1>RESULTS</h1>

    <div id="game">
        <?php
        $winningPlayers = array();
        $maxScore = 0;

        foreach ($_SESSION["players"] as $player) { // za vsakega playerja
            $playerScore = array_sum($player['dices']);//sešteva tocke
            if ($playerScore > $maxScore) { //gleda kdo ima najvec tock in ga shrani v spremenljivko
                $maxScore = $playerScore;
                $winningPlayers = array($player['name']);
            } elseif ($playerScore == $maxScore) { //ce majo enak rezultat
                $winningPlayers[] = $player['name'];
            }
        }

        if (empty($winningPlayers)) {
            echo "No winners.";
        } else {
            echo "" . implode(", ", $winningPlayers);
        }
        ?>
        <span id="timer"></span>
    </div>
    <img id="diceLeva" src="images/DiceV2.png" alt="diceLeva">

    <div class="diceDesno">
        <img id="diceDesno" src="images/DiceV2.png" alt="diceDesna">
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="jquery.fireworks.js"></script>
    <script>
        $('body').fireworks({
            opacity: 0.1,
            width: '100%',
            height: '100%'
        });
        function redirTimer() {
            var countdown = 10; //sekunde countdawn-a
            var timerElement = document.getElementById("timer");

            var countdownInterval = setInterval(function () {
                timerElement.innerText = "Back to the first page in " + countdown + " seconds";
                countdown--;

                if (countdown < 0) {
                    clearInterval(countdownInterval);
                    self.location.href = 'index.php';
                }
            }, 1000);
        }
        redirTimer();
    </script>
</body>

</html>