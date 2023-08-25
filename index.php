

-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
 
<!-- include firebase database -->
<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>
 
<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyAt1RmW0k_xQ3rF4cA1du2ZcEHOizHXQCM",
        authDomain: "nx-chat-abc.firebaseapp.com",
        databaseURL: "https://nx-chat-abc-default-rtdb.firebaseio.com/",
        projectId: "nx-chat-abc",
        storageBucket: "nx-chat-abc.appspot.com",
        messagingSenderId: "G-CCGKZVQSSY",
        appId: "1:162543526476:web:d1c9aad1320b1c1c804ae9"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);


    var myName = prompt("Enter your name");
</script>
     
<!-- create a form to send message -->
<form onsubmit="return sendMessage();">
    <input id="message" placeholder="Enter message" autocomplete="off">
 
    <input type="submit">
</form>
     
<script>
    function sendMessage() {
        // get message
        var message = document.getElementById("message").value;
 
        // save in database
        firebase.database().ref("messages").push().set({
            "sender": myName,
            "message": message
        });
 
        // prevent form from submitting
        return false;
    }
</script>