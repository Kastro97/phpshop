<?php
namespace Application\Models\Entities;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="topics")
 */
class Topic
{
	/**
	 * @Id @GeneratedValue @Column(type="integer")
	 * @var int
	 **/
	protected $id;

	/**
	 * @ManyToOne(targetEntity="Forum", inversedBy="topics")
	 * @var forum
	 */
	protected $forum;

	/**
	 * @ManyToOne(targetEntity="Customer", inversedBy="topics")
	 * @var customer
	 */
	protected $customer;

	/**
	 * @OneToMany(targetEntity="Answer", mappedBy="topic", cascade={"persist", "remove"})
	 * @var Answer[]
	 */
	protected $answers;

	/**
	 * @Column(type="string")
	 * @var string
	 **/
	protected $title;

	/**
	 * @Column(type="text")
	 * @var string
	 **/
	protected $question;

	/**
	 * @Column(type="boolean")
	 * @var boolean
	 **/
	protected $solved = false;

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
		$this->answers = new ArrayCollection();
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
	 * @return Coupon
	 */
	public function setId( $id ) {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return forum
	 */
	public function getForum() {
		return $this->forum;
	}

	/**
	 * @param forum $forum
	 *
	 * @return Topic
	 */
	public function setForum( $forum ) {
		$this->forum = $forum;

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
	 * @return Topic
	 */
	public function setCustomer( $customer ) {
		$this->customer = $customer;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param string $title
	 *
	 * @return Topic
	 */
	public function setTitle( $title ) {
		$this->title = $title;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getQuestion() {
		return $this->question;
	}

	/**
	 * @param string $question
	 *
	 * @return Topic
	 */
	public function setQuestion( $question ) {
		$this->question = $question;

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

	/**
	 * @return Answer[]
	 */
	public function getAnswers() {
		return $this->answers;
	}

	/**
	 * @return mixed
	 */
	public function getCreatedAt() {
		return $this->created_at;
	}

	/**
	 * @return boolean
	 */
	public function isSolved() {
		return $this->solved;
	}

	/**
	 * @param boolean $solved
	 */
	public function setSolved( $solved ) {
		$this->solved = $solved;
	}
}