<?php

use Tests\TestCase;

uses(TestCase::class);

it('can show the bug', function (){
    $this->get('/')
        ->assertStatus(200);
})->repeat(5000); // You might need to increase this number depending on how much memory is allocated to PHP.
