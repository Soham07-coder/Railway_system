function toggleButton() {
    var button1 = document.getElementById("button1");
    var button2 = document.getElementById("button2");

    // Toggle visibility of buttons
    if (button2.style.display === "none") {
        button2.style.display = "block";
    } else {
        button2.style.display = "none";
    }
}