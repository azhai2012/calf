<?php defined('SYSPATH') or die('No direct script access.');
/**
 * PHP Excel library. Helper class to make spreadsheet creation easier.
 *
 * @package    Spreadsheet
 * @author     Flynsarmy, Dmitry Shovchko
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @uses  
*//* 
          $ws = new Spreadsheet(array(
                     'author'       => 'Kohana-PHPExcel',
                     'title'        => 'Report',
                     'subject'      => 'Subject',
                     'description'  => 'Description',
           ));

           $ws->set_active_sheet(0);
           $as = $ws->get_active_sheet();
           $as->setTitle('Report');

           $as->getDefaultStyle()->getFont()->setSize(9);

           $as->getColumnDimension('A')->setWidth(7);
           $as->getColumnDimension('B')->setWidth(40);
           $as->getColumnDimension('C')->setWidth(12);
           $as->getColumnDimension('D')->setWidth(10);

           $sh = array(
                 1 => array('Day','User','Count','Price'),
                 2 => array(1, 'John', 5, 587),
                 3 => array(2, 'Den', 3, 981),
                 4 => array(3, 'Anny', 1, 214)
                );

           $ws->set_data($sh, false);
           $ws->send(array('name'=>'report', 'format'=>'Excel5'));
*/
class Kohana_Spreadsheet
{
	private $exts =array();
	
	private $mimes = array();


	protected $options = array();
	
	/**
	 *  
	 */
	public static function instance(array $options = NULL){
		 
	      return new Kohana_Spreadsheet($options);	 
		
	}
	
	/**
	 * @var PHPExcel
	 */
	protected $_spreadsheet;

	/**
	 * Creates the spreadsheet with given or default settings
	 * 
	 * @param array $options with optional parameters: title, subject, description, author
	 * @return void
	 */
	public function __construct(array $options = NULL)
	{
	
		/* PHP Excel integration */
		$config = Kohana::$config->load('excel');
		$this->exts  = $config['exts'];
		$this->mimes = $config['mimes'];
		if ($options === NULL){
		   $this->options = $config['default'];
		}
                else
                   $this->options = $options;
	    
		$this->_spreadsheet = new PHPExcel();
		$this->set_options($this->options);
	}

        public function read_one($filename){

	      $reader = PHPExcel_IOFactory::createReader('Excel5');
	      $reader->setReadDataOnly(true);
	
	      $phpexcel = $reader->load($filename); 
	      $sheet = $phpexcel->getActiveSheet();
	      $rowcount = $sheet->getHighestRow();
	      $highestColumn = $sheet->getHighestColumn(); 
	      $columncount= PHPExcel_Cell::columnIndexFromString($highestColumn);  
	      $rows=array();

	      for ($i=0; $i <= 3; $i++) { 
                 $rs = array(); 
                 for ($j=0; $j <=$columncount; $j++) { 
                     $rs[] = $sheet->getCellbyColumnAndRow($j,$i)->getValue(); 
                 }
                  $rows[]=$rs;
               }   

	      return array('rowcount'=>$rowcount,'columncount'=>$columncount,'rows'=>$rows);
        }

        public function read($filename){
	      
	      $reader = PHPExcel_IOFactory::createReader('Excel5');
	      $reader->setReadDataOnly(true);
	      $phpexcel = $reader->load($filename); 
	      $sheet = $phpexcel->getActiveSheet();
	      $rowcount = $sheet->getHighestRow();
	      $highestColumn = $sheet->getHighestColumn(); 
	      $columncount= PHPExcel_Cell::columnIndexFromString($highestColumn);  
	      $rows=array();
	      for ($i=0; $i <= $rowcount; $i++) { 
                 $rs = array(); 
                 for ($j=0; $j <=$columncount; $j++) { 
                     $rs[] = $sheet->getCellbyColumnAndRow($j,$i)->getValue(); 
                 }
                  
                  $rows[]=$rs;
               }   
	 
	      return array('rowcount'=>$rowcount,'columncount'=>$columncount,'rows'=>$rows);
        }

	/**
	 * Set active sheet index
	 * 
	 * @param int $index Active sheet index
	 * @return void
	 */
	public function set_active_sheet($index)
	{
		$this->_spreadsheet->setActiveSheetIndex($index);
	}

	/**
	 * Get the currently active sheet
	 * 
	 * @return PHPExcel_Worksheet
	 */
	public function get_active_sheet()
	{
		return $this->_spreadsheet->getActiveSheet();
	}

	/**
	 * Writes cells to the spreadsheet
	 *  array(
	 *	   1 => array('A1', 'B1', 'C1', 'D1', 'E1'),
	 *	   2 => array('A2', 'B2', 'C2', 'D2', 'E2'),
	 *	   3 => array('A3', 'B3', 'C3', 'D3', 'E3'),
	 *  );
	 * 
	 * @param array of array( [row] => array([col]=>[value]) ) ie $arr[row][col] => value
	 * @return void
	 */
	public function set_data(array $data,array $columns = NULL, $multi_sheet = FALSE)
	{
		// Single sheet ones can just dump everything to the current sheet
		if ( ! $multi_sheet)
		{
			$sheet = $this->_spreadsheet->getActiveSheet();
			$this->set_sheet_data($data, $sheet);
		}
		// Have to do a little more work with multi-sheet
		else
		{
		        $sheet = Work::instance($this->_spreadsheet,$this->get_active_sheet());
                        $sheet->include_names($this->options['show_header']);
                        if ($columns === NULL)
                          foreach ($data[0] as $key => $value) {
	                     $sheet->columns($key,$value);  
		          }
		        else
		          foreach ($columns as $key => $value) {
		              $sheet->columns($key,$value);  
			  }
		
		        foreach ($data as $rows => $row) {			
		            $sheet->data($rows,$row);    
		            $sheet->render();
		        }

			$this->_spreadsheet->removeSheetByIndex(0);
		}
	}

	protected function set_options($options)
	{
		$this->options = Arr::merge($this->options, $options);
		return $this;
	}

	protected function set_properties()
	{
		$this->_spreadsheet->getProperties()
			->setCreator($this->options['author'])
			->setTitle($this->options['title'])
			->setSubject($this->options['subject'])
			->setDescription($this->options['description']);
		return $this;
	}
	

	protected function set_sheet_data(array $data, PHPExcel_Worksheet $sheet)
	{
		foreach ($data as $row => $columns)
		{

			foreach ($columns as $column => $value)
			{
			      	
				$sheet->setCellValueByColumnAndRow($column, $row, $value);
			}
		}
	}

	/**
	 * Writes spreadsheet to file
	 * 
	 * @param array $settings with optional parameters: format, path, name (no extension)
	 * @return Path to spreadsheet
	 */
	public function save($settings = array())
	{
		// Set document properties
		$this->set_properties();

		$settings = array_merge($this->options, $settings);

		// Generate full path
		$settings['fullpath'] = $settings['path'].$settings['name'].'_'.time().'.'.$this->exts[$settings['format']];

		$writer = PHPExcel_IOFactory::createWriter($this->_spreadsheet, $settings['format']);

		if ($settings['format'] == 'CSV')
		{
			$writer->setUseBOM(true);
		}
		$writer->save($settings['fullpath']);

		return $settings['fullpath'];
	}

	/**
	 * Send spreadsheet to browser
	 * 
	 * @param array $settings with optional parameters: format, name (no extension)
	 * @return void
	 */
	public function send($settings = array())
	{
		// Set document properties
		$this->set_properties();

		$settings = array_merge($this->options, $settings);

		$writer = PHPExcel_IOFactory::createWriter($this->_spreadsheet, $settings['format']);
		//$writer->setReadDataOnly(true);
		//$writer->setOutputEncoding('UTF_8');

		$ext = $this->exts[$settings['format']];
		$mime = $this->mimes[$settings['format']];
                $filename = $settings['name'];
                
		$response = Request::current()->response();
		
		if (preg_match('/MSIE/',$_SERVER['HTTP_USER_AGENT'])) {
                    $filename = rawurlencode($filename);
		
		   $response->headers(array(
			'Content-Type' => 'application/force-download',
			'Content-Type' => 'application/octet-stream',
			'Content-Type' => 'application/download',
			'Content-Disposition' => 'attachment;filename="'.$filename.'.'.$ext.'"',
			'Content-Transfer-Encoding' => 'binary',
			'Cache-Control' => 'max-age=0',
		  ));
		} 
		else
		$response->headers(array(
			'Content-Type' => $mime.';charset=utf-8',
			'Content-Disposition' => 'attachment;filename="'.$filename.'.'.$ext.'"',
			'Cache-Control' => 'max-age=0',
		));
		$response->send_headers();

		if ($settings['format'] == 'CSV')
		{
			$writer->setUseBOM(TRUE);
		}

		$writer->save('php://output');
		exit;
	}

}
