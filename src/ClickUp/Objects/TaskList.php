<?php

namespace ClickUp\Objects;

class TaskList extends AbstractObject
{
	use TaskFinderTrait;

	/* @var int $id*/
	private $id;

	/* @var string $name */
	private $name;
	
	/* @var TaskCollection $tasks */
	private $tasks;

	/* @var Project|null $space */
	private $project = null;

	/**
	 * @return int
	 */
	public function id()
	{
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function name()
	{
		return $this->name;
	}

	/**
	 * Access parent class.
	 *
	 * @return Project|null
	 */
	public function project()
	{
		return $this->project;
	}

	/**
	 * @param Project $project
	 */
	public function setProject(Project $project)
	{
		$this->project = $project;
	}

	/**
	 * @param string $name
	 */
	public function editName($name)
	{
		// TODO
	}

	/**
	 * @param string             $name
	 * @param string             $content
	 * @param int[]              $assignees
	 * @param string             $statusName
	 * @param int                $priority
	 * @param \DateTimeInterface $dueDate
	 */
	public function createTask($name, $content, $assignees, $statusName, $priority, \DateTimeInterface $dueDate)
	{
		// TODO
	}

	/**
	 * @return int
	 */
	public function teamId()
	{
		return $this->project()->space()->team()->id();
	}

	/**
	 * @return array
	 */
	public function taskFindParams()
	{
		return ['list_ids' => [$this->id()]];
	}

	/**
	 * @param array $array
	 */
	protected function fromArray($array)
	{
		$this->id = $array['id'];
		$this->name = $array['name'];
	}
}
