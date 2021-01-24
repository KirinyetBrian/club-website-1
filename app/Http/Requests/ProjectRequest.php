<?php

namespace App\Http\Requests;

use App\Model\Tag;
use App\Model\Project;
use App\Model\Category;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return auth()->check();
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'name' => [
        'required', 'min:3', Rule::unique((new Project)->getTable())->ignore($this->route()->project->id ?? null)
      ],
      'description' => [
        'required'
      ],
      'category_id' => [
        'required', 'exists:'.(new Category)->getTable().',id'
      ],
      'photo' => [
        'nullable', 'image'
      ],
      'tags' => [
        'required'
      ],
      'tags.*' => [
        'exists:'.(new Tag)->getTable().',id'
      ],
      'date' => [
        'required', 'date_format:d-m-Y'
      ],
      'link' => [
        'required'
      ],
      'github' => [
        'nullable'
      ],
      'youtube' => [
        'nullable'
      ]
    ];
  }

  /**
   * Get the validation attributes that apply to the request.
   *
   * @return array
   */
  public function attributes()
  {
    return [
      'category_id' => 'category',
      'photo' => 'picture'
    ];
  }
}
