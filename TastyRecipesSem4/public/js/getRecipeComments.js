$(document).ready(function() {
    $.getJSON("/comments", "recipe=" + recipeId,
        function(returnedData) {
            $(returnedData).each(function(index) {
                insertComment(returnedData[index]);
            });
    });
});