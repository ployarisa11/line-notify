<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        input {
            border:1px solid #ccc;
            width:200px;
            padding:10px;
            margin:5px 15px;
            border-radius:5px;
        }
        .send {
            width:220px;
        }
    </style>
</head>
<body>

    <form action="line-notify.php" method="post">
        <input name="firstname" placeholder='First Name (required)' type='text'>
        <br>
        <input name="lastname" placeholder='Last Name (required)' type='text'>
        <br>
        <input name="email" placeholder='Email (required)' type='email'>
        <br>
        <input placeholder='Phone' name="phone" type='text'>
        <br>
        <input class='send' name="submit" type='submit' value='Send'>
    </form>
    
</body>
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
     <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-firestore.js"></script>
<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyA5KFIcemUtm1_i64TUyifV0WfKjbm9irk",
    authDomain: "rru-connect-epeevr.firebaseapp.com",
    databaseURL: "https://rru-connect-epeevr.firebaseio.com",
    projectId: "rru-connect-epeevr",
    storageBucket: "rru-connect-epeevr.appspot.com",
    messagingSenderId: "898597223567",
    appId: "1:898597223567:web:8cd2b5064e8edbaf20c4fa"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>
</html>