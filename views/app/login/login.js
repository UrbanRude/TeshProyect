$('#btnLogin').click(function(e){
    e.preventDefault();
    console.log(1);
    alert(1);
    let params = {'user':$('#user').val(),'password':$('#password').val()};
    console.log(params);
    $.ajax({
        url:'./controllers/userController.php?action=register',
        type:'POST',
        data:params,
        success:(data) =>{
            console.log(`Respuesta ajax >> ${data}`);
            data == '1' ? 
            swal("Welcome", "No mames perro", "success") :
                swal("Opss !", "Usuarios y/o password incorrecto", "error"); 
        }
    });
});