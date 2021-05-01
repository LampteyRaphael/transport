$(document).ready(function(){
    $("#update").on('show.bs.modal', function (event) {
        var button= $(event.relatedTarget)
        var ids=button.data('ids')
        var username=button.data('names')
        var emails=button.data('emails')
        var number=button.data('phone')
        var photos=button.data('photo')
        var signaturephoto=button.data('signaturephoto')

        var modal=$(this)
        modal.find('.modal-title').text('EDIT DATA FORM')
        modal.find('.modal-body  #id').val(ids);
        modal.find('.modal-body  #name').val(username);
        modal.find('.modal-body  #email').val(emails);
        modal.find('.modal-body  #phoneNumber').val(number);
        modal.find('.modal-body  #myImage').attr('src', photos);
        modal.find('.modal-body  #mysignature').attr('src', signaturephoto);
        //for only admins
        // modal.find('.modal-body  #role_id').val(role);
        // modal.find('.modal-body  #is_active').val(active);

    });
});


$(document).ready(function(){
    $("#delete").on('show.bs.modal', function (event) {
        var button= $(event.relatedTarget)
        var ids=button.data('ids')
        var username=button.data('names')
        var emails=button.data('emails')
        var numbers=button.data('phone')
        var photos=button.data('photo')
        var signaturephoto=button.data('signaturephoto')

        var modal=$(this)
        modal.find('.modal-title').text('EDIT DATA FORM')
        modal.find('.modal-body  #id').val(ids);
        modal.find('.modal-body  #name').text(username);
        modal.find('.modal-body  #email').text(emails);
        modal.find('.modal-body  #phoneNumber').text(numbers);
        modal.find('.modal-body  #myImage').attr('src', photos);
        modal.find('.modal-body  #mysignature').attr('src', signaturephoto);

    });
});


function ConfirmUpdate()
{
    var x = confirm("Are you sure you want to Update?");
    if (x)
        return true;
    else
        return false;
}

function ConfirmDelete()
{
    var x = confirm("Are you sure you want to delete?");
    if (x)
        return true;
    else
        return false;
}
