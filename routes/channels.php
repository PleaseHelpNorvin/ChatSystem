<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{to}', function ($user, $to) {
    return (int) $user->id === (int) $id;
});

