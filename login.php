<html>
    <head>
        <meta charset="utf-8">
        <link href="css/style_login.css" rel='stylesheet' type='text/css' />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="main">
            <div class="login-form">
                <h1>Prijava</h1>
                <div class="head">
                    <img src="images/user.png" alt=""/>
                </div>
                <form>
                    <input type="text" class="text" value="Uporabniško ime" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Uporabniško ime';
                                                        }" >
                    <input type="password" value="Geslo" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Geslo';
                                                        }">
                    <div class="submit">
                        <input type="submit" onclick="myFunction()" value="Prijava" >
                    </div>	
                    <p><a href="#">Pozabljeno geslo ?</a></p>
                </form>
            </div>
        </div>		 		
    </body>
</html>
