<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
{
    return [
        'product_name' => 'required|min:6',
        'product_price' => 'required|integer'
    ];
}

public function messages()
{
    return [
        'product_name.required' => ':attribute bắt buộc phải nhập',
        'product_name.min' => ':attribute không được nhỏ hơn min ký tự',
        'product_price.required' => ':attribute bắt buộc phải nhập',
        'product_price.integer' => ':attribute phải là số'
    ];
}
public function attributes()
{
    return [
        'product_name' => 'Tên sản phẩm',
        'product_price' => 'Giá sản phẩm'
    ];
}

protected function prepareForValidation()
{
    $this->merge([
        'created_at' => date('Y-m-d H:i:s')
    ]);



   // throw new AuthorizationException("Bạn đang truy cập vào khu vực cấm");



   // throw new HttpResponseException(redirect('/')->with('msg', 'Bạn không có quyền truy cập vào khu vực này'));




    throw new HttpResponseException(abort(404));
}
}