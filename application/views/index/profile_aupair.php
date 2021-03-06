<!-- views/index/profile.php  -->
<?php
		$li_class = array();
		$li_class['first']  = '';
		$li_class['second'] = '';
		$li_class['third']  = '';
    $li_class['forth']  = '';
    $li_class['fifth']  = '';
		switch ($tab) {
			case 1:
				$li_class['first'] = 'active';
				break;
			case 2:
				$li_class['second'] = 'active';
				break;
			case 3:
				$li_class['third'] = 'active';
				break;
      case 4:
        $li_class['forth'] = 'active';
        break;					
      case 5:
        $li_class['fifth'] = 'active';
        break;
			default:
				$li_class['first'] = 'active';
				break;
		}
?>
<div id="page-content-wrapper">
    <div class="container-fluid">
      <ul class="nav nav-tabs nav-tabs-responsive profile-tab" role="tablist">
        <li role="presentation" class="<?php echo $li_class['first']; ?>">
          <a href="<?= base_url('index/profile/1/'.$param)?>" >
            <span class="text">General</span>
          </a>
        </li>
        <li role="presentation" class="next <?php echo $li_class['second']; ?>">
          <a href="<?= base_url('index/profile/2/'.$param)?>" >
            <span class="text">Experience</span>
          </a>
        </li>
        <?php if($this->aauth->is_member(6)){ ?>
        <li role="presentation" class="<?php echo $li_class['forth']; ?>">
          <a href="<?= base_url('index/profile/4/'.$param)?>" >
            <span class="text">Interview & Tests</span>
          </a>
        </li>
        <?php } ?>
        <li role="presentation" class="<?php echo $li_class['third']; ?>">
          <a href="<?= base_url('index/profile/3/'.$param)?>" >
            <span class="text">Documents</span>
          </a>
        </li>
        <?php if($this->aauth->is_member(6)){ ?>
        <li role="presentation" class="<?php echo $li_class['fifth']; ?>">
          <a href="<?= base_url('index/profile/5/'.$param)?>" >
            <span class="text">Report</span>
          </a>
        </li>
       <?php } ?>
      </ul>
      <div class="tab-content profile-tab-content">
        <div role="tabpanel" class="tab-pane <?php echo $li_class['first']; ?>" id="general">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><h1><b><?php echo $aupair['full_name']; ?></b></h1></div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <a href="<?php echo base_url('index/edit_profile/1/').$param; ?>">
                <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Age </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                  <?php if($aupair['age']){echo $aupair['age'];}else{echo generate_age($aupair['date_of_birth']);} ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Nationality </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['nationality']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Date of birth </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['date_of_birth']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Email address </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['email']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Phone number </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['phone']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Skype name </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['skype']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Relationship status* </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['relationship_status']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Children* </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['children']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Current Occupation </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['current_job']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Have you been an Au-pair before? </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['aupair_experience']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Highest level of education completed </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['education']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Length (in centimetres) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['height']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Weight (in Kilograms) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['weight']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Are you mentally in good metal and have you been in the past?
(if not, please explain) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['mental_condition']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Are you physically in good health and have you been in the past?
(if not, please explain) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['physical_condition']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Are there any (mental or physical) health problems in your family? </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['condition_family']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Do you have allergies? </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['allergies']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Special Diet* </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['diet']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Do you smoke? </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['smoker']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Do you take medicine or have you taken medicine in the past?* </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['medicine']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Do you have a tattoo? * (if so, please specify) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['tattoos']; ?></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Do you have any piercings? * (if so, please specify) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7"><?php echo $aupair['piercings']; ?></div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8">

                <div id="photoCarousel" class="carousel slide" data-ride="carousel">  
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="<?php if($aupair['photo1']){ echo base_url('files/photos/'.$aupair['photo1']); }else{ echo base_url('assets/img/aupair.jpg'); } ?>" class="img-responsive">
                    </div>

                    <div class="item">
                      <img src="<?php if($aupair['photo2']){ echo base_url('files/photos/'.$aupair['photo2']); }else{ echo base_url('assets/img/aupair.jpg'); } ?>" class="img-responsive">
                    </div>

                    <div class="item">
                      <img src="<?php if($aupair['photo3']){ echo base_url('files/photos/'.$aupair['photo3']); }else{ echo base_url('assets/img/aupair.jpg'); } ?>" class="img-responsive">
                    </div>

                    <div class="item">
                      <img src="<?php if($aupair['photo4']){ echo base_url('files/photos/'.$aupair['photo4']); }else{ echo base_url('assets/img/aupair.jpg'); } ?>" class="img-responsive">
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#photoCarousel" role="button" data-slide="prev">
                  </a>
                  <a class="right carousel-control" href="#photoCarousel" role="button" data-slide="next">              
                  </a>
                </div>                
                  
                </div>
              </div>
              <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><h1><b>Hi, I'm <?php echo $aupair['full_name']; ?></b></h1></div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <a href="<?php echo base_url('index/edit_profile/1/').$param; ?>">
                <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>                                
              </div>
              <div class="row"><p class="profile-description"><?php echo $aupair['overview']; ?></p></div>
            </div>
          </div>
          <div>
            <a href="<?= base_url('index/profile/2/').$param ?>" class="btn next-button"> Experience </a>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane <?php echo $li_class['second']; ?>" id="experience">
          <div class="row">
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><h1><b><?php echo $aupair['full_name']; ?></b></h1></div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <a href="<?php echo base_url('index/edit_profile/2/').$param; ?>">
            <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">English level (spoken)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['english_level']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Other languages *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['other_languages']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Biking experience *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['biking_experience']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Drivers license *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['drivers_license']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">- tickets:</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['tickets']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Cooking level *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['cooking_level']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">First aid *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['first_aid']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Can you swim? *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['swimming']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Which school and university did you attend? (please explain in detail)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['school_university']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">What was your major and date of graduation?</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['major']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Former jobs and responsibilities (Please describe all jobs in detail: when started, finished, position and tasks and responsibilities)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['former_jobs']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Age of children you took care of (siblings or family members as well)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['kids_age']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Amount of time you took care of these kids (week/months/years) + frequency</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['kids_time']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">How much experience do you have with babies? * (0-2 years old)?</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['experience_babies']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">How much experience do you have with toddlers? * (2 – 4 years old)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['experience_toddlers']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">How much experience do you have with older kids? * (4 years and older)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['experience_kids']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">How many kids did you watch/ take care of at the same time? *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['kids_sametime']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Do you have experience with disabled children?</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['experience_disability']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Are there things you are not willing to do? (related to children)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['not_willing']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">What do you like the most about children?</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['most_liked']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">What do you find a challenging aspect of working with children?</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['most_challenging']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">What are your favourite activities with children?
(divide the activities by age group: 0-2/2-4/4-8/8-12 and be specific)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['favourite_activities']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Do you have experience with these household tasks? * (can be experience in your own home)
</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['experience_household']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Do you (used to) have personnel in your own house? *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['personnel']; ?></div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Extra information / comments:</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><?php echo $aupair['extra_info']; ?></div>
          </div>
        </div>
<!-- start document tab -->

        <div role="tabpanel" class="tab-pane <?php echo $li_class['third']; ?>" id="document">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-9">
            <h1 class="profile-caption"><b><?php echo $aupair['full_name']; ?></b></h1></div>
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-3">
              <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                  <a href="#" class="add-doc" data-toggle="modal" data-target="#addDocModal">&plus;</a>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                  <form method="POST">
                    <div class="input-group doc-search">
                        <input type="text" class="form-control" name="search_key" placeholder="Search" >
                        <div class="input-group-btn">
                          <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>
                    </div>
                  </form>
                </div>
              </div>              
            </div>            
          </div>
          
          <div class="panel-group profile-document" id="accordion">
            <div class="profile-document-heading">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <form method="POST">
                    <input type="hidden" name="search_key" value="<?= $search ?>">
                    <input type="hidden" name="sort" value="title">
                    <input type="hidden" name="sort_direction" value="<?php
                      if ($sort == 'title') {
                        echo $sort_direction;
                      }else{
                        echo 'asc';
                      }
                    ?>">
                    <input type="submit" value="Document" >
                  </form>                  
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <form method="POST">
                    <input type="hidden" name="search_key" value="<?= $search ?>">
                    <input type="hidden" name="sort" value="uploader">
                    <input type="hidden" name="sort_direction" value="<?php
                      if ($sort == 'uploader') {
                        echo $sort_direction;
                      }else{
                        echo 'asc';
                      }
                    ?>">
                    <input type="submit" value="Uploaded by" >
                  </form>                  
                </div>    
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <form method="POST">
                    <input type="hidden" name="search_key" value="<?= $search ?>">
                    <input type="hidden" name="sort" value="upload_date">
                    <input type="hidden" name="sort_direction" value="<?php
                      if ($sort == 'upload_date') {
                        echo $sort_direction;
                      }else{
                        echo 'asc';
                      }
                    ?>">
                    <input type="submit" value="Uploaded date" >
                  </form>
                </div>  
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 last">
                  <form method="POST">
                    <input type="hidden" name="search_key" value="<?= $search ?>">
                    <input type="hidden" name="sort" value="approved_date">
                    <input type="hidden" name="sort_direction" value="<?php
                      if ($sort == 'approved_date') {
                        echo $sort_direction;
                      }else{
                        echo 'asc';
                      }
                    ?>">
                    <input type="submit" value="Approval date" >
                  </form>                  
                </div>
            </div>
            <?php if($documents != null) {?>
            <?php foreach ($documents as $key => $document) { ?>
            <div class="panel panel-default">
              <div class="panel-heading doc-<?= $document['status'] ?>">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$key ?>">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"><?= ucfirst($document['title']) ?></div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"><?= $document['uploader'] ?></div>    
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"><?= $document['upload_date'] ?></div>  
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"><?= $document['approved_date'] ?></div>                    
                  </a>          
              </div>
              <div id="collapse<?=$key ?>" class="panel-collapse collapse">
                <div class="panel-body">
                  <a href="#" class="btn next-button <?= $document['status'] ?>-button"><?= ucfirst($document['status']) ?></a>
                  <a href="<?= base_url('files/'.$document['name']) ?>" target="_blank" class="btn next-button">Download</a>
                  <a href="#" class="btn next-button" data-toggle="modal" data-target="#newVersionDocModal<?= $document['id']?>">New version</a>
                  <a href="#" data-id="<?= $document['id']?>" class="btn next-button delete-button">Delete</a>
                  <?php if($this->aauth->is_member(6)&&($document['status'] != 'approved')) { ?>
                    <a href="#" data-id="<?= $document['id']?>" class="btn next-button approve-button">Approve</a>
                  <?php } ?>
                </div>
              </div>
            </div>

            <div id="newVersionDocModal<?= $document['id']?>" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New Version Document</h4>
                  </div>
                  <form class="uploadForm" action="<?= base_url('document/update/'.$document['id'].'/3') ?>" method="post" enctype="multipart/form-data">  
                    <div class="modal-body">
                      <div class="alert alert-success upload-success">
                        <strong>Success!</strong> The document was successfully uploaded.
                      </div>
                      <div class="alert alert-danger upload-error">
                        <strong>Opp!</strong> There are some errors to upload the document.
                      </div>
                      <div class="form-group">
                        <label>Document file:</label>
                        <input type="file" name="doc_file" autocomplete='off'>
                      </div>
                      <div class="progress upload-progress">
                        <div class="progress-bar progress-bar-striped active progress-status" role="progressbar" aria-valuemin="0" aria-valuemax="100" >
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn">Add document</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>

           <?php 
              } 
             }else{
           ?>
           <div> No document... </div>
           <?php } ?>

          </div>
        </div>
<!-- end docuemtn tab -->

      <div role="tabpanel" class="tab-pane <?php echo $li_class['forth']; ?>" id="interview">
        <div class="row">
          <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><h1><b><?php echo $aupair['full_name']; ?></b></h1></div>
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
          <a href="<?php echo base_url('index/edit_profile/4/').$param; ?>">
          <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
        </div>    
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <h2><b>Interview Reports</b></h2><br>
            <img src="<?= base_url('assets/img/users.png') ?>" ><span class="sub-caption"> <?= $tests['tester'] ?></span><br><br>
            <p>
              <?= $tests['description'] ?>
            </p>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <?php if ($aupair['video']){?>
          <h2><b><i>Video</i></b></h2>
              <div class="embed-responsive embed-responsive-4by3">

                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= substr($aupair['video'], strripos($aupair['video'], '/')) ?>"></iframe>
              </div>
          <?php }?>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 test-result" >
            <h2><b>Test results</b></h2>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"></div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7">
                <div class="row" style="text-align: center;">
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><h3><i>1</i></h3></div>
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><h3><i>2</i></h3></div>
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><h3><i>3</i></h3></div>
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><h3><i>4</i></h3></div>
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><h3><i>5</i></h3></div>
                </div>
              </div>
            </div>
            <?php foreach ($tests as $key => $test) { 
              if (($key != 'id')&&($key != 'aupair_id')&&($key != 'description')&&($key != 'tester')) { ?>
              <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-4 col-lg-3"><b><?= $key ?></b></div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7">
                  <input type="range" value="<?= $test ?>" min="0" max="5" disabled>
                </div>              
              </div>         
            <?php
              }
             }
            ?>            
          </div>          
        </div>
      </div>
<!-- end interview tab -->
      <div role="tabpanel" class="tab-pane <?php echo $li_class['fifth']; ?>" id="report">         
        <div class="row">
          <div class="col-xs-9 col-sm-9 col-md-7 col-lg-7">
            <h1><b><?php echo $aupair['full_name']; ?></b></h1><br>
            <b>Au-pair status</b><br>
            <b class="text-primary"><?= $aupair['status'] ?></b>
            <br>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">V-number</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 answer"><?= $aupair['id'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Email HBN</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 answer"><?= $aupair['email'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Skypename</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 answer"><?= $aupair['skype'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Mobiel nr. moeder</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 answer"><?= $aupair['phone'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Au-Pair Eigenaar</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 answer">SUPPORT TEAM HBN</div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Date of birth</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 answer"><?= $aupair['date_of_birth'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Country of origin</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 answer"><?= $aupair['nationality'] ?></div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Month startdate</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 answer"><?= $aupair['start_date'] ?></div>
            </div>
          </div>
          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            <a href="<?php echo base_url('index/edit_profile/5/').$param; ?>">
                <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'>
            </a>
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <!-- <a href="#" class="btn next-button">PROFIEL FAMILIE</a> -->
          </div>
        </div>

        <h2>Auto filled Sections</h2>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3>Step1: </h3>
          </div>
          <?php foreach ($reports as $key => $report) { 
            if (($key != 'id') && ($key != 'aupair_id')) {            
            ?>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b><?= str_replace('_', ' ', $key) ?></b></div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 answer">
                  <?php if(($report == '0') || ($report == '1')){ ?>
                    <img src="<?=base_url('assets/img/visa-check-approved.png')?>" width="30" class="null<?= $report ?>">
                  <?php }elseif(($report == '0000-00-00')||($report == '0000-00-00 00:00:00')) { ?>
                    DNF
                  <?php }else{ echo $report; } ?>
                </div>
              </div>
            </div>
            <?php if ($key == 'Video_uploaded') { ?>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Step 2: </h3>
              </div>
            <?php }
             if ($key == 'Interview_with_agent_scheduled') { ?>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Step 3: </h3>
              </div>
            <?php } 
             if ($key == 'Translation_uploaded') { ?>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Step 4: </h3>
              </div>
            <?php } 
            if ($key == 'Payment_confirmed') { ?>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Step 5: </h3>
              </div>
            <?php } 
            if ($key == 'Visa_uploaded') { ?>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Step 6: </h3>
              </div>
            <?php } 
            if ($key == 'Au-pair_manual_downloaded') { ?>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Step 7: </h3>
              </div>
            <?php } 
            if ($key == 'TB_test_confirmed') { ?>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Step 8: </h3>
              </div>
            <?php } 
            if ($key == 'Evaluation_5_finished') { ?>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Step 9: </h3>
              </div>
            <?php } ?>
          <?php 
              }
            }
          ?>          
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <h3><i>NOTITIES</i></h3>            
              <div class="alert alert-success upload-success">
                <strong>Success!</strong> The notity was successfully saved.
              </div>
              <div class="alert alert-danger upload-error">
                <strong>Opp!</strong> There are some errors to save the notity.
              </div>
              <form action="<?= base_url('notities/insert') ?>" class="notity-form uploadForm" method="POST">
                <input type="hidden" name="user_id" value="<?= $this->aauth->get_user_id($aupair['email']) ?>">
                <input type="text" name="notity_title" class="form-control" placeholder="Notity title" required>
                <textarea name="notity_content" class="form-control" placeholder="Notity content" rows="5" required></textarea>
                <input type="file" name="notity_file" >
                <div class="progress upload-progress">
                  <div class="progress-bar progress-bar-striped active progress-status" role="progressbar" aria-valuemin="0" aria-valuemax="100" >
                  </div>
                </div>
                <input type="reset" name="" class="btn btn-warning btn-sm" value="Annuleren">
                <input type="submit" name="" class="btn btn-primary btn-sm" value="Opslaan">
              </form>
              <br>
              <?php
                foreach ($notities as $key => $notity) {
                  ?>
                  <div class="notity">
                    <div style="width: 5%; padding-right: 10px;">
                      <img src="<?= base_url('assets/img/login_logo.jpg') ?>" width="100%">
                    </div>
                    <div>
                      <h5><?= $notity['title'] ?></h5>
                      <p><?= $notity['content'] ?></p>
                      <span class="notity-gray-text"> Au-pair - </span>
                      <span class="notity-user"><?= $aupair['full_name'] ?></span>
                      <span class="notity-gray-text">
                       &#183; <span class=" glyphicon glyphicon-time"></span> <?= $notity['created_date'] ?>
                      </span>
                      <?php if($notity['attachment']){ ?>
                        <br>
                        <span class="notity-gray-text"><span class="glyphicon glyphicon-paperclip"></span>
                        <a href="<?= base_url('files/'.$notity['attachment']) ?>" target="_blank" ><?= $notity['attachment'] ?></a></span>
                      <?php } ?>
                      <br><br>
                      <span class="notity-gray-text"> - <?= $this->aauth->get_user()->name ?> - </span>
                    </div>
                    <div>
                      <a href="#" class="delete-noitity" data-id="<?= $notity['id'] ?>">
                        <span class="notity-gray-text glyphicon glyphicon-trash"></span>
                      </a>
                    </div>
                  </div>
                  <?php
                }
              ?>              
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <h3><i>TASKS</i></h3>
              <div class="alert alert-success upload-success">
                <strong>Success!</strong> The notity was successfully saved.
              </div>
              <div class="alert alert-danger upload-error">
                <strong>Opp!</strong> There are some errors to save the notity.
              </div>
              <form action="<?= base_url('tasks/insert') ?>" class="notity-form uploadForm" method="POST">
                <input type="hidden" name="user_id" value="<?= $this->aauth->get_user_id($aupair['email']) ?>">
                <input type="hidden" name="user_name" value="<?= $aupair['full_name'] ?>">
                <input type="text" name="task_title" class="form-control" placeholder="Task title" required>
                <div class="input-group schedule-date date">
                  <input type="text" class="form-control" name="task_deadline" placeholder="Task Deadline">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
                <div class="progress upload-progress">
                  <div class="progress-bar progress-bar-striped active progress-status" role="progressbar" aria-valuemin="0" aria-valuemax="100" >
                  </div>
                </div>
                <input type="reset" name="" class="btn btn-warning btn-sm" value="Annuleren">
                <input type="submit" name="" class="btn btn-primary btn-sm" value="Opslaan">
              </form>
              <br>
              <?php
                foreach ($tasks as $key => $task) {
                  ?>
                  <div class="notity">
                    <div style="width: 5%; padding-right: 10px;">
                      <img src="<?= base_url('assets/img/login_logo.jpg') ?>" width="100%">
                    </div>
                    <div>
                      <h5><?= $task['hbn_task'] ?>
                          <?php
                              if ($task['status'] == 'complete') {
                          ?>
                                  <span class="text-success glyphicon glyphicon-ok-sign"></span>
                          <?php
                              } 
                          ?>
                      </h5>
                      <h5><i class="glyphicon glyphicon-calendar"></i> 
                        <?php 
                          if($task['deadline'] != '0000-00-00'){
                            echo $task['deadline'];
                            }else{
                              echo "&#8734;";
                            } 
                        ?>
                      </h5>
                      <span class="notity-gray-text"> Au-pair - </span>
                      <span class="notity-user"><?= $task['user_name'] ?></span>
                      <span class="notity-gray-text">
                       &#183; <span class=" glyphicon glyphicon-time"></span> <?= $task['created_date'] ?>
                      </span>
                      <br><br>
                      <span class="notity-gray-text"> - <?= $this->aauth->get_user()->name ?> - </span>
                    </div>
                    <div>
                      <?php if ($task['status'] != 'complete') {  ?>
                            <a href="#" class="complete-task" data-id="<?= $task['id'] ?>">
                              <span class="notity-gray-text glyphicon glyphicon-ok"></span>
                            </a>&nbsp;|&nbsp;
                      <?php } ?>
                      <a href="#" class="delete-task" data-id="<?= $task['id'] ?>">
                        <span class="notity-gray-text glyphicon glyphicon-trash"></span>
                      </a>
                    </div>
                  </div>
                  <?php
                }
              ?>              
        </div>

      </div>

      </div>
<!-- end report tab -->
    </div>
    </div>
</div>


<div id="addDocModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Document</h4>
      </div>
      <form class="uploadForm" action="<?= base_url('document/insert') ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="user_id" value="<?= $this->aauth->get_user_id($aupair['email']) ?>">                 
        <div class="modal-body">
          <div class="alert alert-success upload-success">
            <strong>Success!</strong> The document was successfully uploaded.
          </div>
          <div class="alert alert-danger upload-error">
            <strong>Opp!</strong> There are some errors to upload the document.
          </div>
          <div class="form-group">
            <label>Document Title:</label>
            <input type="text" name="doc_title" class="form-control" autocomplete='off'>                              
          </div>
          <div class="form-group">
          <label>Document File:</label>
            <input type="file" name="doc_file" autocomplete='off'>
          </div>
          <div class="progress upload-progress">
            <div class="progress-bar progress-bar-striped active progress-status" role="progressbar" aria-valuemin="0" aria-valuemax="100" >
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn">Add document</button>
        </div>
      </form>
    </div>

  </div>
</div>
