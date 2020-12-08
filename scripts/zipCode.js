/*
Ben Chadwick
Jessica Sestak
Husrav Homidov
Tiffany Welo

Team Dotcom
10/19/20
zipCode checks the input the user puts for Zip Codes and then checks to see
if it sends the user to the resources page or form
*/


document.getElementById("zipForm").onsubmit = validateZip;

function validateZip() {
    let zip = document.getElementById("zipCode").value;
    if (zip == "98030") {
        ("Correct Zip code");
        return true;
    } else if (zip == "98058") {
        ("Correct Zip code");
        return true;
    } else if (zip == "98031") {
        ("Correct Zip code");
        return true;
    } else if (zip == "98032") {
        ("Correct Zip code");
        return true;
    } else if (zip == "98042") {
        ("Correct Zip code");
        return true;
    } else {
        ("incorrect zip code");
        /*let choice = confirm("Sorry, you seem to be out of our reach. You will now be redirected to see additional resources...");
        if (choice == true) {
            window.location = "../resources.php";
        }*/
        $("#redirectModal").modal()

        return false;
    }

}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById("ticketModal");
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
