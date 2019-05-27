<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnigmeValRequest extends FormRequest
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
            
            'code_reponse' => 'required | DESIGN'
            
        ];
    }
    
    public function message(){
        
        return [
            
            'code_reponse.required' => 'Veuillez entrer une réponse',
            
        ];
        
    }
}
