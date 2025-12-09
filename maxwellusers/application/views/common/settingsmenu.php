<div class="col-md-4 col-lg-3">
    <div class="card settings-menu">
        <div class="sidebar-menu">
            <ul>
                <li class="menu-title">Settings</li>
                <?php
                foreach ($innermenu as $key => $value) { 
                    if($functionName == $value['functionaccess']){
                        $active = "active";
                    }else{
                        $active = "";
                    }
                    ?>
                <li class="<?php echo $active ?>"> 
                    <a href="<?php echo base_url() .$value['functionaccess']?>"><i class="<?php echo $value['icon'] ?>"></i> <span><?php echo $value['displayname'] ?></span></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>