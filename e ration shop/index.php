<html>
<head>
<title>E-RATION SHOP</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.sign-up{
  background-color: white;
  border: none;
  color: black;
  text-align: center;
  font-size: 18px;
  transition: all 0.5s;
  cursor: pointer;
  text-transform: uppercase;
  text-decoration: none;
  color: black;
  font-weight: 800;
}
.sign-up span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.sign-up span:after {
 color:  #ffffff;
}
.sign-up span:hover {
  color: white;
 background: #070424;
}

.sign-up:hover span {
  padding-right: 20px;
  padding-left: 20px;
  padding-top: 20px;
  padding-bottom: 20px;
}

.sign-up:hover span:after {
  opacity: 1;
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  width: 100%;
  height: 4px;
  content: '.';
  background: #393187;
  visibility: none;
  opacity: 0;
  z-index: -1;
}
nav {
  width: 100%;
  margin: 0 auto;
  background: #fff;
  padding: 10px 0;
  overflow: hidden;
}
nav ul {
  list-style: none;
  text-align: center;
}
nav ul li {
  display: inline-block;
}
nav ul li a {
  display: block;
  padding: 15px;
  text-decoration: none;
  color: black;
  font-weight: 800;
  text-transform: uppercase;
  margin: 0 10px;
}
nav ul li a,
nav ul li a:after,
nav ul li a:before {
  transition: all .5s;
}
nav ul li a:hover {
  color:  #ffffff;
}


nav.shift ul li a {
  position:relative;
  z-index: 1;
}
nav.shift ul li a:hover {
  color: white;
}
nav.shift ul li a:after {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  width: 100%;
  height: 1px;
  content: '.';
  color: transparent;
  background: #070424;
  visibility: none;
  opacity: 0;
  z-index: -1;
}
nav.shift ul li a:hover:after {
  opacity: 1;
  visibility: visible;
  height: 100%;
}
nav ul li ul li{
display:none;
}
nav ul li:hover ul li{
display:block;
}
 hr {
        width: 70%;
        margin-left: auto;
        margin-right: auto;
        border: 0;
        height: 3px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(9, 84, 132), rgba(0, 0, 0, 0));

      }
#slideshow {
        overflow: hidden;
        height: 300px;
        width: 900px;
        margin: 0 auto;
    }
     
    /* Style each of the sides
    with a fixed width and height */
     
    .slide {
        float: left;
        height: 300px;
        width: 900px;
    }
     
    /* Add animation to the slides */
     
    .slide-wrapper {
         
        /* Calculate the total width on the
      basis of number of slides */
        width: calc(900px * 4);
         
        /* Specify the animation with the
      duration and speed */
        animation: slide 10s ease infinite;
    }
     
     
    @keyframes slide {
         
        /* Calculate the margin-left for
      each of the slides */
        20% {
            margin-left: 0px;
        }
        40% {
            margin-left: calc(-900px * 1);
        }
        60% {
            margin-left: calc(-900px * 2);
        }
        80% {
            margin-left: calc(-900px * 3);
        }
    }
.func{
margin-left:auto;
margin-right:auto;
background-color:white;;
width:900px;
height:500px;
border: 5px solid #060942;
}
button{
background-color: #bbbacc;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  width:100px;
  width:50%;
  margin-left:25%;
 margin-right:25%;
}
.ord{
margin-right:auto;
margin-left:auto;
background-color:#0c0645;
color:white;
width:400px;
height:80px;
text-align:center;
}
 .sub-menu {
        transform: scale(0);
        transform-origin: top center;
        transition: all 300ms ease-in-out;
      }
      .sub-menu li {
        font-size: 14px;
        background: rgba(0, 0, 0, 0.8);
        padding: 8px 0;
        color: white;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        transform: scale(0);
        transform-origin: top center;
        transition: all 300ms ease-in-out;
      }
      .sub-menu li:last-child {
        border-bottom: 0;
      }
      .sub-menu li:hover {
        background: black;
      }
      .menu>li:hover .sub-menu li {
        transform: scale(1);
      }
      .menu>li:hover .sub-menu {
        transform: scale(1);
      }

.gfg {
border-collapse:separate;
border-spacing:0 30px;
flex: 50%;
color: #080747;
}
.soc{
float:right;
color: #080747;
}
</style>
</head>
<body>
<table class="logo" cellspacing="25">
<tr>
<td><img src="logo1.jpg" alt="logo"></td>
<td><img src="head.jpg" alt="head" width="800"></td>
<td class="sign-up">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span> <a href="http://localhost/e%20ration%20shop/index1.php" style="text-decoration:none; color: inherit;">SignUp / Login</a></span></td>
</tr>
</table>
<hr>
<header>
<div box-shadow: 0px 5px 0px #dedede;></div>
<nav class="shift">
    <ul>
      <li><a href="#slideshow">Home</a></li>
      <li><a href="about_us.html">About Us</a></li>
      <li><a href="#func">Services</a></li>
      <li><a href="#">Contact Us</a>
      <ul>
      <li><a href="tel:1800-425-5901123"><i class="fa fa-phone"> &nbsp CALL : 1967 (or) 1800-425-5901</i></a></li>
      <li style = style="display:inline; white-space:nowrap;"><a href = "mailto: support@tnpds.com"><i class="fa fa-envelope"> Mail : support@tnpds.com</a></i><li>
      </ul>
      </li>
      <li><a href="feedback.html">Feedback</a></li>
      <li><a href="help.html">Help</a></li>
    </ul>
  </nav> 
<hr>
<br><br><div id="slideshow" >
        <div class="slide-wrapper">
             
            <!-- Define each of the slides
         and write the content -->
            <div class="slide">
                <img src="1.jpg" alt="1" height="300" width="800">
            </div>
            <div class="slide">
               <img src="2.jpg" alt="2" height="300" width="900">
            </div>
            <div class="slide">
                <img src="3.jpg" alt="3" height="300" width="800">
            </div>
            <div class="slide">
                <img src="4.jpg" alt="5" height="300" width="900">
            </div>
        </div>
    </div>
   <br><br> <table class="func" id="func">
<style>
    td{ font-size : 25px;}
    th{ font-size : 25px;}
</style>
      <tr>
        <th>Smart Cart Related Services</th></tr>
  <tr><td>
  <button><a href="https://www.tnpds.gov.in/login.xhtml" style="text-decoration:none;">Add member</a></button></td></tr>
  <tr>
    <td><button><a href="https://www.tnpds.gov.in/login.xhtml" style="text-decoration:none;">Change of address</a></button></td>
  </tr>
    <tr>
    <td><button><a href="https://www.tnpds.gov.in/login.xhtml" style="text-decoration:none;">Family head member change</a></button></td>
  </tr>
    <tr>
    <td><button><a href="https://www.tnpds.gov.in/login.xhtml" style="text-decoration:none;">Remove page number</a></button></td>
  </tr>
    <tr>
    <td><button><a href="https://www.tnpds.gov.in/login.xhtml" style="text-decoration:none;">Card related services request status</a></button></td>
  </tr>
    </table>
  </div>
<br><br><table class="ord">
   <td><a href="index1.html" style="text-decoration:none; color:white;">CLICK HERE FOR YOUR ORDER! </a></td>
</table>
  </div>
</div>
</body>
</html>