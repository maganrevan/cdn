<?php
function scan_Dir($dir) {
    $arrfiles = array();
    if (is_dir($dir)) {
        if ($handle = opendir($dir)) {
            chdir($dir);
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != "..") {
                    if (is_dir($file)) {
                        $arr = scan_Dir($file);
                        foreach ($arr as $value) {
                            $arrfiles[] = $dir."/".$value;
                        }
                    } else {
                        $arrfiles[] = $dir."/".$file;
                    }
                }
            }
            chdir("../");
        }
        closedir($handle);
    }
    return $arrfiles;
}
