<?php

class Update extends Eloquent 
{
	protected $fillable = array('summary', 'full', 'img_url');
	protected $gudarded = array('id');
}
