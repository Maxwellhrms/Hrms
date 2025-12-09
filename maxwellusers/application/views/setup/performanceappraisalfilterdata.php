<?php 
//echo "hi123";die;
//print_r(count($attnd));die;
if(count($attnd) == 0){
    echo '<center><h4>NO FILES ADDED</h4></center>'; exit();
} ?>
<?php 
$thumb = array(
	'pdf' => 'fa fa-file-pdf-o',
	'docx' => 'fa fa-file-word-o',
	'png' => 'fa fa-file-image-o',
	'xls' => 'fa fa-file-excel-o',
	'ppt' => 'fa fa-file-powerpoint-o',
	'mp3' => 'fa fa-file-audio-o',
	'psd' => 'fa fa-file-image-o',
	'txt' => 'fa fa-file-text-o',
	'mp4' => 'fa fa-file-video-o',
	'html' => 'fa fa-file-code-o',
	'xlsx' => 'fa fa-file-excel-o',
	'pptx' => 'fa fa-file-powerpoint-o',
);
?>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Bootstrap 4 JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
td .dropdown {
  display: flex;
  justify-content: center;
}
td .fa-ellipsis-v {
  cursor: pointer;
}

</style>

<div class="file-body">
	<div class="file-scroll">
		<div class="file-content-inner">
			<?php 
			if(count($attnd) > 0){
				
				if(count($attnd) > 4){
					$count = 4;
				}else{
					$count = count($attnd);
				}
			 ?>
			<h4>Recent Files</h4>
			<div class="row row-sm">
				<?php for ($i=0; $i < $count; $i++) { ?>
				<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
					<div class="card card-file">
						<!--<div class="dropdown-file">
							<a class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="<?php //echo base_url() . $attnd[$i]['mxapfile_link'] ?>" target="_blank" class="dropdown-item">Download</a>
								<a class="dropdown-item" onclick="deletefiles('<?php //echo $attnd[$i]['mxapfile_id']; ?>')" >Delete</a> 
							</div>
						</div>-->
						<div class="dropdown">
      <a href="#" class="text-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-ellipsis-v"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <!--<a class="dropdown-item" href="#">View</a>
        <a class="dropdown-item" href="#">Edit</a>
        <a class="dropdown-item text-danger" href="#">Delete</a>-->
		<a href="<?php echo base_url() . $attnd[$i]['mxapfile_link'] ?>" target="_blank" class="dropdown-item">Download</a>
		<a class="dropdown-item" onclick="deletefiles('<?php echo $attnd[$i]['mxapfile_id']; ?>')" >Delete</a>
      </div>
    </div>

						<div class="card-file-thumb">
							<?php if(array_key_exists($attnd[$i]['mxapfile_extension'], $thumb)){ ?>
							<i class="<?php echo $thumb[$attnd[$i]['mxapfile_extension']]; ?>"></i>
							<?php } ?>
						</div>
						<div class="card-body">
							<h6><a><?php echo $attnd[$i]['mxapfile_name'] .'.'. $attnd[$i]['mxapfile_extension']  ?></a></h6>
							<span><?php echo $attnd[$i]['mxapfile_size'] ?></span>
						</div>
						<div class="card-footer"><?php 
						echo $attnd[$i]['mxapfile_createdtime'];
						//echo time_elapsed_string($attnd[$i]['mxapfile_createdtime']); ?></div>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>

<?php if(count($attnd) > 4){ ?>
			<h4>Files</h4>
			<div class="row row-sm">
				<?php for ($i=4; $i < count($attnd); $i++) { ?>
				<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
					<div class="card card-file">
						<!--<div class="dropdown-file">
							<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="<?php echo base_url() . $attnd[$i]['mxapfile_link'] ?>" target="_blank" class="dropdown-item">Download</a>
								<a class="dropdown-item" onclick="deletefiles('<?php echo $attnd[$i]['mxapfile_id']; ?>')" >Delete</a> 
							</div>
						</div>-->
						<div class="dropdown">
      <a href="#" class="text-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-ellipsis-v"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <!--<a class="dropdown-item" href="#">View</a>
        <a class="dropdown-item" href="#">Edit</a>
        <a class="dropdown-item text-danger" href="#">Delete</a>-->
		<a href="<?php echo base_url() . $attnd[$i]['mxapfile_link'] ?>" target="_blank" class="dropdown-item">Download</a>
		<a class="dropdown-item" onclick="deletefiles('<?php echo $attnd[$i]['mxapfile_id']; ?>')" >Delete</a>
      </div>
    </div>
						<div class="card-file-thumb">
							<?php if(array_key_exists($attnd[$i]['mxapfile_extension'], $thumb)){ ?>
							<i class="<?php echo $thumb[$attnd[$i]['mxapfile_extension']]; ?>"></i>
							<?php } ?>
						</div>
						<div class="card-body">
							<h6><a><?php echo $attnd[$i]['mxapfile_name'] .'.'. $attnd[$i]['mxapfile_extension']  ?></a></h6>
							<span><?php echo $attnd[$i]['mxapfile_size'] ?></span>
						</div>
						<div class="card-footer"><?php 
						echo $attnd[$i]['mxapfile_createdtime'];
						//echo time_elapsed_string($attnd[$i]['mxapfile_createdtime']); ?></div>
					</div>
				</div>
				<?php } ?>
			</div>
<?php } ?>
		</div>
	</div>
</div>

<?php  
/*function time_elapsed_string($datetime) {
    if (empty($datetime)) {
        return 'Unknown date';
    }

    try {
        $now = new DateTime();
        $ago = new DateTime($datetime);
    } catch (Exception $e) {
        return 'Invalid date';
    }

    $diff = $now->diff($ago);

    // Direct access of properties
    if ($diff->y > 0) return $diff->y . ' year' . ($diff->y > 1 ? 's' : '') . ' ago';
    if ($diff->m > 0) return $diff->m . ' month' . ($diff->m > 1 ? 's' : '') . ' ago';
    if ($diff->d > 0) return $diff->d . ' day' . ($diff->d > 1 ? 's' : '') . ' ago';
    if ($diff->h > 0) return $diff->h . ' hour' . ($diff->h > 1 ? 's' : '') . ' ago';
    if ($diff->i > 0) return $diff->i . ' minute' . ($diff->i > 1 ? 's' : '') . ' ago';
    if ($diff->s > 0) return $diff->s . ' second' . ($diff->s > 1 ? 's' : '') . ' ago';

    return 'just now';
}*/

?>