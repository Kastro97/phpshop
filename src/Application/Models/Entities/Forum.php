<?php
namespace Application\Models\Entities;

/**
 * @Entity
 * @Table(name="forums")
 */
class Forum
{
	/**
	 * @Id @GeneratedValue @Column(type="integer")
	 * @var int
	 **/
	protected $id;

	/**
	 * @OneToMany(targetEntity="Topic", mappedBy="forum", cascade={"persist", "remove"})
	 * @var Topic[]
	 */
	protected $topics;

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
	 * @Column(type="boolean")
	 * @var boolean
	 **/
	protected $status = true;

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
		$this->topics = new ArrayCollection();
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
	 * @return Forum
	 */
	public function setId( $id ) {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return Topic[]
	 */
	public function getTopics() {
		return $this->topics;
	}

	/**
	 * @param Topic[] $topics
	 *
	 * @return Forum
	 */
	public function setTopics( $topics ) {
		$this->topics = $topics;

		return $this;
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
	 * @return Forum
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
	 * @return Forum
	 */
	public function setDescription( $description ) {
		$this->description = $description;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isStatus() {
		return $this->status;
	}

	/**
	 * @param boolean $status
	 *
	 * @return Forum
	 */
	public function setStatus( $status ) {
		$this->status = $status;

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
	 * @return Forum
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
	 * @return Forum
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
	 * @return Forum
	 */
	public function setDeletedAt( $deleted_at ) {
		$this->deleted_at = $deleted_at;

		return $this;
	}
}