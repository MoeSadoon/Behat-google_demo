Feature: Google search
  As a new PC owner
  I would like to be able to search on google
  To check my internet connection works

  @javascript
  Scenario: Making a google search
    Given I go to "http://www.google.com"
    When I search for "test automation"
    Then I should see "Test automation - Wikipedia, the free encyclopedia"

