<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class MaterialMultiRequest extends FormRequest
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
            'materials.*.parent_lot_id' => [
                'required',
				Rule::unique('materials')->ignore($this->route('material'))
					->where(function(Builder $query) {
						$query->where('child_lot_id', $this->input('child_lot_id'));
					}),
             ],
            'materials.*.child_lot_id' => [
                'required',
				Rule::unique('materials')->ignore($this->route('material'))
					->where(function(Builder $query) {
						$query->where('parent_lot_id', $this->input('parent_lot_id'));
					}),
            ],
            'materials.*.amount' => [
                'required',
                'numeric',
                'min:1'
            ]
        ];
    }

    public function attributes()
    {

        $attributes = [];
        foreach ($this->request->get('materials') as $key => $value){
            $number = $key + 1;
            $attributes = array_merge(
                $attributes,
                [
                    "materials.$key.parent_lot_id" => "{$number}列目 親ロット",
                    "materials.$key.child_lot_id" => "{$number}列目 子ロット",
                    "materials.$key.amount" => "{$number}列目 個数",
                ]
            );
        }
        return $attributes;
    }

	/**
	 * バリデーション失敗時
	 *
	 * @param \Illuminate\Contracts\Validation\Validator $validator
	 *
	 * @return void
	 * @throw HttpResponseException
	 */
	protected function failedValidation(Validator $validator)
	{
		throw new HttpResponseException(
			response()->json($validator->errors()->toArray(), 422)
		);
	}
}