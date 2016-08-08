<!DOCTYPE html>
<html lang="en">
<head>


<style>
/*404 page*/

.page-404{
position:relative;
width:350px;
height:200px;
margin:100px auto;
text-align: center;
}

.text-404{
font-size:138px;
background:#e9e3dd;
background-image: url('https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQTdWeWNteABnbzguiXSBxmfc8Z8nh_HHoWoK35QL81x4HnpVmgvQ');
background-repeat: no-repeat;
background-size: 200% 200%;
background-position: 100% 100%;
-webkit-animation: square 3s linear infinite;
-ms-animation: square 3s linear infinite;
animation: square 3s linear infinite;
-webkit-background-clip: text;
color:transparent;
text-align:center;
line-height:200px;
position:relative;
}

.text-404:nth-of-type(2){
text-shadow:none;
z-index:2;
position:absolute;
top:-139px;
left:-1px;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>404 |</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />


    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="page-404">
    <p class="text-404">404</p>

    <h2>Aww Snap! This is rather embarrassing</h2>
    <p>Something went wrong or that page doesn’t exist yet. <br><a href="{{URL::route('home')}}">Return Home</a></p>
</div>

</body>
</html>