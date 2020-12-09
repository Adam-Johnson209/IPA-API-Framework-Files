
$app->delete('/books/{id}', function($request){
 require_once('db.php');
 $get_id = $request->getAttribute('id');
 $query = "DELETE from Beer_List WHERE id = $get_id";
 $result = $connection->query($query);
});
