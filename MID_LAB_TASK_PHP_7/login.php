<html>
<head> 
    <title>Login</title>
</head>
<body>
    <fieldset>
   <table width='80%' >
   <tr><td><img src='logo.png'   height='75px'/></td> <td align='right'>

    <nav><a href='./home.php'>Home</a> |<a href='./login.php'>Login</a> |<a href='./reg.php'>Registration</a> </nav>
    </td></tr>
</table>
</fieldset>
<fieldset>
     <legend><h2><b>  LOGIN </h2></b></legend>
 <form action='./check.php' method='POST'>

    <table> 
   <tr><td>User Name:</td><td> <input type="text" name='username'></td></tr>

    <tr><td>Password:</td><td><input type="password" name='password'> </td></tr>

    <tr></tr><tr><td> <input type='checkbox'>Remember Me</td> </tr> <tr> <td><input type='submit' value='Submit'>

    <a href='./forget.php'>Forgot Password?</a></td></tr>

  </table>
  </form>
  </fieldset>
  <fieldset>
<center>
 <label> Copyright © 2017</label>
</center>
 </fieldset>
</body>
</html>