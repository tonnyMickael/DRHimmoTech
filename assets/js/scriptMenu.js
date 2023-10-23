$(document).ready(function() {
    const menu1 = $('#service');
    const menu2 = $('#post');

    // Événement de changement pour le premier menu
    menu1.on('change', function() {
        const selectedOption = menu1.val();

        // Réinitialiser le deuxième menu
        menu2.empty();

        // Envoyer une requête Ajax pour obtenir les options du deuxième menu
        $.ajax({
            type: 'POST',
            url: 'http://localhost/DRHimmoTech/Optionmenu/optionsPoste',
            data: { selectedOption: selectedOption },
            success: function(data) {
                // Remplir le deuxième menu avec les options renvoyées par le serveur
                menu2.html(data);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});
