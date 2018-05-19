$('#btnLogin').click(function(e){
    e.preventDefault();
    let params = {'user':$('#user').val(),'password':$('#password').val()};
    $.ajax({
        url:'./controllers/userController.php?action=register',
        type:'POST',
        data:params,
        success:(data) =>{
            data == 1 ? 
            swal("Welcome", "No mames perro", "success") :
                swal("Opss !", "Usuarios y/o password incorrecto", "error"); 
        }
    });
});