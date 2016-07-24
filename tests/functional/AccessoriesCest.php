<?php


class AccessoriesCest
{
    public function _before(FunctionalTester $I)
    {
        exec("mysql -u snipeit -psnipe snipeit < tests/_data/dump.sql");
         $I->amOnPage('/login');
         $I->fillField('username', 'snipeit');
         $I->fillField('password', 'snipeit');
         $I->click('Login');
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->wantTo('ensure that the create accessories form loads without errors');
        $I->lookForwardTo('seeing it load without errors');
        $I->amOnPage('/admin/accessories/create');
        $I->dontSee('Create Accessory', '.page-header');
        $I->see('Create Accessory', 'h1.pull-left');
        $I->dontSee('&lt;span class=&quot;');
         $I->dontSee('&lt;span class=&quot;');

        $I->wantTo("Test Validation Fails with blank elements");
        $I->click('Save');
        $I->seeElement('.alert-danger');
        $I->see('The name field is required.', '.alert-msg');
        $I->see('The category id field is required.', '.alert-msg');
        $I->see('The qty field is required.', '.alert-msg');
        $I->wantTo("Test Validation Fails with short name");
        $I->fillField('name', 't2');
        $I->fillField('qty', '-15');
        $I->fillField('min_amt', '-15');
        $I->click('Save');
        $I->seeElement('.alert-danger');
        $I->see('The name must be at least 3 characters', '.alert-msg');
        $I->see('The qty must be at least 1', '.alert-msg');
        $I->see('The min amt must be at least 1', '.alert-msg');
        $I->wantTo("Test Validation Succeeds");
        $I->fillField('name', 'TestAccessory');
        $I->fillField('qty', '12');
        $I->fillField('min_amt', '15');
        $I->selectOption('form select[name=category_id]', 'Test Accessory');
        $I->click('Save');
        $I->dontSee('&lt;span class=&quot;');
        $I->seeElement('.alert-success');
    }
}
