<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Jobs in Pakistan, Opportunity, Pakistan, Resume, naukri, rizq" />
<meta name="description" content="Online Job Hunting Platform, Jobs in Pakistan, Jobs in Karachi, Jobs in Lahore, Jobs in Islamabad, Jobs in Peshawar, Job opportunities on JobsChamber.com" />
<meta name="robots" content="ALL, FOLLOW,INDEX" />
<meta name="author" content="Jobs Chamber" />

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

<link rel='stylesheet' href='includes/style.css' media='all' />
<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css"><!--This should be commented-->
<script src="lib/jquery-2.1.3.min.js"></script> 
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/validator.min.js"></script>
<script src="lib/sweetalert-dev.js"></script>
<link rel="stylesheet" href="lib/sweetalert.css"> 

<script>
    function Filter(){

        var Loc=document.getElementById('location').value;
        var Int=document.getElementById('interest').value;
        
        if(Loc == "City" && Int == "Field"){
            document.getElementById('LO').innerHTML="Please Select City";
            document.getElementById('IN').innerHTML="Please Select Field";
        }else if(Loc == "City" && Int != "Field"){
            document.getElementById('LO').innerHTML="Please Select City";
        }else if(Loc != "City" && Int == "Field"){
            document.getElementById('IN').innerHTML="Please Select Field";
        }else if(Loc != "City" && Int != "Field"){
            document.getElementById('LO').innerHTML="";
            document.getElementById('IN').innerHTML="";
            return true;
        }
        return false;
    }

    function setpostid(x) {
        console.log("setpostidasdsad");
        document.getElementById("postid").setAttribute("value", x);
    }

    function myFunction() {
        document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
    }   


    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-75023728-1', 'auto');
    ga('send', 'pageview');
</script>