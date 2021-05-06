$('#resetbutton').click( function (){
    Swal.fire({
        title: 'Do you want to reset the fields?',
        icon: 'warning',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: `Reset`,
        denyButtonText: `Don't reset`,
        }).then((result) => {

        if (result.isConfirmed) {
            fields = ['nameInput', "emailInput"];
            for(i = 0; i < 2; i++){
                $('#'+fields[i]).val('')
            }
            $('#validationCheck').prop('checked', true);

            Swal.fire('Reset!', '', 'success')
            editValidation()
        } else if (result.isDenied) {
            Swal.fire('Fields are not reset!', '', 'error')
        }
    })
});

$('#helpIcon').click( function (){
    Swal.fire('Info!', 'A quick way to sign up and get constant information about us!', 'question')
});

$("#validationCheck").change(function() {
    editValidation();
});

function editValidation(){
    if($('#validationCheck').is(":checked")){
        $("#validationSpan").html("Enabled");
        $('.required').show();
        $('#nameInput').prop('required', true);
        $('#emailInput').prop('required', true);
    }
    else{
        $("#validationSpan").html("Disabled");
        $('.required').hide();
        $('#nameInput').prop('required', false);
        $('#emailInput').prop('required', false);
    }
}