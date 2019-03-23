<?php
namespace Application\Models\Entities;

/**
 * @Entity(repositoryClass="Application\Models\Repositories\CourseRepository")
 * @Table(name="courses")
 */
class Course
{
	/**
	 * @Id @GeneratedValue @Column(type="integer")
	 * @var int
	 **/
	protected $id;

	/**
	 * @ManyToMany(targetEntity="Customer", mappedBy="courses", cascade={"persist"})
	 **/
	protected $customers;

	/**
	 * @OneToOne(targetEntity="Forum")
	 * @JoinColumn(name="forum_id", referencedColumnName="id")
	 */
	protected $forum;

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
	 * @Column(type="string")
	 * @var string
	 **/
	protected $featured_image = "course.jpg";

	/**
	 * @Column(type="float", precision=2)
	 * @var float
	 **/
	protected $price;

	/**
	 * @Column(type="boolean")
	 * @var boolean
	 **/
	protected $is_featured = false;

	/**
	 * @Column(type="string")
	 * @var string
	 **/
	protected $teacher;

	/**
	 * @Column(type="datetime")
	 **/
	protected $created_at;

	/**
	 * @Column(type="datetime")
	 **/
	protected $updated_at;

	/**
	 * @Column(type="datetime")
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
	 * @return mixed
	 */
	public function getCustomers() {
		return $this->customers;
	}

	/**
	 * @return mixed
	 */
	public function getForum() {
		return $this->forum;
	}

	/**
	 * @param mixed $forum
	 */
	public function setForum( $forum ) {
		$this->forum = $forum;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName( $name ) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription( $description ) {
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getFeaturedImage() {
		return $this->featured_image;
	}

	/**
	 * @param string $featured_image
	 */
	public function setFeaturedImage( $featured_image ) {
		$this->featured_image = $featured_image;
	}

	/**
	 * @return float
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * @param float $price
	 */
	public function setPrice( $price ) {
		$this->price = $price;
	}

	/**
	 * @return boolean
	 */
	public function isIsFeatured() {
		return $this->is_featured;
	}

	/**
	 * @param boolean $is_featured
	 */
	public function setIsFeatured( $is_featured ) {
		$this->is_featured = $is_featured;
	}

	/**
	 * @return string
	 */
	public function getTeacher() {
		return $this->teacher;
	}

	/**
	 * @param string $teacher
	 */
	public function setTeacher( $teacher ) {
		$this->teacher = $teacher;
	}

	/**
	 * @return mixed
	 */
	public function getCreatedAt() {
		return $this->created_at;
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

	/**
	 * @return mixed
	 */
	public function getDeletedAt() {
		return $this->deleted_at;
	}

	/**
	 * @param mixed $deleted_at
	 */
	public function setDeletedAt( $deleted_at ) {
		$this->deleted_at = $deleted_at;
	}

	/**
	 * @param Customer $customer
	 */
	public function addCustomer(Customer $customer)
	{
		if (!$this->customers->contains($customer)) {
			$this->customers->add($customer);
			$customer->addCourse($this);
		}
	}
}