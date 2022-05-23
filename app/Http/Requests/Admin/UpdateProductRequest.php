<?php

namespace App\Http\Requests\Admin;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'product_category_id' => 'required|exists:App\Models\ProductCategory,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'slug' => 'string|unique:product_categories',
            'image' => 'nullable|string',
        ];
    }

    public function validationData()
    {
        $slug = Str::slug($this->get('name'));
        // if name is same as old name then don't change slug
        if ($this->get('name') == $this->get('old_name')) {
            $this->request->add([
                'slug' => $this->get('slug'),
            ]);
        } else {
            // if slug is unique then add it to the request
            if (Product::where('slug', $slug)->count() == 0) {
                $this->request->add([
                    'slug' => $slug,
                ]);
            }
            // else add a random string to the request
            else {
                $this->request->add([
                    'slug' => $slug . '-' . Str::random(5),
                ]);
            }
            $this->validate(['slug' => 'unique:product_categories']);
        }

        return $this->all();
    }
}
