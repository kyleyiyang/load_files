In theme editor: DirectoryEngine: functions.php, added the function:
//if (!function_exists('load_host_files') {
	function load_host_files() {
		$uploads = wp_get_upload_dir();
		$files = array();
		$file_paths = array();
		$output = array();
		if ($dir=opendir($uploads["basedir"]."/host")){
			while (false !== ($file = readdir($dir))){
				if ($file != "." && $file != ".."){
					$files[] = $file;
					$file_paths[] = $uploads["baseurl"] . '/host/' . $file; 
				}
			}
			closedir($dir);
		}
		$output = array($files, $file_paths);
		return $output;
	}
//}
