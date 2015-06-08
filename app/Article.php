<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title',
		'body',
		'published_at',
		'user_id'
	];

	protected $dates = [ 'published_at' ];

	public function setPublishedAtAttribute( $date ) {
		$this->attributes['published_at'] = Carbon::createFromFormat( 'Y-m-d', $date );
//        $this->attributes['published_at'] = Carbon::parse($date); // if you want the time to be 00:00:00
	}

	public function scopePublished( $query ) {
		return $query->where( 'published_at', '<=', Carbon::now() );
	}

	public function scopeUnpublished( $query ) {
		return $query->where( 'published_at', '>=', Carbon::now() );
	}

	public function user() {
		return $this->belongsTo( 'App\User' );
	}

	public function comments() {
		return $this->hasMany( 'App\Comment' );
	}

	public function tags() {
		return $this->belongsToMany('App\Tag');
	}

	/**
	 *
	 * @return array
	 */
	public function getTagListAttribute() {
		return $this->tags->lists('id');
	}

	/**
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function categories() {
		return $this->belongsToMany('App\Category');
	}

	public function getCategoryListAttribute() {
		return $this->categories->lists('id');
	}

}
