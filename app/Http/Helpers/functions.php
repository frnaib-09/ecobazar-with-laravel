<?php

function getProfileImage() {
    return auth()->user()->photo ? asset('storage/'. auth()->user()->photo) : env('DICE_BEAR_API') . auth()->user()->name;
}
