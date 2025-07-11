<?php

declare(strict_types=1);

namespace SoftTent\WpEloquent\Doctrine\Inflector\Rules\English;

use SoftTent\WpEloquent\Doctrine\Inflector\GenericLanguageInflectorFactory;
use SoftTent\WpEloquent\Doctrine\Inflector\Rules\Ruleset;

final class InflectorFactory extends GenericLanguageInflectorFactory
{
    protected function getSingularRuleset() : Ruleset
    {
        return Rules::getSingularRuleset();
    }

    protected function getPluralRuleset() : Ruleset
    {
        return Rules::getPluralRuleset();
    }
}
