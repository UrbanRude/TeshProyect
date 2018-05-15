$('#btnLogin').click(function(e){
    e.preventDefault();
    var user = $('#user').val();
    var pwd = $('#pwd').val();
    console.log(`${user} .l. ${pwd}`);
});