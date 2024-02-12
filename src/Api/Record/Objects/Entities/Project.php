<?php

declare(strict_types=1);

namespace Evgeek\Moysklad\Api\Record\Objects\Entities;

use Evgeek\Moysklad\Api\Record\Collections\Entities\ProjectCollection;
use Evgeek\Moysklad\Api\Record\Objects\AbstractConcreteObject;
use Evgeek\Moysklad\Dictionaries\Segment;
use Evgeek\Moysklad\Dictionaries\Type;

/**
 * Проект
 *
 * @see https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-proekt
 *
 * @implements AbstractConcreteObject<ProjectCollection>
 */
class Project extends AbstractEntity
{
    public const PATH = [
        Segment::ENTITY,
        Segment::PROJECT,
    ];
    public const TYPE = Type::PROJECT;
}
