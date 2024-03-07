const inputProjet = document.getElementById("textearea");

inputProjet.addEventListener("input", () => {
    const nombreDeMots = inputProjet.value.split(" ").length;

    if (nombreDeMots > 300) {
        alert("Le nombre de mots ne doit pas dépasser 300.");
        inputProjet.value = inputProjet.value.substring(0, 300);
    }
});
