<?php
namespace Application\Models\Entities;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="customers")
 */
class Customer
{
	/**
	 * @Id @GeneratedValue @Column(type="integer")
	 * @var int
	 **/
	protected $id;

	/**
	 * @ManyToMany(targetEntity="Course", inversedBy="customers", cascade={"persist"})
	 * @JoinTable(name="courses_customers")
	 **/
	protected $courses;

	/**
	 * @OneToMany(targetEntity="Topic", mappedBy="customer", cascade={"persist", "remove"})
	 * @var Topic[]
	 */
	protected $topics;

	/**
	 * @OneToMany(targetEntity="Answer", mappedBy="customer", cascade={"persist", "remove"})
	 * @var Answer[]
	 */
	protected $answers;

	/**
	 * @Column(type="string")
	 * @var string
	 **/
	protected $email;

	/**
	 * @Column(type="string")
	 * @var string
	 **/
	protected $password;

	/**
	 * @Column(type="string", nullable=true)
	 * @var string
	 **/
	protected $firstname;

	/**
	 * @Column(type="string", nullable=true)
	 * @var string
	 **/
	protected $lastname;

	/**
	 * @Column(type="string")
	 * @var string
	 **/
	protected $token;

	/**
	 * @Column(type="boolean")
	 * @var booleanCo
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

	public function __construct()
	{
		$this->created_at = new \DateTime("now");
		$this->topics = new ArrayCollection();
		$this->courses = new ArrayCollection();
		$this->answers = new ArrayCollection();
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
	public function getCourses() {
		return $this->courses;
	}



	/**
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @param string $email
	 *
	 * @return Customer
	 */
	public function setEmail( $email ) {
		$this->email = $email;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @param string $password
	 *
	 * @return Customer
	 */
	public function setPassword( $password ) {
		$this->password = $password;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * @param string $firstname
	 *
	 * @return Customer
	 */
	public function setFirstname( $firstname ) {
		$this->firstname = $firstname;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * @param string $lastname
	 *
	 * @return Customer
	 */
	public function setLastname( $lastname ) {
		$this->lastname = $lastname;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getToken() {
		return $this->token;
	}

	/**
	 * @param string $token
	 *
	 * @return Customer
	 */
	public function setToken( $token ) {
		$this->token = $token;

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
	 * @return Customer
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
	 * @return Customer
	 */
	public function setUpdatedAt( $updated_at ) {
		$this->updated_at = $updated_at;

		return $this;
	}

	/**
	 * @return Topic[]
	 */
	public function getTopics() {
		return $this->topics;
	}

	/**
	 * @param Course $course
	 */
	public function addCourse(Course $course)
	{
		if (!$this->courses->contains($course)) {
			$this->courses->add($course);
			$course->addCustomer($this);
		}
	}
}