
<form action="/store" method="post">
 
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>


<header>
  <h2>REGISTER HERE<h2>
</header>





</body>
</html>
@include ("partials.header")
<h3>Create an Account</h3>
<form action="/store" method="POST">
@csrf

@error('email')
<p>Invalid Account</p>
@enderror


<div class="mb-3">
<label for="name" class="form-label">Name</label>
<input
type="text"
class="form-control"
aria-describedby="emailHelp"
name="name">
<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Email address</label>
<input
type="email"
class="form-control"
id="exampleInputEmail1"
aria-describedby="emailHelp"
name="email">
<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Password</label>
<input type="password"
class="form-control"
id="exampleInputPassword1"
name="password">
</div>

<div class="mb-3">
<label for="confirmpassword" class="form-label">Confirm Password</label>
<input type="password"
class="form-control"
id="exampleInputPassword1"
name="password_confirmation">
</div>


<button type="submit" class="btn btn-primary">Submit</button>
</form>
<h6><a href={{"/login"}}>Already have an account? Sign in here.</a></h6>
@include('partials.footer')
