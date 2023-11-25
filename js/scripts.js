// Attend que la fenêtre et tous les éléments de la page soient chargés
window.onload = () => {
    // Sélectionne tous les éléments div à l'intérieur de l'élément avec l'id "filters"
    let filters = document.querySelectorAll("#filters div");

    // Pour chaque élément div sélectionné
    for (let filter of filters) {
        // Ajoute un écouteur d'événements pour le clic
        filter.addEventListener("click", function () {
            // Récupère l'identifiant (id) de l'élément div cliqué
            let tag = this.id;

            // Sélectionne tous les éléments img à l'intérieur de l'élément avec l'id "gallery"
            let images = document.querySelectorAll("#gallery img");

            // Pour chaque élément img sélectionné
            for (let image of images) {
                // Remplace la classe "active" par "inactive"
                image.classList.replace("active", "inactive");

                // Vérifie si l'attribut "data-tag" de l'image contient la valeur du tag cliqué, ou si le tag est "all"
                if (tag in image.dataset || tag === "all") {
                    // Si la condition est vraie, remplace la classe "inactive" par "active"
                    image.classList.replace("inactive", "active");
                }
            }
        });
    }
};
