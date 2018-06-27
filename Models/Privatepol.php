<?php

use \Illuminate\Database\Eloquent\Builder as QueryBuilder;

class Privatepol extends Eloquent {

	protected $table = 'gdpr_privacy_policy';
	public $timestamps = true;
    protected $fillable = ['cid', 'ip', 'means', 'option', 'created_at', 'update_at'];

}