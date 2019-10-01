<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="\images\BT.png">
    <title>Report page</title>

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
		   <a  class="btn btn-outline-success my-2 my-sm-0" id = "GFG" href="logout.php">Logout</a>

          </form>
        </div>
      </nav>
    </header>
	<br/>

<style>

  .containers {
    border: 1px solid black;
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 180px;
  }

  .column
  {
      float: left;
      width: 33%;
  }



    .navbars {
      overflow: hidden;
      background-color: #6200AC;
      text-decoration: none;
      color: white;
      font-family:verdana;
    }

    .navbars a {
      float: left;
      font-size: 16px;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }


</style>
	<!-- Page starts here -->
	<div class=" containers ">
<div class="navbars">
<a> Selection Details </a>
</div>
        <div class="col-sm">
          <form class="needs-validation" novalidate>





<!--                                        first row                                      -->

  <div class="row">
<div class="column">
              <div class="col-sm">
                <label>Control Revenue  </label>
					<select class="form-control" id="country" required>
					 <!-- <option value="">Choose...</option>-->
					   <option>BUNDLE</option>
					   <option>UNBUNDLE</option>
					</select>
                <div class="invalid-feedback">
                  Please select a valid Control Revenue.
                </div>
              </div>
      </div>













<div class="column">
              <div class="col-sm">
                <label for="country">Control Category  </label>
					<select class="form-control" id="country" required>
					 <!-- <option value="">Choose...</option>-->
					   <option>COST</option>
					   <option>REVENUE</option>
					</select>
                <div class="invalid-feedback">
                  Please select a valid Control Category .
                </div>
              </div>
</div>

<div class="column">
              <div class="col-sm">
                <label for="address">Group Name</label>
				<input type="text" class="form-control" id="address" placeholder="Hermes Fund Managers Ltd" required>
				  <div class="invalid-feedback">
					Please enter valid group name
				  </div>
        </div>
</div>

</div>




<!--                                        Second row                                      -->


<div class="row">
  <div class="column">
              <div class="col-sm">
                <label for="address">Account</label>
				<input type="text" class="form-control" id="address" placeholder="OBill-771-Hermes Fund Manager" required>
				  <div class="invalid-feedback">
					Please enter Account.
				  </div>
  </div>
            </div>

            <div class="column">
              <div class="col-sm">
                <label for="address">Account Number</label>
				<input type="text" class="form-control" id="address" placeholder="Tags" required>
				  <div class="invalid-feedback">
					Please enter Account Number.
				  </div>
              </div>
          </div>

          <div class="column">
              <div class="col-sm">
                <label for="address">Invoice Number</label>
				<input type="text" class="form-control" id="address" placeholder="20632698" required>
				  <div class="invalid-feedback">
					Please enter Invoice Number.
				  </div>
              </div>
        </div>
            </div>


            <!--                                        third row                                      -->


			<div class="row">
        <div class="column">
              <div class="col-sm">
                <label for="country"> Country  </label>
					<select class="custom-select d-block w-100" id="country" required>
					 <!-- <option value="">Choose...</option>-->
					   <option>USA</option>

					</select>
                <div class="invalid-feedback">
                  Please select a valid Country.
                </div>
              </div>
        </div>

        <div class="column">
              <div class="col-sm">
                <label for="country">City,State </label>
					<select class="custom-select d-block w-100" id="country" required>
					 <!-- <option value="">Choose...</option>-->
					   <option>New York , NY</option>
					   <option>Chicago , IL</option>
					</select>
                <div class="invalid-feedback">
                  Please select a valid City,State.
                </div>
              </div>
            </div>


        <div class="column">
              <div class="col-sm">
                <label for="address">A Site Address</label>
				<input type="text" class="form-control" id="address" placeholder="55 5th ave,New York, NY, 10003 USA" required>
				  <div class="invalid-feedback">
					Please enter Site Address.
				  </div>
              </div>
          </div>
      </div>

      <!--                                        fourth row                                      -->


    <div class="row">
      <div class="column">
              <div class="col-sm">
                <label for="address">Product</label>
				<input type="text" class="form-control" id="address" placeholder="IP Connect Global" required>
				  <div class="invalid-feedback">
					Please enter Product.
				  </div>
              </div>
              </div>

          <div class="column">
              <div class="col-sm">
                <label for="address">Service Category</label>
				<input type="text" class="form-control" id="address" placeholder="MPLS Access" required>
				  <div class="invalid-feedback">
					Please enter Service Category.
				  </div>
              </div>
              </div>

          <div class="column">
              <div class="col-sm">
                <label for="address">Classic Site ID</label>
				<input type="text" class="form-control" id="address" size="3" placeholder="S1158122" required>
				  <div class="invalid-feedback">
					Please enter Classic Site ID.
				  </div>
              </div>
              </div>

            </div>


            <!--                                        fifth row                                      -->



			<div class="row">
        <div class="column">
              <div class="col-sm">
                <label for="address">Service Period</label>
				<input type="text" class="form-control" id="address" placeholder="01-2017" required>
				<div class="invalid-feedback">
					Please enter Service Period.
				</div>
              </div>
      </div>
          <div class="column">
              <div class="col-sm">
                <label for="country">USF Code </label>
					<select class="custom-select d-block w-100" id="country" required>
					 <!-- <option value="">Choose...</option>-->
					   <option>33</option>
					   <option>34</option>
					   <option>35</option>
					   <option>36</option>
					   <option>37</option>
					   <option>38</option>
					   <option>39</option>
					   <option>40</option>
					</select>
                <div class="invalid-feedback">
                  Please select a valid City,State.
                </div>
              </div>
            </div>

      <div class="column">
			<div class="col-sm">
              <label for="address">Supplier Name</label>
              <input type="text" class="form-control" id="address" placeholder="" required>
              <div class="invalid-feedback">
                Please enter Supplier Name.
              </div>
            </div>
      </div>
    </div>




    <!--                                        sixth row                                      -->



			<div class="row">
              <div class="col-sm">
                <label for="address">Supplier Circuit ID 1</label>
				<input type="text" class="form-control" id="address" placeholder="" required>
				  <div class="invalid-feedback">
					Please enter Supplier Circuit ID 1.
				  </div>
              </div>
              <div class="col-sm">
                 <label for="address">Supplier Circuit ID 2</label>
				<input type="text" class="form-control" id="address" placeholder="" required>
				  <div class="invalid-feedback">
					Please enter Supplier Circuit ID 2.
				  </div>
              </div>
            </div>



    <!--                                        seventh row                                      -->




			<div class="row">
              <div class="col-sm">
                <label for="address">Supplier Ban 1</label>
				<input type="text" class="form-control" id="address" placeholder="" required>
				  <div class="invalid-feedback">
					Please enter Supplier Ban 1.
				  </div>
              </div>
              <div class="col-sm ui-widget">
                 <label for="singletags">Supplier Ban 2</label>
				<input type="text" class="form-control" id="singletags" placeholder="" required>
				  <div class="invalid-feedback">
					Please enter Supplier Ban 2.
				  </div>
              </div>
            </div>

            <hr class="mb-4">
			<div class="row">
              <div class="col-md-6 mb-3">
				 <!-- <button class="btn btn-primary btn-lg btn-block" style="background-color:#6200AC;border:#6200AC; type="submit">Submit! </button> -->
				 <a class="btn btn-primary btn-lg btn-block" style="background-color:#6200AC;border:#6200AC; " href="table.php">Submit! </a>
              </div>
              <div class="col-md-6 mb-3">
					 <a class="btn btn-primary btn-lg btn-block" style="background-color:#6200AC;border:#6200AC; " href="sample.php">Reset </a>
              </div>
            </div>


        </div>
        </div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>-->
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
	<!-- For Multiple tag javascript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>




	<!--
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	-->



	<script>

       $(document).ready(function() {
			$('#example').DataTable( {
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"dom": 'Bfrtip',
				"buttons": [
					'copy', 'csv', 'excel', 'pdf', 'print','pageLength'
				]

			} );


			//code for single tags
			var availableTags = [
					  "ActionScript",
					  "AppleScript",
					  "Asp",
					  "BASIC",
					  "C",
					  "C++",
					  "Clojure",
					  "COBOL",
					  "ColdFusion",
					  "Erlang",
					  "Fortran",
					  "Groovy",
					  "Haskell",
					  "Java",
					  "JavaScript",
					  "Lisp",
					  "Perl",
					  "PHP",
					  "Python",
					  "Ruby",
					  "Scala",
					  "Scheme"
			];
			$( "#singletags" ).autocomplete({
			  source: availableTags
			});

			//code for multiple tags

			var tagApi = $(".tm-input").tagsManager();

			jQuery(".typeahead").typeahead({
			  name: 'tags',
			  displayKey: 'name',
			  source: function (query, process) {
				return $.get('ajaxpro.php', { query: query }, function (data) {
				  data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				tagApi.tagsManager("pushTag", item);
			  }
			});

	  } );

    </script>
  </body>
</html>
