<?php
namespace Application\Models\Entities;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="orders")
 */
class Order
{
	/**
	 * @Id @GeneratedValue @Column(type="integer")
	 * @var int
	 **/
	protected $id;

	/**
	 * @ManyToOne(targetEntity="Customer", inversedBy="orders")
	 * @var customer
	 */
	protected $customer;

	/**
	 * @OneToMany(targetEntity="OrderLine", mappedBy="order", cascade={"persist", "remove"})
	 * @var OrderLine[]
	 */
	protected $orderLines;

	/**
	 * @Column(type="string")
	 * @var string
	 **/
	protected $total;

	/**
	 * @Column(type="boolean")
	 * @var boolean
	 **/
	protected $completed = 1;

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
		$this->orderLines = new ArrayCollection();
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return Order
	 */
	public function setId( $id ) {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return customer
	 */
	public function getCustomer() {
		return $this->customer;
	}

	/**
	 * @param customer $customer
	 *
	 * @return Order
	 */
	public function setCustomer( $customer ) {
		$this->customer = $customer;

		return $this;
	}

	/**
	 * @return OrderLine[]
	 */
	public function getOrderLines() {
		return $this->orderLines;
	}

	/**
	 * @param OrderLine[] $orderLines
	 *
	 * @return Order
	 */
	public function setOrderLines( $orderLines ) {
		$this->orderLines = $orderLines;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTotal() {
		return $this->total;
	}

	/**
	 * @param string $total
	 *
	 * @return Order
	 */
	public function setTotal( $total ) {
		$this->total = $total;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCompleted() {
		return $this->completed;
	}

	/**
	 * @param string $completed
	 *
	 * @return Order
	 */
	public function setCompleted( $completed ) {
		$this->completed = $completed;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCreatedAt() {
		return $this->created_at;
	}

	/**
	 * @param mixed $created_at
	 *
	 * @return Order
	 */
	public function setCreatedAt( $created_at ) {
		$this->created_at = $created_at;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUpdatedAt() {
		return $this->updated_at;
	}

	/**
	 * @param mixed $updated_at
	 *
	 * @return Order
	 */
	public function setUpdatedAt( $updated_at ) {
		$this->updated_at = $updated_at;

		return $this;
	}
}