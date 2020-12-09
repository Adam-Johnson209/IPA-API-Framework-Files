
$app->get('/Beer_List', function() {
 require_once('dbconfig.php');
 $query = "select * from library order by id";
 $result = $connection->query($query);
 while ($row = $result->fetch_assoc()){
$data[] = $row;
 }
 echo json_encode($data);
});
