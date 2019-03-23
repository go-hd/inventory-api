<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MaterialRequest extends FormRequest
{
    /**
     * ユーザーがこのリクエストの権限を持っているかを判断する
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * リクエストに適用するバリデーションルールを取得
     *
     * @return array
     */
    public function rules()
    {
        return [
            'parent_lot_id' => [
                'required',
                Rule::unique('materials')->ignore($this->input('id', null))->where(function($query) {
                    $query->where('child_lot_id', $this->input('child_lot_id'));
                }),
             ],
            'child_lot_id' => [
                'required',
                Rule::unique('materials')->ignore($this->input('id', null))->where(function($query) {
                    $query->where('parent_lot_id', $this->input('parent_lot_id'));
                }),
            ],
        ];
    }
}
