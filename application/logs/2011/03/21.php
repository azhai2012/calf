<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-03-21 08:32:18 --- ERROR: Http_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/loginpng.png ~ SYSPATH/classes/kohana/request.php [ 695 ]
2011-03-21 08:32:18 --- ERROR: Http_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 695 ]
2011-03-21 08:32:18 --- ERROR: Http_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 695 ]
2011-03-21 08:32:21 --- ERROR: Http_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 695 ]
2011-03-21 08:32:29 --- ERROR: Http_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/loginpng.png ~ SYSPATH/classes/kohana/request.php [ 695 ]
2011-03-21 08:33:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Supplier::ajax_get_setting_suppropose_list() ~ MODPATH/calfsupplier/classes/kohana/supplier.php [ 109 ]
2011-03-21 08:33:48 --- ERROR: Database_Exception [ 1146 ]: Table 'hhyy.users' doesn't exist [ 
		              SELECT count(sup_id) as ct,sum(pcount) as pzs,sum(amount) as je
		              FROM 
		                (SELECT sup_id,meet_id,count(product_id) as pcount,(select round(sum(num*price),2) as je 
		                        from suporders b where b.sup_id=suppliers.sup_id) as amount 
		                 FROM suppliers 
		                 WHERE suppliers.price>0
		                 GROUP BY sup_id,meet_id) a
		                 
                      INNER JOIN users ON a.sup_id = users.userid
                      INNER JOIN meets ON a.meet_id = meets.id
                      WHERE active='Y' and meet_begin_at ~ MODPATH/database/classes/kohana/database/mysql.php [ 179 ]
2011-03-21 08:33:54 --- ERROR: Database_Exception [ 1146 ]: Table 'hhyy.users' doesn't exist [ 
		              SELECT *,IFNULL(amount,0) as amount
		              FROM 
		                (SELECT sup_id,meet_id,count(product_id) as pcount,(select round(sum(num*price),2) as je 
		                        from suporders b where b.sup_id=suppliers.sup_id) as amount 
		                 FROM suppliers 
		                 WHERE suppliers.price>0
		                 GROUP BY sup_id,meet_id) a
		                 
                      INNER JOIN users ON a.sup_id = users.userid
                      INNER JOIN meets ON a.meet_id = meets.id
                      WHERE active='Y' and meet_begin_at ~ MODPATH/database/classes/kohana/database/mysql.php [ 179 ]