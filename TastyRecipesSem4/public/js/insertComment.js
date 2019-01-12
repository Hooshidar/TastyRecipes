function insertComment(commentData)
{
    $(".showComments").append('\
        <div class="comment" data-comment-id="' + commentData["id"] + '">\
            <div class="row">\
                    <h4>' + commentData["username"] + '</h4>\
            </div>\
            <div class="row">\
                    <p>' + commentData["text"] + '</p>\
            </div>\
        </div>\
    ');

    if (logged_in && user_name == commentData["username"])
    {
        $(".comment .row").last().append('\
         <div class="delete-comment">\
             <form method="post" class="delete-form">\
                 ' + csrf_field + '\
                 <input type="hidden" name="comment_id" value="' + commentData["id"] + '">\
                 <button type="submit">Delete</button>\
             </form>\
         </div>\
        ');
    }
}