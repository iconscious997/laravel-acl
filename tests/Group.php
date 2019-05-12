<?php

namespace Junges\ACL\Test;

use Illuminate\Database\Eloquent\Model;
use Junges\ACL\Events\GroupSaving;
use Junges\ACL\Traits\GroupsTrait;

class Group extends Model
{
    use GroupsTrait;

    protected $dates = ['deleted_at'];
    protected $table = 'test_groups';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'description',
    ];

    protected $dispatchesEvents = [
      'creating' => GroupSaving::class
    ];
}