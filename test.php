<?php
$val = getopt("p:");
print(join(',', $val));
$headers = array('GUID', 'Title', 'Abstract', 'status', 'file url', 'Download count', 'URL', 'Preprint DOI', 'Publisher DOI', 'Date created', 'Date modified');
// Save the data to a CSV.
$csv = fopen('engrxiv-papers.csv', 'a+');
fputcsv($csv, $headers);
fclose($csv);
?>