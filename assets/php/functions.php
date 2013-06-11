<?php
	
	/**
	 * Dumps the database tables into a gzipped file
	 * @param $path the parth to the file (don't include last '/')
	 * @param $filename file name to save the backup, should include .sql.gz extension
	 * @return retuns the complete filepath of the created dump
	 */
	function dumpDataBase($path = BACKUP_FOLDER, $filename = '')
	{
		$date = 'Backup_'.date('d-m-Y_H-i-s').'.sql.gz';
		if($filename == '')
			$filename = $date;

		include_once(PHP_FOLDER.'/class.MySQLDump.php');

		$dumpSettings = array(
		    'include-tables' => array('TABLE1', 'TABLE2', 'TABLE2', 'TABLE3', 'TABLE4', 'TABLE5'),
		    'exclude-tables' => array('TABLE6_EXCLUDED'),
		    'compress' => true,
		    'no-data' => false,             /* http://dev.mysql.com/doc/refman/5.1/en/mysqldump.html#option_mysqldump_no-data */
		    'add-drop-table' => false,      /* http://dev.mysql.com/doc/refman/5.1/en/mysqldump.html#option_mysqldump_add-drop-table */
		    'single-transaction' => true,   /* http://dev.mysql.com/doc/refman/5.1/en/mysqldump.html#option_mysqldump_single-transaction */
		    'lock-tables' => false,         /* http://dev.mysql.com/doc/refman/5.1/en/mysqldump.html#option_mysqldump_lock-tables */
		    'add-locks' => true,            /* http://dev.mysql.com/doc/refman/5.1/en/mysqldump.html#option_mysqldump_add-locks */
		    'extended-insert' => true       /* http://dev.mysql.com/doc/refman/5.1/en/mysqldump.html#option_mysqldump_extended-insert */
		    );
		$dump = new MySQLDump(DB_NAME,DB_USER,DB_PASSWORD,DB_HOST, $dumpSettings);
		$dump->start($path.'/'.$filename);
		return $path.'/'.$filename;
	}
?>
