<?php

class Pagination {
	
	public $setTotalData;
	public $perPage;
	public $dataPerPage;
	public $totalPage;
	public $currentPage;
	public $base_url;
	
	function __construct($totalData,$perPage,$GETpath, $base_url = null) {
		$this->base_url = $base_url;
		$this->totalData = $totalData;
		$this->perPage = $perPage;
		$this->dataPerPage = $this->dataPerPage($totalData, $perPage);
		$this->totalPage = count($this->dataPerPage);
		$this->GETpath = $GETpath;
		
		if($this->currentPage > $this->totalPage)
			$this->currentPage = $this->totalPage;
				
		if ($this->currentPage < 1)
			$this->currentPage = 1;		
	}
	
	function setPage($currentPage) {
		if($currentPage > $this->totalPage)
			$this->currentPage = $this->totalPage;	
		elseif ($currentPage < 1)
			$this->currentPage = 1;
		else	
			$this->currentPage = $currentPage;
	}
	

	function getDataLimit() {
		if (!isset($this->dataPerPage[1])) {
			$returnVar['start'] = 0;
			$returnVar['end'] = 0; 	
		}
		else {
			$returnVar['start'] = (int)$this->dataPerPage[1] * (int)($this->currentPage - 1);
			$returnVar['end'] = (int)$returnVar['start'] + (int)$this->perPage;
			if($returnVar['end'] > $this->totalData)
			{
				$returnVar['end'] = $this->totalData;
			}
		}
		return $returnVar;
	}
	
	function dataPerPage($totalData,$perPage) {
		$tempArray = Array();
		for($i=0,$count=1;$i < $totalData;$count++)
		{
			$i += $perPage;
			if($i > $totalData)
			{
				$i -= $perPage;
				$tempArray[$count] = $totalData-$i;
				break;
			}
			else
			{
				$tempArray[$count] = $perPage;
			}
		}
		return $tempArray;
	}

	function generateNaviModern($totalPagesToShow) {
		$currentPage = $this->currentPage;
		print '<div id="pageNavi">';
					
			$selected = $currentPage;
			if($totalPagesToShow % 2 == 0) {
				#if $totalPagesToShow is even so change it to odd
				$totalPagesToShow++;
				}
			$midPoint = floor($totalPagesToShow / 2);
				if($currentPage-$midPoint > 2) {
					$currentPage -= $midPoint; 
				print '<a href="?'.$this->base_url.$this->GETpath.'=' . ($selected-1) . '"><h4 class="pagination-center">PREVIOUS</h4></a>';
				print '<a href="?'.$this->base_url.$this->GETpath.'=' . (1) . '">' . (1) . '</a>';
				print "<span>&hellip;</span>";
			}
			else {
				$currentPage = 1;
			}
			
			for($i=$currentPage,$p=1;$p<=$totalPagesToShow;$i++,$p++) {
				if($i <= $this->totalPage) {
					if($selected == $i)
						print '<span id="selected">' . $i . "</span>";
					else	
						print '<a href="?'.$this->base_url.$this->GETpath.'=' . $i. '">' . $i . "</a>";
				}
			}
			if($i <= $this->totalPage) {
				print "<span>&hellip;</span>";
				print '<a href="?'.$this->base_url.$this->GETpath.'=' . $this->totalPage . '">' . $this->totalPage . "</a>";
				print '<a href="?'.$this->base_url.$this->GETpath.'=' . ($selected+1) . '"><h4 class="pagination-center"><b>NEXT</b></h4></a>';
			}

			if ($this->currentPage <= 0) {
				echo "<table border='0' width='100%'><tr><td><h3 align='center'><b>SORRY, NO JOBS TO SHOW</b></h3></td></tr></table>";
			}
		print "</div>";
	}

	function generateNaviClassic()
	{
		$this->currentPage;
		print '<div id="pageNavi">';
		if($this->currentPage < 1 && $this->currentPage > 0) {
			print '<a href="?'.$this->base_url.$this->GETpath.'=' . 1 . '" class="pagination-color"><h4 class="pagination-center"><b>FIRST</b></h4></a>';
		}
		elseif($this->currentPage == 1 && $this->currentPage != $this->totalPage) {
			print '<a href="?'.$this->base_url.$this->GETpath.'=' . ($this->currentPage + 1) . '" class="pagination-color"><h4 class="pagination-center"><b>NEXT</b></h4></a>';
		}
		elseif ($this->currentPage > 1 && $this->currentPage < $this->totalPage) {
			print '<a id="prev" href="?'.$this->base_url.$this->GETpath.'=' . ($this->currentPage - 1) . '" class="pagination-color"><h4 class="pagination-center"><b>PREVIOUS</b></a>&emsp;&emsp;<b>|</b>&emsp;&emsp;';
			print '<a id="next" href="?'.$this->base_url.$this->GETpath.'=' . ($this->currentPage + 1) . '" class="pagination-color"><b>NEXT</b></h4></a>';
		}
		elseif ($this->currentPage == $this->totalPage && $this->currentPage > 1) {
			print '<a id="prev" href="?'.$this->base_url.$this->GETpath.'=' . ($this->currentPage - 1) . '" class="pagination-color"><h4 class="pagination-center"><b>PREVIOUS</b></h4></a>';
		}
		elseif ($this->currentPage > $this->totalPage) {
			print '<a id="prev" href="?'.$this->base_url.$this->GETpath.'=' . $this->totalPage . '" class="pagination-color"><h4 class="pagination-center"><b>LAST PAGE</b></h4></a>';
		}
		else {
			echo "<table border='0' width='100%'><tr><td><h3 class='pagination-center'><b>SORRY, NO JOBS TO SHOW</b></h3></td></tr></table>";
		}
		print '</div>';
	}
}
?>