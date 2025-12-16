<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AceUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'         => 'required|string|min:3',
            'slug'          => 'nullable',
            'harga'         => 'required',
            'luasBangunan'  => 'required',
            'luasTanah'     => 'required',
            'kamarTidur'    => 'required',
            'kamarMandi'    => 'required',

            'image'         => 'nullable|image|mimes:png,jpg|max:2048',

            'image1'        => 'nullable|image|mimes:png,jpg|max:2048',
            'image2'        => 'nullable|image|mimes:png,jpg|max:2048',
            'image3'        => 'nullable|image|mimes:png,jpg|max:2048',
            'image4'        => 'nullable|image|mimes:png,jpg|max:2048',

            'description'   => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'Title harus diisi',
            'title.min'             => 'Title minimal 3 karakter',
            'harga.required'        => 'Harga harus diisi',
            'luasBangunan.required' => 'Laus bangunan harus diisi',
            'luasTanah.required'    => 'Laus tanah harus diisi',
            'kamarTidur.required'   => 'kamar tidur harus diisi',
            'kamarMandi.required'   => 'kamar mandi harus diisi',
            'image.image'           => 'Banner harus berupa gambar',
            'image.mimes'           => 'Banner harus berformat png atau jpg',
            'image.max'             => 'Gambar tidak boleh lebih dari 2MB',

            'description.required'  => 'Description harus diisi',
        ];
    }
}
