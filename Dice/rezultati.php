<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="CSS/rezultati.css">
    <title>Dice</title>
    <link rel="icon" type="image/x-icon" href="images/diceV2.png">
</head>

<body>
    <h1>RESULTS</h1>

    <div id="game">
        <?php
        $winningPlayers = array();
        $maxScore = 0;

        foreach ($_SESSION["players"] as $player) {
            $playerScore = array_sum($player['dices']);
            if ($playerScore > $maxScore) {
                $maxScore = $playerScore;
                $winningPlayers = array($player['name']);
            } elseif ($playerScore == $maxScore) {
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

    <!-- Script for redirecting back to index.php after 5 seconds -->
    

    <script>
        function redirTimer() {
            var countdown = 5; // Set the countdown duration in seconds
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