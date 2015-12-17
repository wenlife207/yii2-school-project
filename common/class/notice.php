<?php

namespace  common\class;
/**
*
*@po
*
*
*
**/
class Notice
{

	public function setTitle($noticeTitle)
	{
		$this->title = $noticeTitle;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setPublisher($noticePublisher)
	{
		$this->publisher = $noticePublisher;
	}

	public function getPublisher()
	{
		return $this->publisher;
	}

 	public function setImportance($noticeImportance)
 	{
 		$this->importance = $noticeImportance;
 	}
 	public function getImportance()
 	{
 		return $this->importance;
 	}

 	public function setBeginDate($noticeBeginDate)
 	{
 		$this->beginDate = $noticeBeginDate;
 	}

 	public function getBeginDate()
 	{
 		return $this->beginDate;
 	}
 	public function setEndDate($noticeEndDate)
 	{
 		$this->endDate = $noticeEndDate;
 	}

 	public function getEndDate()
 	{
 		return $this->endDate;
 	}

 	public function setContent($noticeContent)
 	{
 		$this->content = $noticeContent;
 	}
 	public function getContent()
 	{
 		return $this->content;
 	}
    
    public function setPublishDate()
    {
    	$this->publishDate = date('Y:m:d');
    }
    public function getPublishDate()
    {
    	return $this->publishDate;
    }

	public function init($noticeParam)
	{

     
	}

	public function checkNoticeDateExpire()
	{

	}

}


?>