Feature: Obliczenia

Scenario: Pole kwadratu
Given I am on homepage
When I follow "Pole Kwadratu by szwej0"
And I fill in "A" with "5"
And I press "Oblicz"
Then I should see "Wynik wynosi: 25"
