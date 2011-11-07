<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-11-07 
 * @copyright 2011 
 *
 */
 return array
 (
       
	'exts'=> array(
		'CSV'		=> 'csv',
		'PDF'		=> 'pdf',
		'Excel5' 	=> 'xls',
		'Excel2007'     => 'xlsx',
	),
	'mimes'  => array(
               'CSV' 		=> 'text/csv',
               'PDF' 		=> 'application/pdf',
               'Excel5' 	=> 'application/vnd.ms-excel',
               'Excel2007'      => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ),
	'default' => array(
	        'title'         => 'New Spreadsheet',
		'subject'       => 'New Spreadsheet',
		'description'   => 'New Spreadsheet',
		'author'        => 'ClubSuntory',
		'format'        => 'Excel2007',
		'path'          => 'assets/downloads/spreadsheets/',
		'name'          => 'NewSpreadsheet',
	)
 );