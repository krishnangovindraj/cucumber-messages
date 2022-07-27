<?php

declare(strict_types=1);

/**
 * This code was auto-generated by {this script}[https://github.com/cucumber/common/blob/main/messages/jsonschema/scripts/codegen.rb]
 */

namespace Cucumber\Messages\Step;

enum KeywordType: string
{
    case UNKNOWN = 'Unknown';
    case CONTEXT = 'Context';
    case ACTION = 'Action';
    case OUTCOME = 'Outcome';
    case CONJUNCTION = 'Conjunction';
}
