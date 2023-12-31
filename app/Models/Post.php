<?php

namespace App\Models;

use App\Traits\StatusTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use StatusTrait;

    public const STATUS_ACTIVE = 1;
    public const STATUS_DISABLE = 2;
    public const STATUS_LIST = [
        self::STATUS_ACTIVE,
        self::STATUS_DISABLE,
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'category_id',
        'summary',
        'detail',
        'image_id',
        'image_url',
        'status',
        'slug',
        'views',
        'tags',
        'seo_title',
        'seo_description',
        'deleted_at',
        'created_at',
        'updated_at',
        'creator_id',
        'editor_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    protected $with = ['category'];
    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(PostCategory::class, 'category_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function comment(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public static function dropDownStatus(): array
    {
        $data = self::STATUS_LIST;

        $html = [];
        foreach ($data as $value) {
            $html[$value] = trans('post.status.' . $value);
        }

        return $html;
    }

    /**
     * column name: link
     * @return string
     */
    public function getLinkAttribute(): string
    {
        $prefix = config('constant.URL_PREFIX_POST') . '/';

        $prefix .= $this->category->slug ?? 'no-category';

        return base_url($prefix . '/' . $this->slug . '.html');
    }

    /**
     * column name: status_text
     *
     * @return string
     */
    public function getStatusTextAttribute(): string
    {
        switch ($this->status) {
            case self::STATUS_DISABLE:
                $text = trans('post.status.disable');
                break;
            case self::STATUS_ACTIVE:
                $text = trans('post.status.active');
                break;
            default:
                $text = '--';
                break;
        }

        return $text;
    }

    /**
     * column name: status_color
     *
     * @return string
     */
    public function getStatusColorAttribute(): string
    {
        switch ($this->status) {
            case self::STATUS_DISABLE:
                $text = 'danger';
                break;
            case self::STATUS_ACTIVE:
                $text = 'success';
                break;
            default:
                $text = 'default';
                break;
        }

        return $text;
    }

    /**
     * column name: full_image_url
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
