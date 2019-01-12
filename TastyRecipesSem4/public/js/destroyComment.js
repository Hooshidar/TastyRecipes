$(document).ready(function() {
    // Måste använd body pga att vi appendar delete knappen efter page load.
    $('body').on('submit', '.delete-comment form', function(e) {
        e.preventDefault();

        var thisHTML = $(this);

        // $.post tillät mig inte hantera errors korrekt. Därav $.ajax.
        // Kan såklart ha missat någonting, men fick detta att funka och det är fortfarande ajax så!
        $.ajax({
            url: "/comment/destroy/" + recipeId,
            type: 'POST',
            data: $(this).serialize(),
            success: function() {
                // Vi lyckades, yey
                $(thisHTML).closest(".comment").remove();
            },
        });
    });
});