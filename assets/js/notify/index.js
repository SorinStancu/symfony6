'use strict';
var notify = $.notify('<i class="fa fa-thumbs-up"></i><strong>Loading</strong>...', {
    type: 'danger',
    allow_dismiss: true,
    delay: 5000,
    showProgressbar: true,
    timer: 400,
    animate: {enter: 'animated fadeInDown', exit: 'animated fadeOutUp'}
});
setTimeout(function () {
    notify.update('message', '<i class="fa' + ' fa-thumbs-up"></i><strong>Modificarea nu s-a efectuat!</strong>');
}, 2000);