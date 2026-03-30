<?php

test('the root URL redirects to the login page', function () {
    $response = $this->get('/');

    $response->assertRedirect('/login');
});
