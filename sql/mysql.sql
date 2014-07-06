--
-- Table structure for table `user_event_log`
--

CREATE TABLE IF NOT EXISTS `user_event_log` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `event_log_name` VARCHAR(100) NULL,
  `event_log_des` VARCHAR(255) NULL,
  `user_event_type` VARCHAR(45) NULL,
  `event_log_user_id` INT(11) NULL,
  `event_log_time` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci