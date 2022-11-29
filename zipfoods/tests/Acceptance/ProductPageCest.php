<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ProductPageCest
{
    // tests
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/product?sku=driscolls-strawberries');

        # Assert the correct title is set on the page
        $I->seeInTitle('Driscoll’s Strawberries');

        # Assert the existence of certain text on the page
        $I->see('Driscoll’s Strawberries');

        # Assert the existence of a certain element on the page
        $I->seeElement('.product-thumb');

        # Assert the existence of text within a specific element on the page
        $I->see('$4.99', '[test=product-price]');
    }

    /**
     * Test we can submit a review for a product
     */
    public function reviewAProductTest(AcceptanceTester $I)
    {
        $name = 'Bob';
        $review = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.';

        # Act
        $I->amOnPage('/product?sku=driscolls-strawberries');
        $I->fillField('[test=reviewer-name-input]', $name);
        $I->fillField('[test=review-textarea]', $review);
        $I->click('[test=review-submit-button]');

        # Assert we see the review confirmation message
        $I->seeElement('[test=review-confirmation]');

        # Assert we see the review on the page
        $I->see($name, '[test=review-name]');
        $I->see($review, '[test=review-content]');
    }
}