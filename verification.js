window.onload=function () {
    render();
};
function render() {
    window.recaptchaVerifier =new firebase.auth.RecaptchaVerifier('rc');
    recaptchaVerifier.render();
}
function Phoneautentication() {
    var number=document.getElementById('number').value;
    var appVerifier = window.recaptchaVerifier;
    console.log(number);
    firebase.auth().signInWithPhoneNumber(number, appVerifier)
        .then(function (confirmationResult) {
            // SMS sent. Prompt user to type the code from the message, then sign the
            // user in with confirmationResult.confirm(code).
            window.confirmationResult = confirmationResult;
               var codeResult=confirmationResult;
               console.log(codeResult);
               alert(codeResult);
        }).catch(function (error) {
        // Error; SMS not sent
        // ...
    });
    // firebase.auth.SignInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationresult) {
    //    window.confirmationResult=confirmationResult;
    //    codeResult=confirmationResult;
    //    console.log(codeResult);
    //    alert("message sent")
    // }).catch(function (error) {
    //     alert(error.message)
    // });
}
function verifycode() {
    var code=document.getElementById('verificationCode').value;
    codeResult.confirm(code).then(function (result) {
        alert("successfull");
        var user=result.user;
        console.log(user);
    }).catch(function (error) {
        alert(error.message);
    });
}