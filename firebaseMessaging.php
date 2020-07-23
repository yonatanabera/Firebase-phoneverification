<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-messaging.js"></script>
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

const messaging=firebase.messaging();
messaging.requestPermission()
.then(function(){
    console.log('Have Permission');
})
.catch(function(err){
    console.log('Error Occured');
})

messaging.onMessage(function(payload){
    console.log('onMessage: ', payload);
})
</script>