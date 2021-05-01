<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

include('session_check.php');

include('config.php');

$tabindex = 1;

$connect = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database);

function showNum($num)
{
	if($num == 0)
		return "0";
	else if($num < 10)
		return "00".$num;
	else if($num < 100)
		return "0".$num;
	else
		return $num;
}
function activeMenu($page, $input_page)
{
	if($page==$input_page)
		return 'active';
	else
		return '';
}

function dateFormat($my_date)
{
	$temp = explode('.',$my_date);
	return $temp[2].'-'.$temp[1].'-'.$temp[0];
}


function getDateDDMM($temp)
{
		if($temp == '')
			return '';
		else
		{
			$flag_date = 0;

			switch(substr($temp,2,1))
			{
				case '.':
					$x = explode('.',$temp);
					$temp = $x[2]."-".$x[1]."-".$x[0];
					$flag_date = 1;
					break;
				case '/':
					$x = explode('/',$temp);
					$temp = $x[2]."-".$x[1]."-".$x[0];
					$flag_date = 1;
					break;
				case '-':
					if(substr($temp,6,1) == '-')
					{
						$x = explode('-',$temp);
						$temp = $x[2]."-".date('m',strtotime($x[1]))."-".$x[0];
					}else{
						$x = explode('-',$temp);
						$temp = $x[2]."-".$x[1]."-".$x[0];
					}
					$flag_date = 1;
					break;
			}
			
			
			if($flag_date == 0)
			switch(substr($temp,4,1))
			{
				case '.':
					$x = explode('.',$temp);
					$temp = $x[0]."-".$x[1]."-".$x[2];
					break;
				case '/':
					$x = explode('/',$temp);
					$temp = $x[0]."-".$x[1]."-".$x[2];
					break;
				case '-':
					if(substr($temp,8,1) == '-')
					{
						$x = explode('-',$temp);
						$temp = $x[0]."-".date('m',strtotime($x[1]))."-".$x[2];
						break;
					}else{
						$x = explode('-',$temp);
						$temp = $x[0]."-".$x[1]."-".$x[2];
						break;
					}
			}	
			
			return $temp;
	}
}

function getDateMMDD($temp)
{
		if($temp == '')
			return '';
		else
		{
			$flag_date = 0;
								
			switch(substr($temp,2,1))
			{
				case '.':
					$x = explode('.',$temp);
					$temp = $x[2]."-".$x[0]."-".$x[1];
					$flag_date = 1;
					break;
				case '/':
					$x = explode('/',$temp);
					$temp = $x[2]."-".$x[0]."-".$x[1];
					$flag_date = 1;
					break;
				case '-':
					if(substr($temp,6,1) == '-')
					{
						$x = explode('-',$temp);
						$temp = $x[2]."-".date('m',strtotime($x[0]))."-".$x[1];
					}else{
						$x = explode('-',$temp);
						$temp = $x[2]."-".$x[0]."-".$x[1];
					}
					$flag_date = 1;
					break;
			}
			if($flag_date == 0)
			switch(substr($temp,4,1))
			{
				case '.':
					$x = explode('.',$temp);
					$temp = $x[0]."-".$x[2]."-".$x[1];
					break;
				case '/':
					$x = explode('/',$temp);
					$temp = $x[0]."-".$x[2]."-".$x[1];
					break;
				case '-':
					if(substr($temp,8,1) == '-')
					{
						$x = explode('-',$temp);
						$temp = $x[0]."-".date('m',strtotime($x[2]))."-".$x[1];
						break;
					}else{
						$x = explode('-',$temp);
						$temp = $x[0]."-".$x[2]."-".$x[1];
						break;
					}
			}
			return $temp;
		}
}


function getDatatype($oid)
{
	$str = "Not Defined";
	switch ($oid)
	{
		case 0: $str = 'Varchar'; break;
		case 1: $str = 'Numeric'; break;
		case 2: $str = 'Only Chars'; break;
		case 3: $str = 'Date'; break;
		case 4: $str = 'Float'; break;
	}
	return $str;
}

function handleBlank($str,$default_value)
{
	if($str == "" || $str == null || $str == "0")
		return $default_value;
	else
		return $str;
}

function checkData($str,$datatype)
{
	if($datatype == 1)
	{
		if(ctype_digit($str))
			return 1;
		else
			return 0;
	}
	return 1;
}


function myTrim($str)
{
	return preg_replace('/\s\s+/', ' ',$str);
}



function logEntry($str)
{
	$GLOBALS['log'] .= "\n<br>".$str;
	
	if($str == "End")
	{
		
		$my_time = time();
		
		$stringData = $GLOBALS['log'];		
		$myFile = 'log/log_'.$my_time.'.txt';
		$fh = fopen($myFile, 'w') or die("can't open file");
		fwrite($fh, $stringData);
		fclose($fh);
		return $myFile;
	}

}




function checkQuery($str)
{
	return str_replace('\'','\\\'',$str);
}


	
/**
 * Executes multiple queries in a 'bulk' to achieve better
 * performance and integrity.
 *
 * @param array  $data   An array of queries. Except for loaddata methods. Those require a 2 dimensional array.
 * @param string $table
 * @param string $method
 * @param array  $options
 *
 * @return float
 
 $q = array();
	$k = 0;

	$q[$k++] = " ";
			
	mysqlBulk($q, 'transaction_lock');


 */
function mysqlBulk(&$data, $table, $method = 'transaction', $options = array()) {
  // Default options
  if (!isset($options['query_handler'])) {
      $options['query_handler'] = 'mysql_query';
  }
  if (!isset($options['trigger_errors'])) {
      $options['trigger_errors'] = true;
  }
  if (!isset($options['trigger_notices'])) {
      $options['trigger_notices'] = true;
  }
  if (!isset($options['eat_away'])) {
      $options['eat_away'] = false;
  }
  if (!isset($options['in_file'])) {
      // AppArmor may prevent MySQL to read this file.
      // Remember to check /etc/apparmor.d/usr.sbin.mysqld
      $options['in_file'] = '/dev/shm/infile.txt';
  }
  if (!isset($options['link_identifier'])) {
      $options['link_identifier'] = null;
  }

  // Make options local
  extract($options);

  // Validation
  if (!is_array($data)) {
      if ($trigger_errors) {
          trigger_error('First argument "queries" must be an array',
              E_USER_ERROR);
      }
      return false;
  }
  if (empty($table)) {
      if ($trigger_errors) {
          trigger_error('No insert table specified',
              E_USER_ERROR);
      }
      return false;
  }
  if (count($data) > 10000) {
      if ($trigger_notices) {
          trigger_error('It\'s recommended to use <= 10000 queries/bulk',
              E_USER_NOTICE);
      }
  }
  if (empty($data)) {
      return 0;
  }

  if (!function_exists('__exe')) {
      function __exe ($sql, $query_handler, $trigger_errors, $link_identifier = null) {
          if ($link_identifier === null) {
              $x = call_user_func($query_handler, $sql);
          } else {
              $x = call_user_func($query_handler, $sql, $link_identifier);
          }
          if (!$x) {
              if ($trigger_errors) {
                  trigger_error(sprintf(
                      'Query failed. %s [sql: %s]',
                      mysql_error($link_identifier),
                      $sql
                  ), E_USER_ERROR);
                  return false;
              }
          }

          return true;
      }
  }

  if (!function_exists('__sql2array')) {
      function __sql2array($sql, $trigger_errors) {
          if (substr(strtoupper(trim($sql)), 0, 6) !== 'INSERT') {
              if ($trigger_errors) {
                  trigger_error('Magic sql2array conversion '.
                      'only works for inserts',
                      E_USER_ERROR);
              }
              return false;
          }

          $parts   = preg_split("/[,\(\)] ?(?=([^'|^\\\']*['|\\\']" .
                                "[^'|^\\\']*['|\\\'])*[^'|^\\\']" .
                                "*[^'|^\\\']$)/", $sql);
          $process = 'keys';
          $dat     = array();

          foreach ($parts as $k=>$part) {
              $tpart = strtoupper(trim($part));
              if (substr($tpart, 0, 6) === 'INSERT') {
                  continue;
              } else if (substr($tpart, 0, 6) === 'VALUES') {
                  $process = 'values';
                  continue;
              } else if (substr($tpart, 0, 1) === ';') {
                  continue;
              }

              if (!isset($data[$process])) $data[$process] = array();
              $data[$process][] = $part;
          }

          return array_combine($data['keys'], $data['values']);
      }
  }

  // Start timer
  $start = microtime(true);
  $count = count($data);

  // Choose bulk method
  switch ($method) {
      case 'loaddata':
      case 'loaddata_unsafe':
      case 'loadsql_unsafe':
          // Inserts data only
          // Use array instead of queries

          $buf    = '';
          foreach($data as $i=>$row) {
              if ($method === 'loadsql_unsafe') {
                  $row = __sql2array($row, $trigger_errors);
              }
              $buf .= implode(':::,', $row)."^^^\n";
          }

          $fields = implode(', ', array_keys($row));

          if (!@file_put_contents($in_file, $buf)) {
              $trigger_errors && trigger_error('Cant write to buffer file: "'.$in_file.'"', E_USER_ERROR);
              return false;
          }

          if ($method === 'loaddata_unsafe') {
              if (!__exe("SET UNIQUE_CHECKS=0", $query_handler, $trigger_errors, $link_identifier)) return false;
              if (!__exe("set foreign_key_checks=0", $query_handler, $trigger_errors, $link_identifier)) return false;
              // Only works for SUPER users:
              #if (!__exe("set sql_log_bin=0", $query_handler, $trigger_error)) return false;
              if (!__exe("set unique_checks=0", $query_handler, $trigger_errors, $link_identifier)) return false;
          }

          if (!__exe("
             LOAD DATA INFILE '${in_file}'
             INTO TABLE ${table}
             FIELDS TERMINATED BY ':::,'
             LINES TERMINATED BY '^^^\\n'
             (${fields})
         ", $query_handler, $trigger_errors, $link_identifier)) return false;

          break;
      case 'transaction':
      case 'transaction_lock':
      case 'transaction_nokeys':
          // Max 26% gain, but good for data integrity
          if ($method == 'transaction_lock') {
              if (!__exe('SET autocommit = 0', $query_handler, $trigger_errors, $link_identifier)) return false;
              if (!__exe('LOCK TABLES '.$table.' READ', $query_handler, $trigger_errors, $link_identifier)) return false;
          } else if ($method == 'transaction_keys') {
              if (!__exe('ALTER TABLE '.$table.' DISABLE KEYS', $query_handler, $trigger_errors, $link_identifier)) return false;
          }

          if (!__exe('START TRANSACTION', $query_handler, $trigger_errors, $link_identifier)) return false;

          foreach ($data as $query) {
              if (!__exe($query, $query_handler, $trigger_errors, $link_identifier)) {
                  __exe('ROLLBACK', $query_handler, $trigger_errors, $link_identifier);
                  if ($method == 'transaction_lock') {
                      __exe('UNLOCK TABLES '.$table.'', $query_handler, $trigger_errors, $link_identifier);
                  }
                  return false;
              }
          }

          __exe('COMMIT', $query_handler, $trigger_errors, $link_identifier);

          if ($method == 'transaction_lock') {
              if (!__exe('UNLOCK TABLES', $query_handler, $trigger_errors, $link_identifier)) return false;
          } else if ($method == 'transaction_keys') {
              if (!__exe('ALTER TABLE '.$table.' ENABLE KEYS', $query_handler, $trigger_errors, $link_identifier)) return false;
          }
          break;
      case 'none':
          foreach ($data as $query) {
              if (!__exe($query, $query_handler, $trigger_errors, $link_identifier)) return false;
          }

          break;
      case 'delayed':
          // MyISAM, MEMORY, ARCHIVE, and BLACKHOLE tables only!
          if ($trigger_errors) {
              trigger_error('Not yet implemented: "'.$method.'"',
                  E_USER_ERROR);
          }
          break;
      case 'concatenation':
      case 'concat_trans':
          // Unknown bulk method
          if ($trigger_errors) {
              trigger_error('Deprecated bulk method: "'.$method.'"',
                  E_USER_ERROR);
          }
          return false;
          break;
      default:
          // Unknown bulk method
          if ($trigger_errors) {
              trigger_error('Unknown bulk method: "'.$method.'"',
                  E_USER_ERROR);
          }
          return false;
          break;
  }

  // Stop timer
  $duration = microtime(true) - $start;
  $qps      = round ($count / $duration, 2);

  if ($eat_away) {
      $data = array();
  }

  @unlink($options['in_file']);

  // Return queries per second
  return $qps;
}




?>