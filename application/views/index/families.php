<!-- views/index/home.php  -->
<div id="page-content-wrapper">
    <div class="container-fluid">
    <div class="row">
    	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
    		<h1><i><b>Families</b></i></h1>    
    	</div>
    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
          <form method="POST">
        		<div class="input-group doc-search">
  	            <input type="text" class="form-control" name="search_key" placeholder="Search">
  	            <div class="input-group-btn">
  	              <button class="btn btn-default" type="submit">
  	                <i class="glyphicon glyphicon-search"></i>
  	              </button>
  	            </div>
  	        </div>
          </form>
    	</div>
    </div>
    <div class="panel-group profile-document" id="accordion">
        <div class="profile-document-heading">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <form method="POST">
                <input type="hidden" name="search_key" value="<?= $search ?>">
                <input type="hidden" name="sort" value="name">
                <input type="hidden" name="sort_direction" value="<?php
                  if ($sort == 'name') {
                    echo $sort_direction;
                  }else{
                    echo 'asc';
                  }
                ?>">
                <input type="submit" value="FAMILIE" >
              </form>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <form method="POST">
                <input type="hidden" name="search_key" value="<?= $search ?>">
                <input type="hidden" name="sort" value="aupair_name">
                <input type="hidden" name="sort_direction" value="<?php
                  if ($sort == 'aupair_name') {
                    echo $sort_direction;
                  }else{
                    echo 'asc';
                  }
                ?>">
                <input type="submit" value="GEKOPPELD AAN" >
              </form>
            </div>    
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <form method="POST">
                <input type="hidden" name="search_key" value="<?= $search ?>">
                <input type="hidden" name="sort" value="status">
                <input type="hidden" name="sort_direction" value="<?php
                  if ($sort == 'status') {
                    echo $sort_direction;
                  }else{
                    echo 'asc';
                  }
                ?>">
                <input type="submit" value="STATUS" >
              </form>
            </div>  
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 last" style="background-image: none; height: 50px;" >&nbsp;</div>
        </div>
        <?php if($families != null) { ?>
	        <?php foreach ($families as $key => $family) { ?>
	           <div class="panel panel-default">
              <div class="panel-heading">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$key ?>">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    	<img src="<?= base_url('assets/img/users-white.png');?>" width=25 > &nbsp;&nbsp;FAMILIE DE <?= strtoupper($family['name']) ?>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    	<img src="<?= base_url('assets/img/user-femal1.png') ?>" width=25> &nbsp;&nbsp;<?= strtoupper($family['aupair_name']) ?></div>    
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"><?= strtoupper($family['status']) ?></div>  
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">&nbsp;</div>                    
                  </a>          
              </div>
              <div id="collapse<?=$key ?>" class="panel-collapse collapse">
                <div class="panel-body">
                	<?php 
                		$param = urlencode(serialize(array('family', $family['id'])));
                	 ?>	
                  <a href='<?= base_url("index/profile/1/$param") ?>' class="btn next-button">PROFILE</a>
                  <a href='<?= base_url("index/profile/4/$param") ?>' class="btn next-button">DOCUMENTEN</a>
                  <a href='<?= base_url("index/profile/5/$param") ?>' class="btn next-button ">REPORT</a>
                </div>
              </div>
            </div>

	        <?php } ?>

        <?php }else{ ?>

          <h4>No result...</h4>
        
        <?php } ?>
    </div>
    </div>
</div>