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
    <div class="container-fluid profile-edit">
      <ul class="nav nav-tabs nav-tabs-responsive profile-tab" role="tablist">
        <li role="presentation" class="<?php echo $li_class['first']; ?>">
          <a href="<?= base_url('index/edit_profile/1/'.$param)?>">
            <span class="text">General</span>
          </a>
        </li>
        <li role="presentation" class="next <?php echo $li_class['second']; ?>">
          <a href="<?= base_url('index/edit_profile/2/'.$param)?>">
            <span class="text">Experience</span>
          </a>
        </li>
        <?php if($this->aauth->is_member(6)){ ?>
        <li role="presentation" class="<?php echo $li_class['forth']; ?>">
          <a href="<?= base_url('index/edit_profile/4/'.$param)?>" >
            <span class="text">Interview & Tests</span>
          </a>
        </li>
        <?php } ?>
        <li role="presentation" class="<?php echo $li_class['third']; ?>">
          <a href="<?= base_url('index/edit_profile/3/'.$param)?>">
            <span class="text">Documents</span>
          </a>
        </li>
        <?php if($this->aauth->is_member(6)){ ?>
        <li role="presentation" class="<?php echo $li_class['fifth']; ?>">
          <a href="<?= base_url('index/edit_profile/5/'.$param)?>" >
            <span class="text">Report</span>
          </a>
        </li>
       <?php } ?>
      </ul>
      <div class="tab-content profile-tab-content">
        <div role="tabpanel" class="tab-pane <?php echo $li_class['first']; ?>" id="general">
        <?php echo form_open('index/save_profile/1/'.$param); ?>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <input type="text" name="ap_full_name" class="form-control" value="<?php echo $aupair['full_name']; ?>"></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Age </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                  <input type="number" name="ap_age" class="form-control"
                  value="<?php if($aupair['age']){echo $aupair['age'];}else{echo generate_age($aupair['date_of_birth']);} ?>" ></div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Nationality </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <div class="form-control custom-select">
                      <select name="ap_nationality" value = "<?php echo $aupair['nationality']; ?>" >
                        <option>Dutch</option>
                        <option>Greek</option>
                        <option>Turkish</option>
                        <option>Spanish</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Date of birth </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                      <div class="input-group date">
                      <input type="text" class="form-control" name="ap_date_of_birth" value="<?php echo $aupair['date_of_birth']; ?>">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Email address </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="email" name="ap_email" class="form-control" value="<?php echo $aupair['email']; ?>">
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Phone number </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="number" name="ap_phone" class="form-control" value="<?php echo $aupair['phone']; ?>" >
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Skype name </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="ap_skype" class="form-control" value="<?php echo $aupair['skype']; ?>" >
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Relationship status* </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <div class="form-control custom-select">
                      <select name="ap_relationship_status" value="<?php echo $aupair['relationship_status']; ?>" >
                        <option>Single</option>
                        <option>In a relationship</option>
                        <option>Married</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Children* </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <div class="form-control custom-select">
                      <select name="ap_children" value="<?php echo $aupair['children']; ?>">
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Current Occupation </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="ap_current_job" class="form-control" value="<?php echo $aupair['current_job']; ?>" >
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Have you been an Au-pair before? </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <div class="form-control custom-select">
                      <select name="ap_aupair_experience" value="<?php echo $aupair['aupair_experience']; ?>">
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Highest level of education completed </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="ap_education" class="form-control" value="<?php echo $aupair['education']; ?>" >
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Length (in centimetres) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="number" name="ap_height" class="form-control" value="<?php echo $aupair['height']; ?>">
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Weight (in Kilograms) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="number" name="ap_weight" class="form-control" value="<?php echo $aupair['weight']; ?>" >
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                   Are you mentally in good metal and have you been in the past?(if not, please explain) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="ap_mental_condition" class="form-control" value="<?php echo $aupair['mental_condition']; ?>" >
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                   Are you physically in good health and have you been in the past?(if not, please explain) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="ap_physical_condition" class="form-control" value="<?php echo $aupair['physical_condition']; ?>" >
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                   Are there any (mental or physical) health problems in your family? </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <div class="form-control custom-select">
                      <select name="ap_condition_family" value="<?php echo $aupair['condition_family']; ?>">
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Do you have allergies? </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input type="text" name="ap_alergies" class="form-control" value="<?php echo $aupair['allergies']; ?>" >
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Special Diet* </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <textarea name="ap_diet" class="form-control">
                      <?php echo $aupair['diet']; ?>
                    </textarea>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Do you smoke? </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <div class="form-control custom-select">
                      <select name="ap_smoker" value="<?php echo $aupair['smoker']; ?>">
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Do you take medicine or have you taken medicine in the past?* </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <div class="form-control custom-select">
                      <select name="ap_medicine" value="<?php echo $aupair['medicine']; ?>">
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Do you have a tattoo? * (if so, please specify) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <input name="ap_tattoos" value="<?php echo $aupair['tattoos']; ?>" class="form-control">                        
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5"> Do you have any piercings? * (if so, please specify) </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <div class="form-control custom-select">
                      <select name="ap_piercings" value="<?php echo $aupair['piercings']; ?>">
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    </div>
                  </div>
              </div>  
              <div class="row">   
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">        
                <input type="submit" name="" class="btn next-button" value="Save general">     
                </div>         
              </div>
              </form>           
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="row photo-edit">

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <form action = "<?= base_url('index/save_profile/6/'.$param) ?>" class="dropzone dz-clickable" >
                    <div class="dz-default dz-message" 
                      <?php if ($aupair['photo1']) { ?>
                      style="background-image: url('<?= base_url('files/photos/'.$aupair['photo1']) ?>');"
                      <?php }?> 
                    ></div>
                  </form>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <form action = "<?= base_url('index/save_profile/7/'.$param) ?>" class="dropzone dz-clickable" >
                    <div class="dz-default dz-message" 
                      <?php if ($aupair['photo2']) { ?>
                      style="background-image: url('<?= base_url('files/photos/'.$aupair['photo2']) ?>');"
                      <?php }?> 
                    ></div>
                  </form>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <form action = "<?= base_url('index/save_profile/8/'.$param) ?>" class="dropzone dz-clickable" >
                    <div class="dz-default dz-message" 
                      <?php if ($aupair['photo3']) { ?>
                      style="background-image: url('<?= base_url('files/photos/'.$aupair['photo3']) ?>');"
                      <?php }?> 
                    ></div>
                  </form>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <form action = "<?= base_url('index/save_profile/9/'.$param) ?>" class="dropzone dz-clickable" >
                    <div class="dz-default dz-message" 
                      <?php if ($aupair['photo4']) { ?>
                      style="background-image: url('<?= base_url('files/photos/'.$aupair['photo4']) ?>');"
                      <?php }?> 
                    ></div>
                  </form>
                </div>

              </div>
              <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><h1><b>Hi, I'm <?php echo $aupair['full_name']; ?></b></h1></div>                 
              </div>
              <div class="row">
                <textarea class="form-control" rows="20" name="ap_overview"><?php echo $aupair['overview']; ?></textarea>
                <!-- <?php echo $aupair['overview']; ?> -->
              </div>
            </div>
          </div>
          
        </div>

        <div role="tabpanel" class="tab-pane <?php echo $li_class['second']; ?>" id="experience">
        <?php echo form_open('index/save_profile/2/'.$param); ?>
          <div class="row">
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <h1><b><?php echo $aupair['full_name']; ?></b></h1></div>            
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">English level (spoken)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <div class="form-control custom-select">
                <select name="ap_english_level" value="<?php echo $aupair['english_level']; ?>">
                  <option>5 - Excellent</option>
                  <option>4 - Good</option>
                  <option>3 - Average</option>
                  <option>2 - Poor</option>
                  <option>1 - Very poor</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Other languages *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <input type="text" name="ap_other_languages" class="form-control" value="<?php echo $aupair['other_languages']; ?>" >
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Biking experience *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <div class="form-control custom-select">
                <select name="ap_biking_experience" value="<?php echo $aupair['biking_experience']; ?>">
                  <option>5 - Excellent</option>
                  <option>4 - Good</option>
                  <option>3 - Average</option>
                  <option>2 - Poor</option>
                  <option>1 - Very poor</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Drivers license *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <input type="text" name="ap_drivers_license" class="form-control" value="<?php echo $aupair['drivers_license']; ?>" >
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">- tickets:</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <div class="form-control custom-select">
                <select name="ap_tickets" value="<?php echo $aupair['tickets']; ?>">
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Cooking level *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <div class="form-control custom-select">
                <select name="ap_cooking_level" value="<?php echo $aupair['cooking_level']; ?>">
                  <option>5 - Excellent</option>
                  <option>4 - Good</option>
                  <option>3 - Average</option>
                  <option>2 - Poor</option>
                  <option>1 - Very poor</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">First aid *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <div class="form-control custom-select">
                <select name="ap_first_aid" value="<?php echo $aupair['first_aid']; ?>">
                  <option>Yes</option>
                  <option>No, but I'm willing to take a first aid course when I'm in the Netherlands</option>
                  <option>No</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Can you swim? *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <div class="form-control custom-select">
                <select name="ap_swimming" value="<?php echo $aupair['swimming']; ?>">
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Which school and university did you attend? (please explain in detail)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <textarea class="form-control" name="ap_school_university">
                <?php echo $aupair['school_university']; ?>
              </textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">What was your major and date of graduation?</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <input type="text" name="ap_major" class="form-control" value="<?php echo $aupair['major']; ?>" >
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Former jobs and responsibilities (Please describe all jobs in detail: when started, finished, position and tasks and responsibilities)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <textarea class="form-control" name="ap_former_jobs">
                <?php echo $aupair['former_jobs']; ?>
              </textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Age of children you took care of (siblings or family members as well)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <textarea class="form-control" name="ap_kids_age">
                <?php echo $aupair['kids_age']; ?>
              </textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Amount of time you took care of these kids (week/months/years) + frequency</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <textarea class="form-control" name="ap_kids_time">
                <?php echo $aupair['kids_time']; ?>
              </textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">How much experience do you have with babies? * (0-2 years old)?</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <select name="ap_experience_babies[]" multiple="multiple" class="multiple-select" value="<?php echo $aupair['experience_babies']; ?>">
                <option>Feeding babies</option>
                <option>Bathing babies</option>
                <option>Playing with childer</option>
                <option>Going on the street with children</option>
                <option>Bringing and picking up from kindergarten</option>
                <option>Teaching children / educational games</option>
                <option>Doing outside activities with children</option>
                <option>Putting into bed for nap</option>
                <option>Giving lunch / dinner</option>
                <option>Dressing babies</option>
                <option>Bringing to bed at night</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">How much experience do you have with toddlers? * (2 – 4 years old)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <select name="ap_experience_toddlers[]" multiple="multiple" class="multiple-select" value="<?php echo $aupair['experience_toddlers']; ?>">
                <option>Playing with children</option>
                <option>Going on the street with children</option>
                <option>Bringing and picking up kids from kindergarten</option>
                <option>Teaching children / educational games</option>
                <option>Doing outside activities with children</option>
                <option>Giving lunch / dinner to children</option>
                <option>Dressing children</option>
                <option>Bringing to children bed</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">How much experience do you have with older kids? * (4 years and older)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <select name="ap_experience_kids[]" multiple="multiple" class="multiple-select" value="<?php echo $aupair['experience_kids']; ?>">
                <option>Playing with children</option>
                <option>Going on the street with children</option>
                <option>Bringing and picking up kids from kindergarten</option>
                <option>Teaching children / educational games</option>
                <option>Doing outside activities with children</option>
                <option>Giving lunch / dinner to children</option>
                <option>Dressing children</option>
                <option>Bringing to children bed</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">How many kids did you watch/ take care of at the same time? *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <textarea class="form-control" name="ap_kids_sametime">
                <?php echo $aupair['kids_sametime']; ?>
              </textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Do you have experience with disabled children?</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <div class="form-control custom-select">
                <select name="ap_experience_disability" value="<?php echo $aupair['experience_disability']; ?>">
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Are there things you are not willing to do? (related to children)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <textarea class="form-control" name="ap_not_willing">
                <?php echo $aupair['not_willing']; ?>
              </textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">What do you like the most about children?</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <textarea class="form-control" name="ap_most_liked">
                <?php echo $aupair['most_liked']; ?>
              </textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">What do you find a challenging aspect of working with children?</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <textarea class="form-control" name="ap_most_challenging">
                <?php echo $aupair['most_challenging']; ?>
              </textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
            What are your favourite activities with children?(divide the activities by age group: 0-2/2-4/4-8/8-12 and be specific)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <textarea class="form-control" name="ap_favourite_activities">
                <?php echo $aupair['favourite_activities']; ?>
              </textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
            Do you have experience with these household tasks? * (can be experience in your own home)</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <select name="ap_experience_household[]" multiple="multiple" class="multiple-select" value="<?php echo $aupair['experience_household']; ?>">
                <option>Making lunch / dinner for children</option>
                <option>Cooking lunch / dinner for adults</option>
                <option>Doing groceries</option>
                <option>Vacuum cleaning</option>
                <option>Washing clothes</option>
                <option>Folding clothes</option>
                <option>Ironing clothes</option>
                <option>Changing beds (sheets)</option>
                <option>Cleaning up</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Do you (used to) have personnel in your own house? *</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <div class="form-control custom-select">
                <select name="ap_personnel" value="<?php echo $aupair['personnel']; ?>">
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">Extra information / comments:</div>
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
              <textarea class="form-control" name="ap_extra_info">
                <?php echo $aupair['extra_info']; ?>
              </textarea>
            </div>
          </div>
          <div class="row">   
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">        
            <input type="submit" name="" class="btn next-button" value="Save experience">    
            </div>          
          </div>
          </form>
        </div>
<!-- start document tab -->
        <div role="tabpanel" class="tab-pane <?php echo $li_class['third']; ?>" id="document">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-9">
            <h1 class="profile-caption"><b><?php echo $aupair['full_name']; ?></b></h1></div>
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-3">
              <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                  <a href="#" class="add-doc" data-toggle="modal" data-target="#addDocModal" >&plus;</a>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                  <div class="input-group doc-search">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>              
            </div>            
          </div>
          
          <div class="panel-group profile-document" id="accordion">
            <div class="profile-document-heading">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">DOCUMENT</div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">UPLOADED BY</div>    
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">UPLOAD DATE</div>  
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 last">APPROVAL DATE</div>
            </div>
            <!-- doc-approved,  doc-review, ' ' -->
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
                  <a href="#" class="btn next-button <?= $document['status'] ?>-button"><?= $document['status'] ?></a>
                  <a href="<?= base_url('files/'.$document['name']) ?>" class="btn next-button" target="_blank" >DOWNLOAD</a>
                  <a href="#" class="btn next-button">NEW VERSION</a>
                  <a href="#" data-id="<?= $document['id']?>" class="btn next-button delete-button">DELETE</a>
                  <?php if(($this->aauth->is_member(6))&&($document['status'] != 'approved')) { ?>
                    <a href="#" data-id="<?= $document['id']?>" class="btn next-button approve-button">APPROVE</a>
                  <?php } ?>
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
<!-- end document tab -->
      <div role="tabpanel" class="tab-pane <?php echo $li_class['forth']; ?>" id="interview">         
        <h1 class="profile-caption"><b><?php echo $aupair['full_name']; ?></b></h1>
        <div class="row">
          <?= form_open('index/save_profile/29/'.$param) ?>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <h2><b><i>Interview Reports</i></b></h2><br>
            <table>
              <tr>
                <td><img src="<?= base_url('assets/img/users.png') ?>" ></td>
                <td>&nbsp;</td>
                <td><input type="text" name="tester" value="<?= $tests['tester'] ?>" class="form-control" ></td>
              </tr>
            </table>
            <br>
            <p>
              <textarea class="form-control" rows="10" name="description"><?= $tests['description'] ?></textarea>
            </p>            
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          
          <h2><b><i>Video</i></b></h2>
              <input type="url" name="video" value="<?= $aupair['video'] ?>" class="form-control" style="font-weight: normal;" >          
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 test-result" >
            <h2><b><i>Test results</i></b></h2>
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
                  <input type="range" value="<?= $test ?>" min="0" max="5" name = "<?= $key ?>">
                </div>              
              </div>         
            <?php
              }
             }
            ?>
            <input type="submit" name="" class="btn next-button" value="Save results">
            </form>
          </div>          
        </div>
      </div>
<!-- end interview tab -->
      <div role="tabpanel" class="tab-pane <?php echo $li_class['fifth']; ?>" id="report">         
        <div class="row">
          <div class="col-xs-9 col-sm-9 col-md-7 col-lg-7">
            <h1><i><b><?php echo $aupair['full_name']; ?></b></i></h1>
            <?= form_open('index/save_profile/5/'.$param); ?>
            <b>AU-PAIR STATUS</b><br>
            <div class="form-control custom-select" >
              <select name="ap_status" value="<?= $aupair['status'] ?>">
                <option>01 - Intake</option>
                <option>02 - Matching</option>
                <option>03 - Matching Proposed</option>
                <option>04 - Matched - Prepare Docs</option>
                <option>05 - At IND</option>
                <option>06 - Embassy / prepare arrival</option>
                <option>07 - Placed / In NL</option>
                <option>08 - Evaluation 1 send</option>
                <option>09 - Evaluation 2 send</option>
                <option>10 - Start Prepare leave procedure</option>
                <option>11 - Left (afgemeld IND)</option>
                <option>12 - On hold / later</option>
                <option>13 - REMATCH procedure</option>
              </select>
            </div>
            <br>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">V-Nummber</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="number" name="ap_number" value="<?= $aupair['id'] ?>" class="form-control" disabled>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Email HBN</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="email" name="ap_email" value="<?= $aupair['email'] ?>" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Skypename</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="text" name="ap_skype" value="<?= $aupair['skype'] ?>" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Mobiel nr. moeder</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="number" name="ap_phone" value="<?= $aupair['phone'] ?>" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Au-Pair Eigenaar</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="text" name="ap_eigenaar" value="SUPPORT TEAM HBN" class="form-control" disabled>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Date of birth</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="input-group date">
                <input type="text" class="form-control" name="ap_date_of_birth" value="<?= $aupair['date_of_birth'] ?>">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Country of origin</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="form-control custom-select" >
                  <select name="ap_nationality" value="<?= $aupair['nationality'] ?>">
                    <option>Dutch</option>
                    <option>Greek</option>
                    <option>Turkish</option>
                    <option>Spanish</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Month startdate</div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="input-group date">
                  <input type="text" class="form-control" name="ap_start_date" value="<?= $aupair['start_date'] ?>">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <input type="submit" class="btn next-button" value="Save">
              </div>
            </div>
            </form>
          </div>
          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            <!-- <input type="submit" name="" class="btn" value="Save"> -->
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <!-- <a href="#" class="btn next-button">PROFIEL FAMILIE</a> -->
          </div>
        </div>

        <h2>Auto filled Sections</h2>
        <div class="row">
          <?php foreach ($reports as $key => $report) { 
            if (($key != 'id') && ($key != 'aupair_id')) {            
            ?>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><b><?= str_replace('_', ' ', $key) ?></b></div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <?php if(($report == '0') || ($report == '1')){ ?>
                    <img src="<?=base_url('assets/img/visa-check-approved.png')?>" width="30" class="null<?= $report ?>">
                  <?php }elseif(($report == '0000-00-00')||($report == '0000-00-00 00:00:00')) { ?>
                    DNF
                  <?php }else{ echo $report; } ?>
                </div>
              </div>
            </div>
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
        <input type="hidden" name="user_id" value="<?= $documents[0]['user_id'] ?>">      
        <div class="modal-body">
          <div class="alert alert-success upload-success">
            <strong>Success!</strong> The document was successfully uploaded.
          </div>
          <div class="alert alert-danger upload-error">
            <strong>Opp!</strong> There are some errors to upload the document.
          </div>
          <div class="form-group">
            <label>Docuemnt Title:</label>
            <input type="text" name="doc_title" class="form-control" autocomplete='off'>                              
          </div>
          <div class="form-group">
          <label>Docuemnt File:</label>
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