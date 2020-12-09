
$app->post('/Beer_List', function($request){
 require_once('dbconfig.php');
 $query = "INSERT INTO Ber_List (id,Beer_Style,name) VALUES (?,?,?)";
 $statement = $connection->prepare($query);
 $statement->bind_param("sss",$id,$Beer_Style,$name);
 $id = $request->getParsedBody()['id'];
 $Beer_Style = $request->getParsedBody()['Beer_Style'];
 $name = $request->getParsedBody()['name'];
  $stmt->execute();
});
