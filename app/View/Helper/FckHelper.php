<?php

class FckHelper extends AppHelper { 

    var $helpers = Array('Html', 'Js'); 

	function ckedit($id, $content=''){
		$parts = explode('.',$id);
		$parts[0] = ucfirst($parts[0]);
		$code = "";
		$textarea = "<textarea class=\"ckeditor\" id=\"".$parts[0].ucfirst($parts[1])."\"
rows=\"6\" cols=\"30\" name=\"data[".$parts[0]."][".$parts[1]."]\">
".$content."</textarea>";
		return $textarea.$code;	

	}
}

?>