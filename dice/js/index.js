function generatePlayerFields() {
    var numPlayers = document.getElementById("numPlayers").value;
    var playerFieldsContainer = document.getElementById("playerFields");
    playerFieldsContainer.innerHTML = ""; // Clear previous fields

    for (var i = 1; i <= numPlayers; i++) {
        var playerNameField = document.createElement("div");
        playerNameField.className = "player";
        playerNameField.innerHTML = "PLAYER " + i + " Name: <input type='text' maxlength='15' name='name" + i + "' autofocus>";
        playerFieldsContainer.appendChild(playerNameField);
    }
}

// Check if player name fields are empty
function isEmpty() {
    var numPlayers = document.getElementById("numPlayers").value;

    if (numPlayers == 0) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please select at least one player!',
        });
        return false;
    }

    for (var i = 1; i <= numPlayers; i++) {
        if (document.forms['forma']["name" + i].value == "") {
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Enter all names!',
            });
            return false;
        }
    }
    return true;
}