<?php
namespace Application\Models\Entities;

/**
 * @Entity
 * @Table(name="answers")
 */
class Answer
{
	/**
	 * @Id @GeneratedValue @Column(type="integer")
	 * @var int
	 **/
	protected $id;

	/**
	 * @ManyToOne(targetEntity="Topic", inversedBy="answers")
	 * @var topic
	 */
	protected $topic;

	/**
	 * @ManyToOne(targetEntity="Customer", inversedBy="topics")
	 * @var customer
	 */
	protected $customer;

	/**
	 * @Column(type="text")
	 * @var string
	 **/
	protected $answer;

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
	 * @return topic
	 */
	public function getTopic() {
		return $this->topic;
	}

	/**
	 * @param topic $topic
	 *
	 * @return Answer
	 */
	public function setTopic( $topic ) {
		$this->topic = $topic;

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
	 * @return Answer
	 */
	public function setCustomer( $customer ) {
		$this->customer = $customer;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAnswer() {
		return $this->answer;
	}

	/**
	 * @param string $answer
	 *
	 * @return Answer
	 */
	public function setAnswer( $answer ) {
		$this->answer = $answer;

		return $this;
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
	 *
	 * @return Answer
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
	 * @return Answer
	 */
	public function setDeletedAt( $deleted_at ) {
		$this->deleted_at = $deleted_at;

		return $this;
	}
}