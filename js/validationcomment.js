/**
 * Created by Shinigami on 17/03/19.
 */
$(function () {
    $("#commenterror").hide();


    var commenterror = false;

    $("#comment").focusout(function () {
        check_comment();
    });
    $("#commentform").submit(function () {
        check_comment();
        if(commenterror === true){
            return false;
        }
        else{
            return true;

        }
    });
    function check_comment() {
        var comment_lenght = $("#comment").val().length;
        if(comment_lenght === 0){
            $('#commenterror').html("Input a comment");
            $('#commenterror').show();
            $commenterror = true;
        }
        else{
            $('#commenterror').hide();
        }
    }
    });

