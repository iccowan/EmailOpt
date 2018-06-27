<?php

use \Illuminate\Database\Eloquent\Builder as QueryBuilder;

class Opt extends Eloquent {

	protected $table = 'gdpr_compliance';
	public $timestamps = true;
    protected $fillable = ['cid', 'ip', 'means', 'option', 'created_at', 'update_at'];

}