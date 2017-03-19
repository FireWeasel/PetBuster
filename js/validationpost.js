/**
 * Created by Shinigami on 17/03/19.
 */
$(function () {
    $("#Errorpostname").hide();
    $("#errordescription").hide();

    var error_postname = false;
    var error_description = false;
    $("#postname").focusout(function () {
        check_postname();

    });

    $("#description").focusout(function () {
        check_description();
    });
    $("#form1").submit(function () {
        check_submit();
        if(error_postname === true || error_description === true){
            return false;
        }
        else{
            return true;
        }
    })

function check_postname() {

    var postname_lenght = $("#postname").val().length;
    if (postname_lenght === 0) {
        $("#Errorpostname").html("You should include name of the post");
        $("#Errorpostname").show();
        $error_postname = true;
    }
    else {
        $("#errorpostname").hide();
    }
};
function check_description() {

    var description_lenght =$("#description").val().length;
    if(description_lenght === 0){
        $("#errordescription").html("You should include describtion to the form");
        $("#errordescription").show();
        $error_description = true;
    }
    else {
        $("#errordescription").hide();
    }
}
function submit() {
    error_description = false;
    error_postname = false;
    check_postname();
    check_description();
    if(error_description === true || error_postname === true){
        $("#errordescription").html("You should include describtion to the form");
        $("#errordescription").show();
        $("#Errorpostname").html("You should include name of the post");
        $("#Errorpostname").show();
    }

}

});
