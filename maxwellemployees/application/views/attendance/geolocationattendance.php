<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">
     <!-- Page Header -->
     <div class="page-header">
      <div class="row">
       <div class="col-sm-12">
        <h3 class="page-title"> <?php echo $title ;?>  </h3>
        <ul class="breadcrumb">
         <li class="breadcrumb-item"><a href="<?php echo base_url() ?>Employee/employeedashboard">Dashboard</a></li>
         <li class="breadcrumb-item active"> <?php echo $title ;?>  </li>
     </ul>
 </div>
</div>
</div>

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJYtjpYsINOHFzVyjv-sejN6tIHkoiHtg"> </script>
<div class="card-body"> 
    <div class="table-responsive"  id="map" style="width: 100%; height: 400px;">
    </div>
</div>

<div class="container-fluid">

    <div class="row">

        <?php $sno = 1; for($i = 0; $i < count($locations['list']); $i++){ ?>

            <div class="col-md-4 mb-4">

                <div class="card shadow-lg border-0 rounded-4">

                    <!-- Header -->
                    <div class="card-header bg-primary text-white rounded-top-4">

                        <div class="d-flex justify-content-between align-items-center">

                            <div>
                                <h5 class="mb-0">
                                    <?php echo $locations['list'][$i]['mxemp_emp_fname']; ?>
                                </h5>

                                <small>
                                    Employee Code :
                                    <?php echo $locations['list'][$i]['employee_code']; ?>
                                </small>
                            </div>

                            <!-- Toggle Button -->
                            <button class="btn btn-light btn-sm"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#employeeCard<?php echo $i; ?>"
                                    aria-expanded="false">

                                Open / Close

                            </button>

                        </div>

                    </div>

                    <!-- Collapse Start -->
                    <div class="collapse" id="employeeCard<?php echo $i; ?>">

                        <div class="card-body">

                            <div class="row">

                                <div class="col-6 mb-3">
                                    <strong>Attendance Date</strong><br>
                                    <?php echo $locations['list'][$i]['attendance_date']; ?>
                                </div>

                                <div class="col-6 mb-3">
                                    <strong>Punch Time</strong><br>
                                    <?php echo $locations['list'][$i]['attendance_time']; ?>
                                </div>

                                <div class="col-6 mb-3">
                                    <strong>Type</strong><br>
                                    <?php echo $locations['list'][$i]['entry_type']; ?>
                                </div>

                                <div class="col-6 mb-3">
                                    <strong>Company</strong><br>
                                    <?php echo $locations['list'][$i]['mxcp_name']; ?>
                                </div>

                                <div class="col-6 mb-3">
                                    <strong>Division</strong><br>
                                    <?php echo $locations['list'][$i]['mxd_name']; ?>
                                </div>

                                <div class="col-6 mb-3">
                                    <strong>State</strong><br>
                                    <?php echo $locations['list'][$i]['mxst_state']; ?>
                                </div>

                                <div class="col-6 mb-3">
                                    <strong>Branch</strong><br>
                                    <?php echo $locations['list'][$i]['mxb_name']; ?>
                                </div>

                                <div class="col-6 mb-3">
                                    <strong>Latitude</strong><br>
                                    <?php echo $locations['list'][$i]['latitudes']; ?>
                                </div>

                                <div class="col-6 mb-3">
                                    <strong>Longitude</strong><br>
                                    <?php echo $locations['list'][$i]['longitudes']; ?>
                                </div>

                                <div class="col-12 mb-3">
                                    <strong>Location</strong><br>
                                    <?php echo $locations['list'][$i]['location']; ?>
                                </div>

                                <div class="col-6 mb-3">
                                    <strong>Is Location</strong><br>
                                    <?php echo $locations['list'][$i]['islocation']; ?>
                                </div>

                                <div class="col-6 mb-3">
                                    <strong>Distance</strong><br>

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

                                    echo distance($latt1, $long1, $latt2, $long2, "K") . " Km";
                                    ?>

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- Collapse End -->

                </div>

            </div>

        <?php $sno++; } ?>

    </div>

</div>


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