CREATE TABLE IF NOT EXISTS `assessments`.`tdl_browser_poll` (
  `_id` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `browser` VARCHAR(45) NOT NULL,
  `reason` VARCHAR(150) NOT NULL,
  `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_deleted` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`_id`));