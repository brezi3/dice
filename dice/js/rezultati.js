function launchFireworks() {
    fireworks(); // Invoke the fireworks animation function from the library
  }

function redirTimer() {
    var countdown = 10; // Set the countdown duration in seconds
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