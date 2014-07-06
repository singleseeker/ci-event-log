# CodeIgniter-Event-Log-Library

Simple library to store user veent log.

# Installation

Create log table on your database. SQL structure is available on ``sql/mysql.sql``

```
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
```

You can install via codeigniter spark or step by step from following instruction.

    $ cp config/log.php your_application/config/
    $ cp libraries/Lib_event_log.php your_application/libraries/
    $ cp controllers/example.php your_application/controllers/

# Usage

Check example file.
