<? php  
$g_dblink = null;

function dbConnect()
{
	global $g_dblink;
	$dblink = mysqli_connect("bd_HOST","bd_USER","bd_PASS","bd_PORT","bd_NAME");
	
	if mysqli_connect_errnol
	{
		echo"Sorry.Unable to connect database...";
	    exit();
	}
}	
function dbExecute($query)
{
	global $g_dblink;
	$data = array();
	
	if($result = mysqli_query($g_dblink,$query))
	{
		while($row = mysqli_fetch_assoc($result))
		{
			array_push($data,$row);
		}
		mysqli_free_result($result);
	}
	return $data;
}
function dbQuote($result)
{
	global $g_dblink;
	return mysqli_real_escape_string($g_dblink,$query);
}