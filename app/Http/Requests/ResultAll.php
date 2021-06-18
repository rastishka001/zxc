<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResultAll extends FormRequest
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
        'name' => 'required|string|min:2|max:255',
        'result' =>'required|integer|min:0|max:255',
        'unit' =>'required|string|min:1|max:255',
        'date_of_measurement' =>'required|date|max:255',
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
           "name.required" => "Введите название физического показателя.",
           "name.string" => "Имя должно быть строкой.",
           "name.min" => "Длина строки не должна быть меньше :min символов.",
           "name.max" => "Длина строки не должна превышать :max символов.",
           "result.required" => "Вы должны ввести ваш результат.",
           "result.integer" => "Поле должно быть строкой.",
           "result.min" => "Длина строки не должна быть меньше :min символов.",
           "result.max" => "Длина строки не должна превышать :max символов.",
           "unit.required" => "Вы должны ввести ваш единицу измерения.",
           "unit.string" => "Поле должно быть числом.",
           "unit.min" => "Длина строки не должна быть меньше :min символов.",
           "unit.max" => "Длина строки не должна превышать :max символов.",
            "date_of_measurement.required" => "Вы должны ввести дату.",
           "date_of_measurement.date" => "Поле должно быть строкой.",
           "date_of_measurement.min" => "Длина строки не должна быть меньше :min символов.",
           "date_of_measurement.max" => "Длина строки не должна превышать :max символов.",
       ];
    }
}
