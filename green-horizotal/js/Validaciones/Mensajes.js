function notaError(sms){
new PNotify({
    title: '  ¡ERROR!',
    text: sms,
    type: 'error'
});

}
function notaInfo(sms){

new PNotify({
    title: '  ¡HECHO!',
    text: sms,
    type: 'success'
});

}

function noti(sms){
    new notify({
        icon: icon,
        title: ' EXCELENTE ',
        text: sms,
        type:'success'
    });
}