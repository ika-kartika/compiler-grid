<?
include('exoraconn.php');
$id=$_GET['id'];
$q_cari_file="select * from file_info where id_file='$id'";
$s_cari_file=oci_parse($c,$q_cari_file);
oci_execute($s_cari_file);
while($data=oci_fetch_array($s_cari_file,OCI_BOTH)){
$filename=$data['EXE_NAME'];

//$filename = 'input.php'; // of course find the exact filename....        
header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: private', false); // required for certain browsers 
//header('Content-Type: application/pdf');

header('Content-Disposition: attachment; filename="'. basename($filename) . '";');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($filename));

readfile($filename);

exit;
}
?>
