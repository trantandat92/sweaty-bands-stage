<?php
/**
 * @category    Fishpig
 * @package     Fishpig_Wordpress
 * @license     http://fishpig.co.uk/license.txt
 * @author      Ben Tideswell <help@fishpig.co.uk>
 */

abstract class Fishpig_Wordpress_Model_Resource_Post_Abstract extends Fishpig_Wordpress_Model_Resource_Abstract
{
	/**
	 * Custom load SQL
	 *
	 * @param string $field - field to match $value to
	 * @param string|int $value - $value to load record based on
	 * @param Mage_Core_Model_Abstract $object - object we're trying to load to
	 */
	protected function _getLoadSelect($field, $value, $object)
	{
		$select = $this->_getReadAdapter()->select()
			->from(array('e' => $this->getMainTable()))
			->where("e.{$field}=?", $value);

		$select->limit(1);

		return $select;
	}
	
	/**
	 * Retrieve a collection of post comments
	 *
	 * @param Fishpig_Wordpress_Model_Post_Abstract $post
	 * @return Fishpig_Wordpress_Model_Resource_Post_Comment_Collection
	 */
	public function getPostComments(Fishpig_Wordpress_Model_Post_Abstract $post, $userEmail = null)
	{
		return Mage::getResourceModel('wordpress/post_comment_collection')
			->addPostIdFilter($post->getId())
			->addCommentApprovedFilter(1, $userEmail)
			->addOrderByDate();
	}
	
	/**
	 * Retrieve the featured image for the post
	 *
	 * @param Fishpig_Wordpress_Model_Post_Abstract $post
	 * @return Fishpig_Wordpress_Model_Image $image
	 */
	public function getFeaturedImage(Fishpig_Wordpress_Model_Post_Abstract $post)
	{
		if ($images = $post->getImages()) {
			$select = $this->_getReadAdapter()
				->select()
				->from($this->getTable('wordpress/post_meta'), 'meta_value')
				->where('post_id=?', $post->getId())
				->where('meta_key=?', '_thumbnail_id')
				->limit(1);

			if (($imageId = $this->_getReadAdapter()->fetchOne($select)) !== false) {
				if (preg_match('/([a-z-]{1,})([0-9]{1,})/', $imageId, $matches)) {
					if (($prefix = trim($matches[1], '- ')) !== '') {
						$eventData = array(
							'object' => $post,
							'image_id' => $matches[2],
							'original_image_id' => $imageId,
							'result' => new Varien_Object(),
						);
						
						Mage::dispatchEvent('wordpress_post_get_featured_image_' . $prefix, $eventData);
						
						if ($eventData['result']->getFeaturedImage()) {
							return $eventData['result']->getFeaturedImage();
						}
					}
				}
				else {
					return Mage::getModel('wordpress/image')->load($imageId);
				}
			}
		}
		
		return false;
	}
}
