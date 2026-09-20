<!-- Search Filter -->
<?php $controller->commonFilters(array(
    'fromdatefilter' => 'Y',
    'todatefilter' => 'Y',
    'FormId' => 'dailybackupsId',
    'CallFunction' => 'dailybackupslist'
)); ?>
<!-- Search Filter -->
<hr>
<a href="<?php echo base_url('Developertools/take_database_backup'); ?>"
   target="_blank"
   class="btn btn-primary"
   onclick="return confirm('Are you sure you want to take a new database backup?');">
    <i class="fa fa-database"></i>
    Take Backup
</a>
<!-- /Page Content -->
</div>