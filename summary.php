<?php
include("database/db_conection.php");
ini_set('display_errors', '0');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="\images\BT.png">
    <title>summary page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Jquery UI for single autocomplete -->
	<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
	<!-- CSS for multiple tags autocomplete -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">

	 <style>
        #GFG {
            text-decoration: none;
            background-color: #D52685;
            color: white;
            border: #D52685;
        }
        #navbar {
            text-decoration: none;
            background-color: #6200AC;
            color: #6200AC;
            border: #D52685;
        }
        label {
			padding: 1px 1px 0 0;
			display: inline-block;
		}
		
		
		#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #e60050;
  color: white;
}
		
		
    </style>

	 <!-- Datatable core CSS -->

   <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
   <link href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" rel="stylesheet">

	<!-- Datatable core JS -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

	<!-- Autocomplete core JS -->
	<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


	<!-- Custom styles for this template -->
    <!--<link href="https://getbootstrap.com/docs/4.1/examples/checkout/form-validation.css" rel="stylesheet">-->

  </head>

  <body class="bg-light">

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="navbar">
        <a href="#"><img src="bootstrap-3.2.0-dist\images\BT.png" alt="Bt Logo" height="70" width="70"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
		   <a  class="btn btn-outline-success my-2 my-sm-0" id = "GFG" href="adminlogout.php">Logout</a>

          </form>
        </div>
      </nav>
    </header>

<br/><br/><br/><br/>



<div class="table-scrol">
    <h5 align="center"> BT Procure - Revenue to Cost Summary</h5>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->

<table id="customers">
  <tr>  
	<th># Customers</th>
	<th># BTAs</th>
	<th># Site Ids</th>
	<th># Circuits</th>
	<th>Total Revenue</th>
	<th>Total Cost</th>
	<th>Margin<th>
	<th>Margin %</th>
	<th>USF Recovered</th>
	<th>USF Paid</th>
	<th>USF Margin</th>  
  </tr>
  <tr>
    <td>1</td>
	<td>1</td>
	<td>1</td>
	<td>1</td>
	<td>1</td>
	<td>1</td>
	<td>1<td>
	<td>1</td>
	<td>1</td>
	<td>1</td>
	<td>1</td>  
  </tr>

</table>


 </div>
</div>


</body>

</html>
