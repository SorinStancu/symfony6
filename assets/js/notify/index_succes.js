'use strict';
var notify = $.notify('<i class="fa fa-thumbs-up"></i><strong>Loading</strong>...', {
    type: 'success',
    allow_dismiss: true,
    delay: 5000,
    showProgressbar: true,
    timer: 400,
    animate: {enter: 'animated fadeInDown', exit: 'animated fadeOutUp'}
});
setTimeout(function () {
    notify.update('message', '<i class="fa' + ' fa-thumbs-up"></i><strong>Modificarea s-a efectuat cu succes!</strong>');
}, 2000);