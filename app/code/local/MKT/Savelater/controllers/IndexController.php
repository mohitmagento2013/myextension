<?php
class MKT_Savelater_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/savelater?id=15 
    	 *  or
    	 * http://site.com/savelater/id/15 	
    	 */
    	/* 
		$savelater_id = $this->getRequest()->getParam('id');

  		if($savelater_id != null && $savelater_id != '')	{
			$savelater = Mage::getModel('savelater/savelater')->load($savelater_id)->getData();
		} else {
			$savelater = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($savelater == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$savelaterTable = $resource->getTableName('savelater');
			
			$select = $read->select()
			   ->from($savelaterTable,array('savelater_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$savelater = $read->fetchRow($select);
		}
		Mage::register('savelater', $savelater);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}