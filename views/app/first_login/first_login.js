$('#btnFirstLogin').click(function(e){
    e.preventDefault();
    alert(1);
    let params = {'password':$('#newPassword').val(),'idUser':$('#password').val()};
    console.log(params);
    $.ajax({
        url:'./controllers/userController.php?action=register',
        type:'POST',
        data:params,
        success:(data) =>{
            data == '1' ? 
            swal("Welcome", "No mames perro", "success") :
                swal("Opss !", "Usuarios y/o password incorrecto", "error"); 
        }
    });
});