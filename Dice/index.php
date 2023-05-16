<!DOCTYPE html>
<html>

<head>
    <title>Dice</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" type="image/x-icon" href="images/diceV2.png">
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <h1>DICE GAME</h1>

    <div id="game">
        <form action="game.php" name="forma" method="post">
            <div id="igralci">
                <label for="numPlayers">NUMBER OF PLAYERS:</label>
                <select name="numPlayers" id="numPlayers" onchange="generatePlayerFields()">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option> <!-- Add this line for 5 players -->
                </select>
            </div>
            <div id="playerFields">
                <!-- Player name fields will be dynamically generated here -->
            </div>
            <div id="izbira">
                NUMBER OF DICES
                <select name="stkock">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                <br />
                <input type="submit" class="gumb" onClick="return isEmpty()" name="igraj" value="PLAY" />
            </div>
        </form>
    </div>

    <img id="diceLeva" src="images/DiceV2.png" alt="diceLeva">

    <div class="diceDesno">
        <img id="diceDesno" src="images/DiceV2.png" alt="diceDesna">
    </div>

</body>

</html>