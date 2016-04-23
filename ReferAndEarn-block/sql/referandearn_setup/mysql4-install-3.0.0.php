<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table inst_referearn(refer_earn_id int not null auto_increment, referre_email_id varchar(100), primary key(tablename_id));		
SQLTEXT;

$installer->run($sql);

$installer->endSetup();

	 