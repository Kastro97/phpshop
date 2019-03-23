<?php
namespace Application\Models\Entities;

/**
 * @Entity
 * @Table(name="coupons")
 */
class Coupon
{
	/**
	 * @Id @GeneratedValue @Column(type="integer")
	 * @var int
	 **/
	protected $id;

	/**
	 * @Column(type="string")
	 * @var string
	 **/
	protected $name;

	/**
	 * @Column(type="text")
	 * @var string
	 **/
	protected $description;

	/**
	 * @Column(type="smallint")
	 * @var number
	 **/
	protected $number_uses;

	/**
	 * @Column(type="float", precision=2)
	 * @var float
	 **/
	protected $discount;

	/**
	 * @Column(type="string")
	 * @var string
	 **/
	protected $type_discount = "%";

	/**
	 * @Column(type="boolean")
	 * @var boolean
	 **/
	protected $active = true;

	/**
	 * @Column(type="datetime")
	 **/
	protected $created_at;

	/**
	 * @Column(type="datetime", nullable=true)
	 **/
	protected $updated_at;

	/**
	 * @Column(type="datetime", nullable=true)
	 **/
	protected $deleted_at;

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
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 *
	 * @return Coupon
	 */
	public function setName( $name ) {
		$this->name = $name;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param string $description
	 *
	 * @return Coupon
	 */
	public function setDescription( $description ) {
		$this->description = $description;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getNumberUses() {
		return $this->number_uses;
	}

	/**
	 * @param string $number_uses
	 *
	 * @return Coupon
	 */
	public function setNumberUses( $number_uses ) {
		$this->number_uses = $number_uses;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getDiscount() {
		return $this->discount;
	}

	/**
	 * @param float $discount
	 *
	 * @return Coupon
	 */
	public function setDiscount( $discount ) {
		$this->discount = $discount;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTypeDiscount() {
		return $this->type_discount;
	}

	/**
	 * @param string $type_discount
	 *
	 * @return Coupon
	 */
	public function setTypeDiscount( $type_discount ) {
		$this->type_discount = $type_discount;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isActive() {
		return $this->active;
	}

	/**
	 * @param boolean $active
	 *
	 * @return Coupon
	 */
	public function setActive( $active ) {
		$this->active = $active;

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
	 * @return Coupon
	 */
	public function setUpdatedAt( $updated_at ) {
		$this->updated_at = $updated_at;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDeletedAt() {
		return $this->deleted_at;
	}

	/**
	 * @param mixed $deleted_at
	 *
	 * @return Coupon
	 */
	public function setDeletedAt( $deleted_at ) {
		$this->deleted_at = $deleted_at;

		return $this;
	}
}