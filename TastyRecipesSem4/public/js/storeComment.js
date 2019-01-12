$(document).ready(function() {
    $(".comment-create form").submit(function(e) {
        e.preventDefault();
        // $.post tillät mig inte hantera errors korrekt. Därav $.ajax.
        // Kan såklart ha missat någonting, men fick detta att funka och det är fortfarande ajax så!
        $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/comment/store/" + recipeId,
            type: 'POST',
            data: {
                text: $('#textArea').val(),
            },
            success: function(data) {
                // Vi lyckades, yey
                
                insertComment(data.success);
                $(".comment-create form textarea").val("");
            },
        });
    });
});