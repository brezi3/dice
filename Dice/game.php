<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CSS/game.css" />
    <title>Dice</title>
    <script src="js/game.js"></script>
    <link rel="icon" type="image/x-icon" href="images/diceV2.png">

</head>
<body>
    
        <h1>GAME</h1>
    
        <input type="hidden" id="numPlayers" value="<?php echo $_SESSION['numPlayers']; ?>">
    <?php
    $_SESSION["players"] = array();
    $_SESSION["stKock"] = $_POST['stkock'];
    $numPlayers = intval($_POST['numPlayers']);

    for ($i = 1; $i <= $numPlayers; $i++) {
        $playerName = $_POST['name' . $i];
        $playerDices = array();

        for ($j = 1; $j <= $_SESSION["stKock"]; $j++) {
            $playerDices[] = rand(1, 6);
        }

        $player = array(
            'name' => $playerName,
            'dices' => $playerDices
        );

        $_SESSION["players"][] = $player;
    }
    ?>

    <div id="game">
        <div id="igralci">
            <?php
            foreach ($_SESSION["players"] as $index => $player) {
                echo '<div class="player">' . $player['name'] . '<br />';
                echo '<div id="anim' . ($index + 1) . '" style="height: 48px;"><img style="margin: 5px 0;" src="images/dice-anim.gif"></div>';
                echo '<div id="kocke' . ($index + 1) . '" style="display: none;">';
                foreach ($player['dices'] as $dice) {
                    echo '<img style="margin: 5px 0;" src="images/dice' . $dice . '.gif">';
                }
                echo '</div>';
                echo '</div>';
            }
            $_SESSION["numPlayers"] = $numPlayers; // Store the number of players in the session
            ?>
        </div>

        <div id="izbira">
            <?php
            echo "Number of dice " . $_SESSION["stKock"];
            echo '<form action="rezultati.php" name="forma" method="post">';
            echo '<input type="submit" class="gumb" name="rezultati" value="RESULTS"/>';
            echo '</form>';
            ?>
        </div>
    </div>
    <img id="diceLeva" src="images/DiceV2.png" alt="diceLeva">

    <div class="diceDesno">
        <img id="diceDesno" src="images/DiceV2.png" alt="diceDesna">
    </div>
    
</body>
</html>
