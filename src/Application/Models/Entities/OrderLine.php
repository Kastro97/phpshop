<?php
namespace Application\Models\Entities;

/**
 * @Entity
 * @Table(name="order_lines")
 */
class OrderLine
{
	/**
	 * @Id @GeneratedValue @Column(type="integer")
	 * @var int
	 **/
	protected $id;

	/**
	 * @ManyToOne(targetEntity="Order", inversedBy="order_lines")
	 * @var order
	 */
	protected $order;

	/**
	 * @ManyToOne(targetEntity="Course", inversedBy="orders")
	 * @var course
	 */
	protected $course;

	/**
	 * @Column(type="integer")
	 * @var integer
	 **/
	protected $qty;

	/**
	 * @Column(type="float", scale=2)
	 * @var float
	 **/
	protected $unit_price;

	/**
	 * @Column(type="datetime")
	 **/
	protected $created_at;

	/**
	 * @Column(type="datetime", nullable=true)
	 **/
	protected $updated_at;

	public function __construct()
	{
		$this->created_at = new \DateTime("now");
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * @return order
	 */
	public function getOrder() {
		return $this->order;
	}

	/**
	 * @param order $order
	 */
	public function setOrder( $order ) {
		$this->order = $order;
	}

	/**
	 * @return course
	 */
	public function getCourse() {
		return $this->course;
	}

	/**
	 * @param course $course
	 */
	public function setCourse( $course ) {
		$this->course = $course;
	}

	/**
	 * @return int
	 */
	public function getQty() {
		return $this->qty;
	}

	/**
	 * @param int $qty
	 */
	public function setQty( $qty ) {
		$this->qty = $qty;
	}

	/**
	 * @return float
	 */
	public function getUnitPrice() {
		return $this->unit_price;
	}

	/**
	 * @param float $unit_price
	 */
	public function setUnitPrice( $unit_price ) {
		$this->unit_price = $unit_price;
	}

	/**
	 * @return mixed
	 */
	public function getCreatedAt() {
		return $this->created_at;
	}

	/**
	 * @param mixed $created_at
	 */
	public function setCreatedAt( $created_at ) {
		$this->created_at = $created_at;
	}

	/**
	 * @return mixed
	 */
	public function getUpdatedAt() {
		return $this->updated_at;
	}

	/**
	 * @param mixed $updated_at
	 */
	public function setUpdatedAt( $updated_at ) {
		$this->updated_at = $updated_at;
	}
}