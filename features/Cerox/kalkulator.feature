Feature: Obliczenia

  Scenario: Kalkulator a + b
    Given I am on homepage
    When I follow "Kalkulator by MichalDebowski"
    And I fill in "A" with "4"
    And I fill in "B" with "3"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 7"