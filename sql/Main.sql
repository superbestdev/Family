CREATE TABLE `parents` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `firstname` VARCHAR(255) NOT NULL , `lastname` VARCHAR(255) NOT NULL , `birthday` DATE  NULL , `marital_status` VARCHAR(50)  NULL , `nationality` VARCHAR(50)  NULL , `mobile_number` VARCHAR(255)  NULL , `email` VARCHAR(255) NOT NULL , `gender` BOOLEAN  NULL , `job_description` TEXT  NULL , `company_name` VARCHAR(255)  NULL , `location_job` VARCHAR(255)  NULL , `work_days` VARCHAR(255)  NULL , `travel_work` VARCHAR(50)  NULL , `sport_interest` VARCHAR(255)  NULL , `characteristics` VARCHAR(255)  NULL , `family_id` INT(255)  NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `kids` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `gender` VARCHAR(50) NOT NULL , `birthday` DATE  NULL , `age` INT(25)  NULL , `school` VARCHAR(50)  NULL , `monday` VARCHAR(50)  NULL , `tuesday` VARCHAR(50)  NULL , `wednesday` VARCHAR(50)  NULL , `thursday` VARCHAR(50)  NULL , `friday` VARCHAR(50)  NULL , `commute` VARCHAR(50)  NULL , `family_id` INT(255)  NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `families` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `contact_email` VARCHAR(255) NOT NULL , `postal_code` VARCHAR(255)  NULL , `phone_number` VARCHAR(255)  NULL , `house_number` VARCHAR(255)  NULL , `street` VARCHAR(255)  NULL , `number_kids` INT(255)  NULL , `place` VARCHAR(255)  NULL , `living_situation` VARCHAR(50)  NULL , `number_bedrooms` INT(255)  NULL , `number_bathrooms` INT(255)  NULL , `religion` VARCHAR(255)  NULL , `practising` VARCHAR(50)  NULL , `pets` VARCHAR(255)  NULL , `household_help` VARCHAR(50)  NULL , `cooking` VARCHAR(50)  NULL , `cook` VARCHAR(255)  NULL , `eating` VARCHAR(50)  NULL , `ilness` VARCHAR(50)  NULL , `illness_influence` TEXT  NULL , `reason` VARCHAR(255)  NULL , `aupair_from` DATE  NULL , `aupair_until` DATE  NULL , `culture_country` VARCHAR(255)  NULL , `aupair_characteristics` VARCHAR(255)  NULL , `aupair_diet` VARCHAR(50)  NULL , `aupair_smoker` VARCHAR(50) NULL , `aupair_drivers_license` VARCHAR(50)  NULL , `aupair_skills` VARCHAR(255)  NULL , `aupair_experience` VARCHAR(50)  NULL , `aupair_responsibilities` VARCHAR(255)  NULL , `aupair_household` VARCHAR(255)  NULL , `aupair_household_nights` VARCHAR(255)  NULL , `aupair_household_hours` INT(255)  NULL , `pocketmoney_insurance` VARCHAR(50)  NULL , `travel` VARCHAR(50)  NULL , `language_course` VARCHAR(50)  NULL , `first_aid` VARCHAR(50)  NULL , `hbn_club` VARCHAR(50)  NULL , `phone_expenses` VARCHAR(50)  NULL , `return_ticket` VARCHAR(255)  NULL , `overview` TEXT NULL , `photo` VARCHAR(255) NULL , `aupair_name` VARCHAR(255) NULL , `status` VARCHAR(255) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `schedules` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `schedule_date` VARCHAR(10) NOT NULL , `start_time` TIME NOT NULL , `end_time` TIME NOT NULL , `title` VARCHAR(255) NOT NULL , `content` TEXT NOT NULL , `schedule_type` VARCHAR(10) NOT NULL ,`user_type` VARCHAR(10) NOT NULL , `user_id` INT(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 

CREATE TABLE `aupairs` ( `id` INT(255) NOT NULL AUTO_INCREMENT ,`full_name` VARCHAR(255) NOT NULL , `gender` VARCHAR(50)  NULL , `date_of_birth` DATE  NULL , `nationality` VARCHAR(50)  NULL , `address` VARCHAR(255)  NULL , `email` VARCHAR(255)  NULL , `phone` VARCHAR(255)  NULL , `skype` VARCHAR(255)  NULL , `height` VARCHAR(255)  NULL , `weight` VARCHAR(255)  NULL , `start_date` DATE  NULL , `period_of_stay` VARCHAR(255)  NULL , `contribution_flight` INT(255)  NULL , `children_under_2` VARCHAR(50)  NULL , `max_amount_children` INT(255)  NULL , `religion` VARCHAR(255)  NULL , `interests` VARCHAR(255)  NULL , `smoker` VARCHAR(50)  NULL , `tattoos` VARCHAR(50)  NULL , `piercings` VARCHAR(50)  NULL , `education` VARCHAR(255)  NULL , `current_job` VARCHAR(255)  NULL , `experience` VARCHAR(255)  NULL , `aupair_experience` VARCHAR(50)  NULL , `drivers_license` VARCHAR(50)  NULL , `languages` VARCHAR(255)  NULL , `disclaimer_service_fee` VARCHAR(255)  NULL , `place` VARCHAR(255)  NULL , `ap_date` DATE  NULL , `dislaimer_terms_conditions` VARCHAR(50)  NULL , `age` INT(255)  NULL , `relationship_status` VARCHAR(50)  NULL , `children` VARCHAR(50)  NULL , `mental_condition` TEXT NOT NULL , `physical_condition` TEXT NOT NULL , `condition_family` VARCHAR(50)  NULL , `allergies` VARCHAR(255)  NULL , `diet` TEXT NOT NULL , `medicine` VARCHAR(50)  NULL , `english_level` VARCHAR(50)  NULL , `other_languages` VARCHAR(255)  NULL , `biking_experience` VARCHAR(50)  NULL , `tickets` VARCHAR(50)  NULL , `cooking_level` VARCHAR(50)  NULL , `first_aid` VARCHAR(50)  NULL , `swimming` VARCHAR(50)  NULL , `school_university` TEXT NOT NULL , `major` VARCHAR(255)  NULL , `former_jobs` TEXT NOT NULL , `kids_age` TEXT NOT NULL , `kids_time` TEXT NOT NULL , `experience_babies` TEXT NOT NULL , `experience_toddlers` TEXT NOT NULL , `experience_kids` TEXT NOT NULL , `kids_sametime` VARCHAR(255)  NULL , `experience_disability` VARCHAR(50)  NULL , `not_willing` VARCHAR(255)  NULL , `most_liked` TEXT NOT NULL , `most_challenging` TEXT NOT NULL , `favourite_activities` TEXT NOT NULL , `experience_household` TEXT NOT NULL , `personnel` VARCHAR(50)  NULL , `extra_info` TEXT NOT NULL, `overview` TEXT NULL , `photo` VARCHAR(255) NULL , `family_name` VARCHAR(255) NULL , `status` VARCHAR(255) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 

CREATE TABLE `documents` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `title` VARCHAR(255) NOT NULL , `uploader` VARCHAR(255) NOT NULL , `upload_date` DATE NOT NULL , `approved_date` DATE NOT NULL , `status` VARCHAR(10) NOT NULL , `user_id` INT(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `agencies` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;