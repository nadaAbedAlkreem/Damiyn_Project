 		

var totalSeconds = 60; // Total seconds for 1 minute
var timeLeft = totalSeconds;
var countdownTimer = setInterval(function() {
var minutes = Math.floor(timeLeft / 60);
var seconds = timeLeft % 60;
var countdownElement = document.getElementById("countdown");

if (timeLeft <= 0) {
    clearInterval(countdownTimer);
    alertResendCode();

     countdownElement.innerHTML = "00:00";
 
} else {
    countdownElement.innerHTML = minutes + ":" + seconds + "";
}

timeLeft -= 1;
}, 1000);
const  btn_send = document.getElementById("reload-send-btn");
btn_send.addEventListener("click", function() {
    // location.reload();
     alertResendCode();
 
});
 function alertResendCode()
    {
                Swal.fire({
                    title: 'انتهت المهلة',
                    text: "اضغط على اعادة الارسال",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'اعادة الارسال',
                    cancelButtonText: 'إلغاء'
            }).then((willResend) => {

            if (willResend.isConfirmed)
            {
                var userId = document.querySelector('input[name="id"]').value;


                $.ajax(
                {
                type: "get",
                url: "rsend-2fa-code/"+userId,
            
                success: function ()
                {
                    location.reload();
                    console.log("it Works");
                }
              , error:function(error) 
                {
                    console.log(error);
                            swal(
                                {
                                icon: 'error',
                                title: 'Oops...',
                                text: error.responseJSON.message
                               })
                  

                }
                });

            }
            });
    }
    $('#VerifySubmit').on('submit',function(e)
    {
            e.preventDefault(); // Prevent the default form submission
            let formData = new FormData(this); // Create FormData from the form element

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     } });


            $.ajax(
                {
                        type: "post",
                        url: "verify-2fa",
                        dataType: "json",
                        processData: false, // Necessary for FormData
                        contentType: false, // Necessary for FormData
                        data: formData,

                        success: function (data) {
                             console.log(data); 

                             window.location.href = "http://127.0.0.1:8000/home"; 


                        },
                        error: function (error) 
                        {
                            console.log(error);
                                swal(
                                    {
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: error.responseJSON.message
                                })
                        },
                });

    });









 





 