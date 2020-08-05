<?php
namespace App;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

trait VotableT
{
    public function votes() {
        return $this->morphToMany(User::class, 'votable');
    }

    public function upVotes() {
        return $this->votes()->wherePivot('vote', 1);
    }

    public function downVotes() {
        return $this->votes()->wherePivot('vote', -1);
    }

}