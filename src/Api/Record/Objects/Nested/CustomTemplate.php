<?php

declare(strict_types=1);

namespace Evgeek\Moysklad\Api\Record\Objects\Nested;

use Evgeek\Moysklad\Api\Record\Collections\Nested\CustomTemplateCollection;
use Evgeek\Moysklad\Api\Record\Objects\AbstractNestedObject;
use Evgeek\Moysklad\Dictionaries\Segment;
use Evgeek\Moysklad\Dictionaries\Type;

/**
 * Пользовательский шаблон печатной формы
 *
 * @see https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-shablon-pechatnoj-formy
 *
 * @implements AbstractNestedObject<CustomTemplateCollection>
 */
class CustomTemplate extends AbstractNestedObject
{
    public const PATH = [
        Segment::METADATA,
        Segment::CUSTOMTEMPLATE,
    ];
    public const TYPE = Type::CUSTOMTEMPLATE;
}
