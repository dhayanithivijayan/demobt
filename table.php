<?php
include("database/db_conection.php");
ini_set('display_errors', '0');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.3/css/fixedHeader.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css">
  <!-- For export report css start here-->
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
  <!-- For export report css end here-->

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
  
   <style>
	 #map-container { height: 450px }
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/fixedheader/3.1.3/js/dataTables.fixedHeader.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>
  <!-- For export report js start here-->
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
  <!-- For export report js end here-->





  

  <script>
	  $(document).ready(function() {
		var table = $('#example').DataTable( {
			dom: 'Bfrtip',       
			responsive: true,			
			buttons: ['pageLength','copy', 'csv', 'excel', 'pdf', 'print'],
			"lengthMenu": [ 10, 20, 50, 70, 100 ],			
		    "pageLength": 20,
			
		} );	 
		//new $.fn.dataTable.FixedHeader( table );
			
		} );   
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPKE8GlEaYEzVICgnJKqQAcwU-M7PIHV4 "></script>

</head>
<body>

<center><h2 style="color:blue;">Customer Details </h1></center>

<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
         <thead>
			<tr>
				 <?php
				 $get_columns="SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='db_bt' AND `TABLE_NAME`='r2c1'";//select query for viewing users.
				 //
				 
				 $run=mysqli_query($dbcon,$get_columns);//here run the sql query.
				 $i=0;
				 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
				 { $i++;?>
					  <th><?php echo $row[0];  ?></th>
				<?php if($i==25) break;
				 }
				 ?>        
			</tr>
		</thead>
        <tbody>
            
            <?php
			 $get_column_values="SELECT `ID`,`BT_CIRCUIT_ID`,`CONTROL_REVENUE_BUNDLE_UNBUNDLE`,`CONTROL_CATEGORY _COST_REVENUE`,`GROUP_NAME`,`ACCOUNT`,`ACCOUNT_NUMBER`,`INVOICE_NUMBER`,`BILLED_TO_DATE`,`DUE_BY`,`PSN`,`BILL_STRUCTURE_1`,`BILL_STRUCTURE_2`,`BILL_STRUCTURE_3`,`BILL_STRUCTURE_4`,`BILL_STRUCTURE_5`,`BILL_STRUCTURE_6`,`BILL_STRUCTURE_7`,`BILL_STRUCTURE_8`,`BILL_STRUCTURE_9`,`BILL_STRUCTURE_10`,`COUNTRY`,`CITY_ STATE`,`A SITE ADDRESS`,`Z SITE ADDRESS` FROM `r2c1` WHERE  ID < 15000 ";//select query for viewing users.
			 //echo $get_column_values;
			 $run1=mysqli_query($dbcon,$get_column_values);//here run the sql query.
			 while($row=mysqli_fetch_assoc($run1))//while look to fetch the result and store in a array $row.
			 { ?>  <tr>
				  <td><?php echo $row["ID"];  ?></td>
				  <td><?php echo $row["BT_CIRCUIT_ID"];?></td>
				  <td><?php echo $row["CONTROL_REVENUE_BUNDLE_UNBUNDLE"];?></td>
				  <td><?php echo $row["CONTROL_CATEGORY _COST_REVENUE"];  ?></td>
				  <td><?php echo $row["GROUP_NAME"];  ?></td>
				  <td><?php echo $row["ACCOUNT"];  ?></td>
				  <td><?php echo $row["ACCOUNT_NUMBER"];  ?></td>
				  <td><?php echo $row["INVOICE_NUMBER"];  ?></td>
				  <td><?php echo $row["BILLED_TO_DATE"];  ?></td>
				  <td><?php echo $row["DUE_BY"];  ?></td>
				  <td><?php echo $row["PSN"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_1"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_2"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_3"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_4"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_5"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_6"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_7"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_8"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_9"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_10"];  ?></td>
				  <td><?php echo $row["COUNTRY"];  ?></td>
				  <td><?php echo $row["CITY_ STATE"];  ?></td>
				  <td><?php echo $row["A SITE ADDRESS"];  ?></td>
				  <td><?php echo $row["Z SITE ADDRESS"];  ?></td>
				  </tr>
			
			<?php
			 }
			 ?>      
        </tbody>
       <!-- <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>-->
    </table>
		
				
	
	

</body>

</html>
