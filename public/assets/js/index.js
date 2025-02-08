function loadAuthPopup(page) {
    fetch('/app/views/' + page)  // Adjusted path to point to 'views' directory
        .then(response => response.text())
        .then(html => {
            document.getElementById("authPopup").innerHTML = html;
            document.getElementById("authPopup").classList.remove("hidden");
        })
        .catch(error => console.error("Erreur de chargement :", error));
}


function hideAuthPopup() {
    document.getElementById("authPopup").classList.add("hidden");
}