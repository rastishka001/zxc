<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompleteProgramAll extends FormRequest
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
     // dd($this->request->all());
        return [
            'deadlines' => 'required|date',
            'shape' => 'required|string|min:2|max:255',
            'naming' => 'required|string|min:2|max:255',
            'coach' => 'required|string|min:2|max:255',
            'volume_in_hours' => 'required|integer|min:2|max:255',
            'description' => 'nullable|string|min:2|max:255',
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
           "deadlines.required" => "Вы должны ввести ваши сроки.",
           "shape.required" => "Заполните форму.",
           "shape.string" => "Имя должно быть строкой.",
           "shape.min" => "Длина строки не должна быть меньше :min символов.",
           "shape.max" => "Длина строки не должна превышать :max символов.",
           "naming.required" => "Вы должны ввести тип тренировки.",
           "naming.string" => "Поле должно быть строкой.",
           "naming.min" => "Длина строки не должна быть меньше :min символов.",
           "naming.max" => "Длина строки не должна превышать :max символов.",
           "coach.required" => "Вы должны ввести вашего тренера.",
           "volume_in_hours.required" => "Вы должны введите объём в часах.",
           "volume_in_hours.string" => "Вы должны введите объём в часах.",
           "description.string" => "Поле должно быть строкой.",
           "description.min" => "Длина строки не должна быть меньше :min символов.",
           "description.max" => "Длина строки не должна превышать :max символов.",
       ];
    }
}
