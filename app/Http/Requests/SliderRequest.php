<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
class SliderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
      // return Auth::guard('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            // 'description' => 'nullable|string',
            // 'button_text' => 'nullable|string|max:100',
            // 'button_link' => 'nullable|url',
            // 'order' => 'required|integer',
            // 'location' => 'required|string|max:50',
        ];
    }
}
