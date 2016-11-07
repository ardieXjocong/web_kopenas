<?php
class PagingMsgHome{
	function findPosition($limit){
		if(empty($_GET['msg_page'])){
			$position=0;
			$_GET['msg_page']=1;
		}else{
			$position = ($_GET['msg_page']-1) * $limit;
		}
		return $position;
	}

	function sumPage($allData, $limit){
		$allPage = ceil($allData/$limit);
		return $allPage;
	}

	function navPage($activePage, $allPage){
		$linkPage = "";

		for ($i=1; $i<=$allPage; $i++){
  			if ($i == $activePage){
				if ($i < $allPage)
    				$linkPage .= "<b>$i</b> | ";
				else
					$linkPage .= "<b>$i</b>";
  			}else{
				if ($i < $allPage)
					$linkPage .= "<a href=./?msg_page=$i>$i</a> | ";
				else
					$linkPage .= "<a href=./?msg_page=$i>$i</a>";
			}
			$linkPage .= " ";
		}
		return $linkPage;
	}
}

class PagingOrderOut{
	function findPosition($limit){
		if(empty($_GET['order_page'])){
			$position=0;
			$_GET['order_page']=1;
		}else{
			$position = ($_GET['order_page']-1) * $limit;
		}
		return $position;
	}

	function sumPage($allData, $limit){
		$allPage = ceil($allData/$limit);
		return $allPage;
	}

	function navPage($activePage, $allPage){
		$linkPage = "";

		for ($i=1; $i<=$allPage; $i++){
  			if ($i == $activePage){
				if ($i < $allPage)
    				$linkPage .= "<b>$i</b> | ";
				else
					$linkPage .= "<b>$i</b>";
  			}else{
				if ($i < $allPage)
					$linkPage .= "<a href=./?order_page=$i>$i</a> | ";
				else
					$linkPage .= "<a href=./?order_page=$i>$i</a>";
			}
			$linkPage .= " ";
		}
		return $linkPage;
	}
}

class PagingUsers{
	function findPosition($limit){
		if(empty($_GET['usr_page'])){
			$position=0;
			$_GET['usr_page']=1;
		}else{
			$position = ($_GET['usr_page']-1) * $limit;
		}
		return $position;
	}

	function sumPage($allData, $limit){
		$allPage = ceil($allData/$limit);
		return $allPage;
	}

	function navPage($activePage, $allPage){
		$linkPage = "";

		for ($i=1; $i<=$allPage; $i++){
  			if ($i == $activePage){
				if ($i < $allPage)
    				$linkPage .= "<b>$i</b> | ";
				else
					$linkPage .= "<b>$i</b>";
  			}else{
				if ($i < $allPage)
					$linkPage .= "<a href=./?usr_page=$i>$i</a> | ";
				else
					$linkPage .= "<a href=./?usr_page=$i>$i</a>";
			}
			$linkPage .= " ";
		}
		return $linkPage;
	}
	function navPageDetil($idPage, $activePage, $allPage){
		$linkPage = "";

		for ($i=1; $i<=$allPage; $i++){
  			if ($i == $activePage){
				if ($i < $allPage)
    				$linkPage .= "<b>$i</b> | ";
				else
					$linkPage .= "<b>$i</b>";
  			}else{
				if ($i < $allPage)
					$linkPage .= "<a href=./?detil=show&id=$idPage&usr_page=$i>$i</a> | ";
				else
					$linkPage .= "<a href=./?detil=show&id=$idPage&usr_page=$i>$i</a>";
			}
			$linkPage .= " ";
		}
		return $linkPage;
	}
	
	function navPageView($idPage, $activePage, $allPage){
		$linkPage = "";

		for ($i=1; $i<=$allPage; $i++){
  			if ($i == $activePage){
				if ($i < $allPage)
    				$linkPage .= "<b>$i</b> | ";
				else
					$linkPage .= "<b>$i</b>";
  			}else{
				if ($i < $allPage)
					$linkPage .= "<a href=./?view=$idPage&usr_page=$i>$i</a> | ";
				else
					$linkPage .= "<a href=./?view=$idPage&usr_page=$i>$i</a>";
			}
			$linkPage .= " ";
		}
		return $linkPage;
	}
}
?>