<?php
namespace Common\Model;

class Post extends BaseModelObject{
	public $id;
	public $post_author;
	public $post_date;
	public $post_date_gmt;
	public $post_content;
	public $post_title;
	public $post_excerpt;
	public $post_status;
	public $comment_status;
	public $ping_status;
	public $post_password;
	public $post_name;
	public $to_ping;
	public $pinged;
	public $post_modified;
	public $post_modified_gmt;
	public $post_content_filtered;
	public $post_parent;
	public $guid;
	public $menu_order;
	public $post_type;
	public $post_mime_type;
	public $comment_count;
	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @return the $post_author
	 */
	public function getPost_author() {
		return $this->post_author;
	}
	
	/**
	 * @return the $post_date
	 */
	public function getPost_date() {
		return $this->post_date;
	}
	
	/**
	 * @return the $post_date_gmt
	 */
	public function getPost_date_gmt() {
		return $this->post_date_gmt;
	}
	
	/**
	 * @return the $post_content
	 */
	public function getPost_content() {
		return $this->post_content;
	}
	
	/**
	 * @return the $post_title
	 */
	public function getPost_title() {
		return $this->post_title;
	}
	
	/**
	 * @return the $post_excerpt
	 */
	public function getPost_excerpt() {
		return $this->post_excerpt;
	}
	
	/**
	 * @return the $post_status
	 */
	public function getPost_status() {
		return $this->post_status;
	}
	
	/**
	 * @return the $comment_status
	 */
	public function getComment_status() {
		return $this->comment_status;
	}
	
	/**
	 * @return the $ping_status
	 */
	public function getPing_status() {
		return $this->ping_status;
	}
	
	/**
	 * @return the $post_password
	 */
	public function getPost_password() {
		return $this->post_password;
	}
	
	/**
	 * @return the $post_name
	 */
	public function getPost_name() {
		return $this->post_name;
	}
	
	/**
	 * @return the $to_ping
	 */
	public function getTo_ping() {
		return $this->to_ping;
	}
	
	/**
	 * @return the $pinged
	 */
	public function getPinged() {
		return $this->pinged;
	}
	
	/**
	 * @return the $post_modified
	 */
	public function getPost_modified() {
		return $this->post_modified;
	}
	
	/**
	 * @return the $post_modified_gmt
	 */
	public function getPost_modified_gmt() {
		return $this->post_modified_gmt;
	}
	
	/**
	 * @return the $post_content_filtered
	 */
	public function getPost_content_filtered() {
		return $this->post_content_filtered;
	}
	
	/**
	 * @return the $post_parent
	 */
	public function getPost_parent() {
		return $this->post_parent;
	}
	
	/**
	 * @return the $guid
	 */
	public function getGuid() {
		return $this->guid;
	}
	
	/**
	 * @return the $menu_order
	 */
	public function getMenu_order() {
		return $this->menu_order;
	}
	
	/**
	 * @return the $post_type
	 */
	public function getPost_type() {
		return $this->post_type;
	}
	
	/**
	 * @return the $post_mime_type
	 */
	public function getPost_mime_type() {
		return $this->post_mime_type;
	}
	
	/**
	 * @return the $comment_count
	 */
	public function getComment_count() {
		return $this->comment_count;
	}
	
	/**
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
	}
	
	/**
	 * @param field_type $post_author
	 */
	public function setPost_author($post_author) {
		$this->post_author = $post_author;
	}
	
	/**
	 * @param field_type $post_date
	 */
	public function setPost_date($post_date) {
		$this->post_date = $post_date;
	}
	
	/**
	 * @param field_type $post_date_gmt
	 */
	public function setPost_date_gmt($post_date_gmt) {
		$this->post_date_gmt = $post_date_gmt;
	}
	
	/**
	 * @param field_type $post_content
	 */
	public function setPost_content($post_content) {
		$this->post_content = $post_content;
	}
	
	/**
	 * @param field_type $post_title
	 */
	public function setPost_title($post_title) {
		$this->post_title = $post_title;
	}
	
	/**
	 * @param field_type $post_excerpt
	 */
	public function setPost_excerpt($post_excerpt) {
		$this->post_excerpt = $post_excerpt;
	}
	
	/**
	 * @param field_type $post_status
	 */
	public function setPost_status($post_status) {
		$this->post_status = $post_status;
	}
	
	/**
	 * @param field_type $comment_status
	 */
	public function setComment_status($comment_status) {
		$this->comment_status = $comment_status;
	}
	
	/**
	 * @param field_type $ping_status
	 */
	public function setPing_status($ping_status) {
		$this->ping_status = $ping_status;
	}
	
	/**
	 * @param field_type $post_password
	 */
	public function setPost_password($post_password) {
		$this->post_password = $post_password;
	}
	
	/**
	 * @param field_type $post_name
	 */
	public function setPost_name($post_name) {
		$this->post_name = $post_name;
	}
	
	/**
	 * @param field_type $to_ping
	 */
	public function setTo_ping($to_ping) {
		$this->to_ping = $to_ping;
	}
	
	/**
	 * @param field_type $pinged
	 */
	public function setPinged($pinged) {
		$this->pinged = $pinged;
	}
	
	/**
	 * @param field_type $post_modified
	 */
	public function setPost_modified($post_modified) {
		$this->post_modified = $post_modified;
	}
	
	/**
	 * @param field_type $post_modified_gmt
	 */
	public function setPost_modified_gmt($post_modified_gmt) {
		$this->post_modified_gmt = $post_modified_gmt;
	}
	
	/**
	 * @param field_type $post_content_filtered
	 */
	public function setPost_content_filtered($post_content_filtered) {
		$this->post_content_filtered = $post_content_filtered;
	}
	
	/**
	 * @param field_type $post_parent
	 */
	public function setPost_parent($post_parent) {
		$this->post_parent = $post_parent;
	}
	
	/**
	 * @param field_type $guid
	 */
	public function setGuid($guid) {
		$this->guid = $guid;
	}
	
	/**
	 * @param field_type $menu_order
	 */
	public function setMenu_order($menu_order) {
		$this->menu_order = $menu_order;
	}
	
	/**
	 * @param field_type $post_type
	 */
	public function setPost_type($post_type) {
		$this->post_type = $post_type;
	}
	
	/**
	 * @param field_type $post_mime_type
	 */
	public function setPost_mime_type($post_mime_type) {
		$this->post_mime_type = $post_mime_type;
	}
	
	/**
	 * @param field_type $comment_count
	 */
	public function setComment_count($comment_count) {
		$this->comment_count = $comment_count;
	}

}