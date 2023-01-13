$(document).ready(function(){
    $("#btnid").click(function(){
     
    var nameinfo = $("#nameid").val();
    var emailinfo = $("#emailid").val();
    var phoneinfo = $("#phoneid").val();
    var genderinfo = $("#genderid").val();

    if(nameinfo == ""){
        $("#nameerror").html("please enter name");
    }else{
        $("#nameerror").html("");
    }

    if(emailinfo == ""){
        $("#emailerror").html("please enter email");
    }else{
        $("#emailerror").html("");
    }


    });
});