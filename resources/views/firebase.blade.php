<html>
<head>
    <title>Mobile Number Authentication</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .body-bg-color{
        height: 200px;
  background-color: #FFBE5E; /* For browsers that do not support gradients */
  background-image: linear-gradient(to bottom right, #FFBE5E, #FFF8F0);
}
      .container{
        width:35%;
        margin: 40px; 
      }
      .form-control{
        max-width: 250px;
        margin: 10px;
      }
      .btn{
        margin: 10px;
      }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>


<body class="body-bg-color">
  
<center><div class="container" mt-5>
    <!--<h1></h1>-->
  
    <div class="alert alert-danger" id="error" style="display: none;"></div>
    <div class="card">
      <div class="card-header">
        Mobile Number Verification
      </div>
      <div class="card-body">
  
        <div class="alert alert-success" id="sentSuccess" style="display: none;"></div>
  
        <form>
            <label> Mobile No: </label>
             {{$data}}
            <input type="text" id="number" class="form-control" value="+91{{$data}}">
            <div id="recaptcha-container"></div>
            <button type="button" class="btn btn-success" onclick="phoneSendAuth();">SendCode</button>
        </form>
      </div>
    </div>
      
    <div class="card" style="margin-top: 10px">
      <div class="card-header">
        Enter Verification code
      </div>
      <div class="card-body">
  
        <div class="alert alert-success" id="successRegsiter" style="display: none;"></div>
  
        <form>
            <input type="text" id="verificationCode" class="form-control" placeholder="Enter verification code">
            <button type="button" class="btn btn-success" onclick="codeverify();">Verify code</button>
  
        </form>
      </div>
    </div>
  
</div></center>
  
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
  
<script>
      
      const firebaseConfig = {
  apiKey: "AIzaSyAemWgcYI7gXdkBs8XNsLG6_NGi61Fp7Vs",
  authDomain: "phone-auth-laravel.firebaseapp.com",
  databaseURL: "https://phone-auth-laravel-default-rtdb.firebaseio.com",
  projectId: "phone-auth-laravel",
  storageBucket: "phone-auth-laravel.appspot.com",
  messagingSenderId: "793176887735",
  appId: "1:793176887735:web:b141c69c696823cbedd832",
  measurementId: "G-EE2S3EL04T"
};
    
  firebase.initializeApp(firebaseConfig);
</script>
  
<script type="text/javascript">
  
    window.onload=function () {
      render();
    };
  
    function render() {
        window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
        recaptchaVerifier.render();
    }
  
    function phoneSendAuth() {
           
        var number = $("#number").val();
          
        firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
              
            window.confirmationResult=confirmationResult;
            coderesult=confirmationResult;
            console.log(coderesult);
  
            $("#sentSuccess").text("Message Sent Successfully.");
            $("#sentSuccess").show();
              
        }).catch(function (error) {
            $("#error").text(error.message);
            $("#error").show();
        });
  
    }
  
    function codeverify() {
  
        var code = $("#verificationCode").val();
  
        coderesult.confirm(code).then(function (result) {
            var user=result.user;
            console.log(user);
            window.location="/razorpay-payment";
           // window.location = "https://www.youtube.com/watch?v=aCjJIN1bf_Q&t=473s";
            $("#successRegsiter").text("you are register Successfully.");
            $("#successRegsiter").show();
            
          
  
        }).catch(function (error) {
            $("#error").text(error.message);
            $("#error").show();
        });
    }
  
</script>
  
</body>
</html>