<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enter Number</h1>
    <form action="">
        <input type="text" name="number" id="number" placeholder="+251*******">
        <div id="recaptcha-container"></div>
        <button type="button" onclick="phoneAuth()">Send Code</button>
    </form> <br>
    <div id="verificationDiv" style="display: none;">
        <h1>Enter Verification Code</h1>
        <form action="">
            <input type="text" name="verificationCode" id="verificationCode" placeholder="Enter Verification Code">
            <button type="button" onclick="codeverify();">Verify Code</button>
        </form>
    </div>
    <div><h1>Noba</h1><h1>Noba</h1></div>
   
    <script>
        window.onload=function(){
            render();

        };

        function render(){
            window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', {
            'size': 'invisible',
            'callback': function(response) {
                // reCAPTCHA solved, allow signInWithPhoneNumber.
                onSignInSubmit();
            }
            });

        }

        function phoneAuth(){
            var number=document.getElementById('number').value;
            // Phone number authentication function of firebase
            // it takes two parameters firs one is number, and second is recaptcha
            
            firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult){
                window.confirmationResult=confirmationResult;
                coderesult=confirmationResult;
                console.log(coderesult);
                alert("Message sent");
                
            document.getElementById('verificationDiv').style.display="block";

            }).catch(function(error){
                alert(error.message);
            });
        }

        function codeverify(){
            var code=document.getElementById('verificationCode').value;
            coderesult.confirm(code).then(function(result){
                alert("Successfully Registered");
                var user=result.user;
                console.log(user);
            }).catch(function (error){
                alert(error.message);
            });
        }
    </script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-auth.js"></script>

<script>
   // Your web app's Firebase configuration
   var firebaseConfig = {
            apiKey: "AIzaSyC6Q0JVXqNn9YVccADKlf7_B-RNtgtVOiE",
            authDomain: "yonifire-bb21a.firebaseapp.com",
            databaseURL: "https://yonifire-bb21a.firebaseio.com",
            projectId: "yonifire-bb21a",
            storageBucket: "yonifire-bb21a.appspot.com",
            messagingSenderId: "427791827404",
            appId: "1:427791827404:web:3deb5d67844f9b59215d69",
            measurementId: "G-ZMTK1357B7"
        };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
</script>

</body>
</html>