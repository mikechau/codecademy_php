<?php
require_once 'sdk.class.php';

// $s3 = new AmazonS3();

// $response = $s3->create_bucket('super-special-unique-bucket', AmazonS3::REGION_US_E1, AmazonS3::ACL_PUBLIC);

// if ((int) $response->isOK()) {
//      echo 'Created Bucket';
// } else { 
//      echo (string) $response->body->Message;
// }

function print_r_tree($data)
{
    // capture the output of print_r
    $out = print_r($data, true);

    // replace something like '[element] => <newline> (' with <a href="javascript:toggleDisplay('...');">...</a><div id="..." style="display: none;">
    $out = preg_replace('/([ \t]*)(\[[^\]]+\][ \t]*\=\>[ \t]*[a-z0-9 \t_]+)\n[ \t]*\(/iUe',"'\\1<a href=\"javascript:toggleDisplay(\''.(\$id = substr(md5(rand().'\\0'), 0, 7)).'\');\">\\2</a><div id=\"'.\$id.'\" style=\"display: none;\">'", $out);

    // replace ')' on its own on a new line (surrounded by whitespace is ok) with '</div>
    $out = preg_replace('/^\s*\)\s*$/m', '</div>', $out);

    // print the javascript function toggleDisplay() and then the transformed output
    echo '<script language="Javascript">function toggleDisplay(id) { document.getElementById(id).style.display = (document.getElementById(id).style.display == "block") ? "none" : "block"; }</script>'."\n$out";
}

$s3 = new AmazonS3();
$response = $s3->list_buckets();
foreach ($response->body->Buckets[0] as $bucket) {
  echo (string) $bucket->Name . '<br />';
}

$bucket = 'name-goes-here';
$data = $s3->list_objects($bucket);
$contents = $data->body->to_array()[Contents];
print_r_tree($contents[0]);

foreach ($contents as $content) {
  echo (string) $content[Key] . '<br />';
}

?>
