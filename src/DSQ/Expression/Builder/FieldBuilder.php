<?php
/**
 * This file is part of DomainSpecificQuery
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Nicolò Martini <nicmartnic@gmail.com>
 */

namespace DSQ\Expression\Builder;


use DSQ\Expression\BinaryExpression;

class FieldBuilder extends BinaryBuilder
{
    function start($name = null, $value = null, $operator = '=')
    {
        return parent::start($operator, $name, $value, $name);
    }
}