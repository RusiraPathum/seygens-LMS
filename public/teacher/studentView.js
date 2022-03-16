$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

function viewStudentProfile(studentId){

    $.ajax({
        type:'GET',
        url: "/getSignalStudent/" +studentId,
        success: (response) => {
            console.log(response)
        }


    });

}
