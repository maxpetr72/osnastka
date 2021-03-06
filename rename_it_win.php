<?php
/**
 * Rename script for Osnastka
 *
 * @param string $new_name Name of new components
 * @param string $start Directory for find and replace in files old name to new name
 *
 */
$new_name = !empty($_REQUEST['name'])
    ? $_REQUEST['name']
    : (!empty($argv[1])
        ? $argv[1]
        : '');
$new_name_lower = strtolower($new_name);
$start = dirname(__FILE__);

define(DS, DIRECTORY_SEPARATOR);

if (empty($new_name)) {
//    exit("\n" . 'You need to specify a new name of component in this file on line 9, or send it via $_GET["name"].');
    exit("\n<br />" . 'You need to specify a new name of component in this file on line 9, or send it via $_GET["name"].');
}
// --

$old_name = 'Osnastka';
$old_name_lower = strtolower($old_name);

$dirs = scandir($start);

//$tmp = explode('/', $start);
$tmp = explode(DS, $start);
array_pop($tmp);
//$end = implode('/', $tmp) . '/' . $new_name;
$end = implode(DS, $tmp) . DS . $new_name; 
@rename($start, $end);
rename_extra($end, array($old_name, $old_name_lower), array($new_name, $new_name_lower));

/**
 * Recurvice rename of files and its content
 *
 * @param string $start_path Where to start
 * @param array $find Array with values to rename
 * @param array $replace Array with values for replacement
 *
 * @return void
 */
function rename_extra($start_path, $find = array(), $replace = array())
{

    $items = scandir($start_path);

    foreach ($items as $item) {
        if (strpos($item, '.') === 0) {
            continue;
        }

        //$old_path = str_replace('//', '/', $start_path . '/' . $item);
	$old_path = str_replace('//', DS, $start_path . DS . $item);

        if (strpos($old_path, $find[1]) !== false) {
//            $new_path = str_replace(
//		    '//', 
//		    '/', 
//		    $start_path . '/' . str_replace(
//			    $find, 
//			    $replace, 
//			    $item
//			    )
//		    );
	    $new_path = str_replace(
		    '//', 
		    DS, 
		    $start_path . DS . str_replace(
			    $find, 
			    $replace, 
			    $item
			    )
		    );
            if (!rename($old_path, $new_path)) {
//                exit("\nCould not rename $old_path to $new_path");
                exit("\n<br />Could not rename $old_path to $new_path");
            }
        } else {
            $new_path = $old_path;
        }

//        echo $new_path . "\n";
        echo $new_path . "\n<br />";

        if (is_dir($new_path)) {
            rename_extra($new_path, $find, $replace);
        } else {
            $content = file_get_contents($new_path);
            $content = str_replace($find, $replace, $content);

            if ($item == 'home.class.php') {
                $content = str_replace(
			$replace[0] . 'ManagerController', 
			'OsnastkaManagerController', 
			$content
			);
            }

            file_put_contents(
		    $new_path, 
		    $content
		    );
        }
    }
}
