<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategory extends Model
{
    use SoftDeletes;

    public const CATEGORY_Y_KIEN_KHACH_HANG = 101;
    public const CATEGORY_ANH_BAN_GIAO = 102;
    public const CATEGORY_NHA_DEP = 103;
    public const CATEGORY_KHUYEN_MAI = 104;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'post_categories';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'title',
        'slug',
        'level',
        'description',
        'image_id',
        'image_url',
        'total_usage',
        'seo_title',
        'seo_description',
        'creator_id',
        'editor_id',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(PostCategory::class, 'parent_id', 'id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(PostCategory::class, 'id', 'parent_id');
    }

    protected $hidden = [];

    protected $casts = [];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public static function link($data)
    {
        $prefix = config('constant.URL_PREFIX_POST');

        return $prefix . '/' . $data['slug'];
    }

    /**
     * column name: link
     *
     * @return string
     */
    public function getLinkAttribute(): string
    {
        $prefix = config('constant.URL_PREFIX_POST');

        return $prefix . '/' . $this->slug;
    }

    /**
     * column name: full_image_url
     *
     * @return string
     */
    public function getFullImageUrlAttribute(): string
    {
        if ($this->image_id > 0) {
            return asset('storage' . $this->image_url);
        } else {
            if (!empty($this->image_url)) {
                return $this->image_url;
            }
        }

        return asset('site/img/empty.svg');
    }
}
