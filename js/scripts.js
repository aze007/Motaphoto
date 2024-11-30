document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById('contact-modal');
    var btn = document.getElementById('contact-btn');
    var span = document.getElementsByClassName('close')[0];

    // Ouvre la modal lorsque le bouton est cliqué
    if (btn) {
        btn.onclick = function () {
            modal.style.display = 'block';
        }
    }

    // Ferme la modal lorsque l'utilisateur clique sur <span> (x)
    if (span) {
        span.onclick = function () {
            modal.style.display = 'none';
        }
    }

    // Ferme la modal lorsque l'utilisateur clique en dehors de la modal
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
});

