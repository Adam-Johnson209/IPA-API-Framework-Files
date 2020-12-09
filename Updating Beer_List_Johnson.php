
$app->put('/Beer_List/{id}', function($request){
 require_once('db.php');
 $get_id = $request->getAttribute('id');
 $query = "UPDATE library SET id = ?, Beer_Style = ?, name = ? WHERE id = $get_id";
 $stmt = $connection->prepare($query);
 $stmt->bind_param("sss",$id,$Beer_Style,$name);
 $id = $request->getParsedBody()['id'];
 $Beer_Style = $request->getParsedBody()['Beer_Style'];
 $name = $request->getParsedBody()['name'];
 $stmt->execute();
});
