	
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
						
	<div class="row" style="margin-top: 10px;">
    <div class="col-sm-12">
        <div class="card mb-0">					
            <div class="card-header">
                <h4 class="card-title mb-0"> Employees Locations (<span style="color:red"><?php echo $locations['list'][0]['mxemp_emp_fname'].' - '.$locations['list'][0]['attendance_date'] ?></span>)</h4>
            </div>
            <div class="card-body">	
                <div class="table-responsive"  id="map" style="width: 100%; height: 400px;">
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="table-responsive">
<table class="datatable table table-stripped mb-0"  id="dataTables-example">
<thead>
	<tr>
		<th>#</th>
		<th>Attendance Date</th>
		<th>Punch Time</th>
		<th>Type</th>
		<th>Employee Code</th>
		<th>Employee Name</th>
		<th>Company</th>
		<th>Division</th>
		<th>State</th>
		<th>Branch</th>
		<th>lattitue</th>
		<th>longitude</th>
		<th>location</th>
		<th>is location</th>
		<th>Distance</th>
	</tr>
</thead>
<tbody>
    <?php $sno = 1; for($i=0; $i< count($locations['list']); $i++){ ?>
	<tr>
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
	            #echo distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
                echo distance($latt1, $long1, $latt2, $long2, "K") . " Km<br>";
                #echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";
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
