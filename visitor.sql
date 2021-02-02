

CREATE TABLE `pratical`.`user_visitor` ( `user_id` INT(11) NOT NULL AUTO_INCREMENT ,  `total_visitor` INT(11) NOT NULL ,  `visitor_time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`user_id`)) ENGINE = InnoDB;