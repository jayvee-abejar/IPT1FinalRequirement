<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>NightBeach | florida web design</title>
</head>
<style>
/* A Free Design by Bryant Smith (bryantsmith.com) */



body {
    margin: 0;
    padding: 0;
    text-align: left;
    font: 12px Arial, Helvetica, sans-serif;
    font-size: 13px;
    color: #061C37;
    background: #EEEFE4;
    background-image:url(images/background.png);
    background-repeat:repeat-x;
}
*
{
  margin: 0 auto 0 auto;
 text-align:left;}

#container
{
  display: block; 
  height:auto;
  position: relative; 
  width: 960px;
}


#header
{
height:85px;
width:960px;    
}

#header h1
{
    position:absolute;
text-align:left;
color:#FFFFFF;
font-size:43px;
color:#FFF; 
left:14px;
top:18px;
}


#header h2
{
position:absolute;
text-align:right;
color:#A9D1FA;
left:490px;
top:38px;
width:400px;
}

#mainpic
{
background-image:url(images/main.jpg);
background-repeat:no-repeat;
width:900px;
height:354px;   
}



.off
{
color:#67A0F5;
}


#menu
{
display:block;
float:left;
clear:both;
width:960px;
height:54px;
float:left;
clear:both;
}

#leftmenu
{
margin-top:15px;
width:204px;
float:left;
}

#leftmenu_top
{
width:204px;
height:14px;
background-image:url(images/leftmenu_top.png);
}
#leftmenu_bottom
{
width:204px;
height:14px;
background-image:url(images/leftmenu_bottom.png);
}
#leftmenu_main
{
width:204px;
height:auto;
background-color:#1C478E;
}

#leftmenu_main ul
{
list-style: none;
padding: 0px;
width:204px;
}


#leftmenu_main h3
{
list-style: none;
padding: 0px;
width:204px;
color:#FFFFFF;
padding-left:10px;
padding-bottom:14px;
}

#leftmenu_main ul li
{
list-style: none;
padding: 0px;
width:204px;
text-align:left;
}

#leftmenu_main ul li a, #leftmenu_main ul li a:visited
{
display:block;
list-style: none;
padding: 0px;
width:192px;
padding-left:12px;
padding-top:4px;
height:45px;
text-align:left;
background-image:url(images/leftmenu_link.png);
background-repeat:repeat-x;
margin-top:5px;
color:#FFFFFF;
text-decoration:none;
font-size:11px;
font-weight:bold;
}

#leftmenu_main ul li a:hover
{
color:#87BCF8;
    
    
}




#content
{
display:block;
float:left;
width:689px;
height:auto;
padding-left:10px;
padding-top:15px;
padding-right:10px;
padding-bottom:5px;
}


#content_top
{
    background-image:url(images/main_top.png);
    background-repeat:no-repeat;
    width:689px;
    height:25px;
}

#content_main
{
background-image:url(images/main_back.png);
background-repeat:repeat-y;
width:659px;
padding-left:15px;
padding-right:15px;
}

#content_bottom
{
background-image:url(images/main_bottom.png);
background-repeat:no-repeat;
width:689px;
height:25px;
}


.button{
        background: none;
        width: 100px;
        height: 55px;
        color: black;
        font-size: 20px;
        border: none;
        }
        .button:hover{
        background: linear-gradient( to left,blue,blue);
        height: 55px;
        width: 100px;
        transition: 1s;
        color: none;
        font-size: 20px;
        text-shadow: 3px 3px 3px white;
    }
.frame{
    margin-top:15px;
    width: 70%;
    height: 380px;
    background: white;
    border: "n";
    border-radius: 15px;
    float: right;
    margin-left: 70px;
    border-color: blue;
    border-style: solid;

    }
#footer
{
width:inherit;
height:auto;
}

#footer h3 a,#footer h3 a:visited
{
display:inline;
text-align:center;
font-size:12px;
text-decoration:none;
color:#7198E1;
}


#menu ul {
    list-style: none;
    padding: 0px;
    margin-left:auto;
    width:960px;
}

#menu li {
    list-style: none;
    padding: 0px;   
    display: inline; 
    
}

#menu a {
    float: left;
    height: 36px;
    display: block;
    text-align: center;
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
    padding-top: 18px;
    font-size: 15px;
    padding-left:13px;
    padding-right:13px;
    
}

#menu a:hover{
    color:#86AEF9;
    background-image:url(images/linkbackground.jpg);
    background-repeat:repeat-x;
}

#content p
{
    
}


html, body {
text-align: center;
}
p {text-align: left;}
</style>

<body>
<div id="container"> 
		<div id="header">
        	<h1>IPT<span class="off">-1</span></h1>
            <h2>Jayvee Marvin C. Abejar BSIT 2B</h2>
        </div>   
        
        <div id="menu">
            	<nav>
<center>
<form method="post"> 

        <input type="submit" name="button1"
                class="button" value="Home" />
        <input type="submit" name="button2"
                class="button" value="About" />  
        <input type="submit" name="button3"
                class="button" value="Products" /> 
        <input type="submit" name="button4"
                class="button" value="Services" />  
        <input type="submit" name="button5"
                class="button" value="Design"/>
        <input type="submit" name="button6"
                class="button" value="Contact" />           
    </form> 
    </center>

</center></nav>
<main class="main">
<fieldset class="frame">
   <?php
      
        if(array_key_exists('button1', $_POST)) { 

            button1();

        } 

        else if(array_key_exists('button2', $_POST)) { 

            button2(); 

        }
        else if(array_key_exists('button3', $_POST)) { 

            button3(); 

        } 
        else if(array_key_exists('button4', $_POST)) { 
            button4(); 

        }
        else if(array_key_exists('button5', $_POST)) { 

            button5(); 

        }
        else if(array_key_exists('button6', $_POST)) { 

            button6(); 

        } 
function button1() {  
        echo "<img src = 'images (1).jpeg' height='100%' width ='100%'>";
        } 
        function button2() { 
        echo "<img src = 'images (1).jpeg' height='100%' width ='100%'>";
        }
        function button3() { 
        echo "<img src = 'download.png' height='100%' width ='100%'>";   
        } 
        function button4() { 
        echo "<img src = 'web-page-design-preview-91361.jpg' height='100%' width ='100%'>";
        }
        function button5() {  
         echo "<img src = 'images (2).jpeg' height='100%' width ='100%'>";
        }
        function button6(){ 
        echo "<img src = 'images.png' height='100%' width ='100%'>";
        
        } 
    ?>
</fieldset>
</main>
        
        </div>
        
        <div id="leftmenu">

        <div id="leftmenu_top"></div>

				<div id="leftmenu_main">    
                
                <h3>Links</h3>
                        
                <ul>
                   
                    <li><a href="https://drive.google.com/file/d/1shvfmf4f1Bbop0_77qZzTYFm9SUSw8EP/view?usp=drivesdk">PHP Variables and Constants</a></li>
                    <li><a href="https://drive.google.com/file/d/1K25QVqXFXInGr-ur9q65oYIUM3WXrIHW/view?usp=drivesdk">PHP Operators</a></li>
                    <li><a href="https://drive.google.com/file/d/19DEOX1crI64Zsh9x73pMpolKxlE90LWE/view?usp=drivesdk">PHP Arithmetic Operators</a></li>
                    <li><a href="https://drive.google.com/file/d/1eju9Uky4ycwElRsfPfFLyfHdJ1ymFNk7/view?usp=drivesdk">PHP Control Structures</a></li>
                    <li><a href="https://drive.google.com/file/d/1KQs3TzC_ZnvDNT5XrCsW4bkFHsESs1H1/view?usp=drivesdk">PHP Links</a></li>
                     <li><a href="https://drive.google.com/file/d/1of2PNZQSSGuHAlw9-ZjfudeuHHbXUcur/view?usp=drivesdk">How To Use Xampp</a></li>
                    <li><a href="https://drive.google.com/file/d/1cJbe-d39kOIzfqJnWSyMWvdUcvEJmH0-/view?usp=drivesdk">Creating Github and Netlify Account</a></li>
                    <li><a href="https://drive.google.com/file/d/1p_SyJBaFWPWhQ0XWorCXxcRIEyEDYZAZ/view?usp=drivesdk">PHP, ASP.NET, JSP and CFML</a></li>
                   
                </ul>
</div>
            
            <br>
            <div id="footer"><h3><a href="http://www.bryantsmith.com">&copy; Florida Web Design</a></h3></div>
</body>

</html>
