Feature: Google search
  As a new PC owner
  I would like to be able to search on google
  To check my internet connection works

  Scenario: Making a google search
    Given I visit "http://www.google.com
    When I fill in "q" with "test automation"
    And I press "Search"
    Then I should see "Learn about best practices for test automation and continuous integration"

