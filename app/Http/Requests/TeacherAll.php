<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherAll extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'full_name' => 'required|string|min:2|max:255',
          'cell_phone' => 'required|string|min:4|max:20',
          'date_of_birth' => 'required|date',
          'sports_category' => 'required|integer',
        ];
    }
        /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
       return [
           "full_name.required" => "Вы должны ввести ваше полное имя.",
           "full_name.string" => "Имя должно быть строкой.",
           "full_name.min" => "Длина строки не должна быть меньше :min символов.",
           "full_name.max" => "Длина строки не должна превышать :max символов.",
           "cell_phone.required" => "Вы должны ввести ваш номер телефона.",
           "cell_phone.integer" => "Поле должно быть строкой.",
           "cell_phone.min" => "Длина строки не должна быть меньше :min символов.",
           "cell_phone.max" => "Длина строки не должна превышать :max символов.",
           "date_of_birth.required" => "Вы должны ввести вашу дату рождения.",
           "sports_category.required" => "Вы должны ввести спортивную категорию.",
          "sports_category.integer" => "Поле должно быть числовым.",
       ];
    }
}
