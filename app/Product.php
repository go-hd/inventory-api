<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Brand
 *
 * @property int $id
 * @property int $brand_id ブランドID
 * @property string $jan_code JANコード
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Brand whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Brand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Brand whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Brand whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    /**
     * 複数代入する属性
     *
     * @var array
     */
    protected $fillable = [
        'brand_id',
        'jan_code',
    ];

    /**
     * 日付へキャストする属性
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * モデルの配列形態に追加するアクセサ
     *
     * @var array
     */
    protected $appends = [
        'brand',
        'current_lot',
        'lots',
    ];

    /**
     * ブランドを取得する
     *
     * @return string
     */
    public function getBrandAttribute()
    {
        return $this->brand()->getResults()->makeHidden(['products']);
    }

    /**
     * 最新のロットを取得する
     *
     * @return string
     */
    public function getCurrentLotAttribute()
    {
        $lot = $this->lots()->orderBy('created_at', 'desc')->first();
        return !empty($lot) ? $lot->makeHidden(['product', 'stock_histories']) : null;
    }

    /**
     * 紐付くロットを取得する
     *
     * @return string
     */
    public function getLotsAttribute()
    {
        return $this->lots()->orderBy('created_at', 'desc')->get()->makeHidden(['product', 'stock_histories']);
    }

    /**
     * 商品に紐づくブランドを取得
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * 商品に紐づくロットを取得
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lots()
    {
        return $this->hasMany(Lot::class);
    }
}