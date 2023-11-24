<?php

use Tests\TestCase;

uses(TestCase::class);

it('can show the bug', function (){
    $this->get('/')
        ->assertStatus(200);
})->repeat(2000);
