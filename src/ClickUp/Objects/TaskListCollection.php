<?php

namespace ClickUp\Objects;

/**
 * @method TaskList   getByKey(int $id)
 * @method TaskList   getByName(string $name)
 * @method TaskList[] objects()
 * @method TaskList[] getIterator()
 */
class TaskListCollection extends AbstractObjectCollection
{
    public function __construct($parent, $array)
    {
        parent::__construct($parent->client(), $array);
        //$parent cand be folder or space
        if (get_class($parent) == 'ClickUp\Objects\Folder') {
            foreach ($this as $taskList) {
                $taskList->setFolder($parent);
            }
        }

        if (get_class($parent) == 'ClickUp\Objects\Space') {
            foreach ($this as $taskList) {
                $taskList->setSpace($parent);
            }
        }

    }

    /**
     * @return string
     */
    protected function objectClass(): string
    {
        return TaskList::class;
    }
}
