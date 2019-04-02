<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PaletteRequest extends FormRequest
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
            'location_id' => [
                'required',
                Rule::unique('palettes')->ignore($this->input('id', null))->where(function($query) {
                    $query->where('type', $this->input('type'));
                }),
            ],
            'type' => [
                'required',
                Rule::unique('palettes')->ignore($this->input('id', null))->where(function($query) {
                    $query->where('location_id', $this->input('location_id'));
                }),
            ],
        ];
    }
}
