<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Location
 *
 * @property int $id
 * @property int $company_id 会社ID
 * @property string $name 名称
 * @property int $location_type_id 拠点種別ID
 * @property string|null $location_code 拠点コード
 * @property string|null $location_number 拠点ナンバー
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Company $company
 * @property-read string $company_name
 * @property-read string $location_type_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Lot[] $lots
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Palette[] $palettes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\StockHistory[] $stockHistories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\StockMove[] $stockMoves
 * @property-read \App\LocationType $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereLocationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereLocationNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereLocationTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Location extends Model
{
    /**
     * 複数代入する属性
     *
     * @var array
     */
    protected $fillable = [
        'company_id',
        'name',
        'location_type_id',
        'location_code',
        'location_number'
    ];

    /**
     * 日付へキャストする属性
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * モデルの配列形態に追加するアクセサ
     *
     * @var array
     */
    protected $appends = [
        'company_name',
        'location_type_name'
    ];

    /**
     * 拠点に紐づく種別を取得
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(LocationType::class, 'location_type_id');
    }

    /**
     * 拠点に紐づく会社を取得
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * 拠点に紐づくユーザーを取得
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * 拠点に紐づくパレットを取得
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function palettes()
    {
        return $this->hasMany(Palette::class);
    }

    /**
     * 拠点に紐づくロットを取得
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lots()
    {
        return $this->hasMany(Lot::class);
    }

    /**
     * 拠点に紐づく在庫履歴を取得
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stockHistories()
    {
        return $this->hasMany(StockHistory::class);
    }

    /**
     * 拠点に紐づく在庫移動を取得
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stockMoves()
    {
        return $this->hasMany(StockMove::class);
    }

    /**
     * 会社名を取得する
     *
     * @return string
     */
    public function getCompanyNameAttribute()
    {
        return $this->company->name;
    }

    /**
     * 会社名を取得する
     *
     * @return string
     */
    public function getLocationTypeNameAttribute()
    {
        return $this->type->name;
    }
}
