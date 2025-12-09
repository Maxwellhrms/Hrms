	
	<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJYtjpYsINOHFzVyjv-sejN6tIHkoiHtg"> </script>	

	
		<!--<script  src="https://maps.googleapis.com/maps/api/js?key=<?php // $a=config('google_api_key'); echo $a[0];  ?>"> </script>	-->

			<!-- Page Wrapper -->
            <div class="page-wrapper">
				<div class="content container-fluid">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Geo Location Attendance</h3>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<button onclick="printTable()" style="padding: 8px 16px; background: #2b6cb0; color: white; border: none; border-radius: 5px;">Print</button>
						
	<div class="row" style="margin-top: 10px;">
    <div class="col-sm-12">
        <div class="card mb-0">					
            <div class="card-header">
                <h4 class="card-title mb-0"> Employees Locations (<span style="color:red"><?php echo $locations['list'][0]['mxemp_emp_fname'].' - '.$locations['list'][0]['attendance_date'] ?></span>)</h4>
            </div>
            <div class="card-body mapphiding">	
                <div class="table-responsive"  id="map" style="width: 100%; height: 400px;">
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="table-responsive1" style="overflow-x:auto;" >

    <table id="dataTables-example98" class="display nowrap" style="width:100%">
<thead>
	<tr>
		<th>#</th>
		<th width='5%' >Attendance Date</th>
		<th  width='5%' >Punch Time</th>
		<th  width='2%' >Type</th>
		<th  width='5%' >Employee Code</th>
		<th  width='5%' >Employee Name</th>
		<th  width='5%' >Company</th>
		<th  width='2%' >Division</th>
		<th  width='5%' >State</th>
		<th  width='2%' >Branch</th>
		<th  width='5%' >lattitue</th>
		<th  width='5%' >longitude</th>
		<th  width='5%' >location</th>
		<th  width='2%' >is location</th>
		<th  width='5%' >Distance</th>
		<th  width='5%' >Amount</th>
	</tr>
</thead>
<tbody>
    <?php $sno = 1; for($i=0; $i< count($locations['list']); $i++){ ?>
	<tr class='' style="">
	    <td><?php echo $sno; ?></td>
	    <td><?php echo $locations['list'][$i]['attendance_date']; ?></td>
	    <td><?php echo $locations['list'][$i]['attendance_time']; ?></td>
	    <td><?php echo $locations['list'][$i]['entry_type']; ?></td>
	    <td><?php echo $locations['list'][$i]['employee_code']; ?></td>
	    <td><?php echo $locations['list'][$i]['mxemp_emp_fname']; ?></td>
	    <td><?php echo $locations['list'][$i]['mxcp_name']; ?></td>
	    <td><?php echo $locations['list'][$i]['mxd_name']; ?></td>
	    <td><?php echo $locations['list'][$i]['mxst_state']; ?></td>
	    <td><?php echo $locations['list'][$i]['mxb_name']; ?></td>
	    <td><?php echo $locations['list'][$i]['latitudes']; ?></td>
	    <td><?php echo $locations['list'][$i]['longitudes']; ?></td>
	    <td><?php echo $locations['list'][$i]['location']; ?></td>
	    <td><?php echo $locations['list'][$i]['islocation']; ?></td>
	    <td>
	        <?php
	        if($i == 0){
	            $latt1 = $locations['list'][$i]['latitudes'];
	            $long1 = $locations['list'][$i]['longitudes'];
	            $latt2 = '';
	            $long2 = '';
	        }else{
	            $latt1 = $locations['list'][$i-1]['latitudes'];
	            $long1 = $locations['list'][$i-1]['longitudes'];
	            $latt2 = $locations['list'][$i]['latitudes'];
	            $long2 = $locations['list'][$i]['longitudes'];
	        }
	        $kimis=0;
	            #echo distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
                $kimis = distance($latt1, $long1, $latt2, $long2, "K") ;
                echo $kimis. " Km<br>"
                #echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";
	        ?>
	    </td>
	    <td>
	        <?php
	       
	       $kimis_amount=($kimis*(3.33));
                
                echo $kimis_amount;
               
	        ?>
	    </td>
	</tr>
	<?php $sno++; } ?>
</tbody>
</table>
</div>

				</div>

			</div>
			<!-- /Page Wrapper -->





<?php
function distance($lat1, $lon1, $lat2, $lon2, $unit) {
  if ((($lat1 == $lat2) && ($lon1 == $lon2)) || (empty($lat2)) || (empty($lon2))) {
    return 0;
  }
  else {
    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    $unit = strtoupper($unit);

    if ($unit == "K") {
      return round(($miles * 1.609344),2);
    } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
      return $miles;
    }
  }
}
if(count($locations['lc'])>0){ ?>

<script type="text/javascript">

var locations = <?php  echo json_encode($locations['lc']) ?>;

var map = new google.maps.Map(document.getElementById('map'), {
zoom: 12,
center: new google.maps.LatLng(locations[0][1], locations[0][2]),
mapTypeId: google.maps.MapTypeId.ROADMAP
});

var infowindow = new google.maps.InfoWindow();

var marker, i;
    for (i = 0; i < locations.length; i++) {  
        marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
        });
        
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
        infowindow.setContent(locations[i][0]+"<br/><span style='color:red;font-size: 1.175em'>"+locations[i][4]+' '+locations[i][5]+"</span>");
        infowindow.open(map, marker);
        }
        })(marker, i));
    }
    
    // google.setOnLoadCallback(initialize);

    // var esi_company_id =1;

    
    // $('#esi_company_id').val(esi_company_id).trigger("change");


</script>
<?php } ?>


<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<!-- Buttons extension CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

<!-- DataTables JS (MUST come before buttons!) -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


<!-- Buttons extension JS and dependencies -->
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.min.js"></script>

<script>
//document.querySelector('tr.odd').removeAttribute('style');
//$('tr').show();
//document.querySelectorAll("tr").forEach(function(row) {
    //row.style.display = ""; // or "table-row"
//});
//$('#dataTables-example').DataTable().rows().every(function() {
  //$(this.node()).show();
//});

 /*$(document).ready(function() {
          $('#dataTables-example98').DataTable(
		  paging: true,
        searching: true,
        ordering: true,
        info: true
		  );
        } );*/
		 
        /*var table = $('#dataTables-example98').DataTable({
            dom: 'Bfrtip',
            "destroy": true, //use for reinitialize datatable
            lengthChange: false,
            buttons: [
                { extend: 'excelHtml5', footer: true },
                { extend: 'csvHtml5', footer: true },
            ],
        });*/
</script>
<script>
/*$(document).ready(function() {
    if (!$.fn.DataTable.isDataTable('#dataTables-example98')) {
        $('#dataTables-example98').DataTable({
            paging: false,
            searching: false,
            ordering: false,
            info: false,
            destroy: true
        });
    }
	$('#dataTables-example98 tbody tr').css('display', 'table-row');
});
*/



$(document).ready(function () {
    if (!$.fn.DataTable.isDataTable('#dataTables-example98')) {
        $('#dataTables-example98').DataTable({
            dom: 'Bfrtip',
            buttons: ['excelHtml5', 'pdfHtml5', 'print', 'colvis']
        });
    }
    //$('#dataTables-example98 tbody tr').css('display', 'block');
});




/*$(document).ready(function() {
    if (!$.fn.DataTable.isDataTable('#dataTables-example98')) {
        $('#dataTables-example98').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excelHtml5',
                'pdfHtml5',
                'print',
                'colvis'
            ]
        });
    }

    $('#dataTables-example98 tbody tr').css('display', 'table-row');
});*/


/*setTimeout(function () {
        console.log("Function ran once after page load.");
        // Your code goes here
		$(".mapphiding").css("display","none");
      }, 2000);*/
</script>

<?php 
$employeeid=$_REQUEST['employeeid'];
$employeecode = $this->session->userdata('session_loginperson_id');
if($employeeid==$employeecode)
{
	?>
	<script>
	setTimeout(function () {
        console.log("Function ran once after page load.");
        // Your code goes here
		$(".mapphiding").css("display","none");
      }, 500);
</script>
	
	<?php
	
}

?>

 

 






