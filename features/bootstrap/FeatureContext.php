<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context;



/**
 * Features context.
 */
class FeatureContext extends Context\MinkContext
{

    /**
     * @When /^I search for "([^"]*)"$/
     */
    public function iSearchFor2($field)
    {
        $this -> fillField("q", "test automation");
        $this -> pressButton("Search");
    }

}
