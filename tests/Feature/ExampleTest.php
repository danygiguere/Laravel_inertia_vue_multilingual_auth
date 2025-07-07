<?php

test('/ redirects to /en', function () {
    $response = $this->get('/');
    $response->assertStatus(302);
    $response->assertRedirect('/en');
});

test('/en returns a successful response', function () {
    $response = $this->get('/en');

    $response->assertStatus(200);
});

test('/fr returns a successful response', function () {
    $response = $this->get('/fr');

    $response->assertStatus(200);
});

test('/de returns a successful response', function () {
    $response = $this->get('/de');

    $response->assertStatus(404);
});


test('/en/dashboard returns a successful response', function () {
    $response = $this->get('/en/dashboard');

    $response->assertStatus(200);
});

test('/fr/dashboard returns a successful response', function () {
    $response = $this->get('/en/dashboard');

    $response->assertStatus(200);
});

