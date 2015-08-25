<<<<<<< HEAD:app/Http/Requests/Admin/NewsRequest.php
<?php namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'title' => 'required|min:3',
            'language_id' => 'required|integer',
            'newscategory_id' => 'required|integer',
            'content' => 'required|min:20',
		];
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

}
=======
<?php namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'title' => 'required|min:3',
            'language_id' => 'required|integer',
            'article_category_id' => 'required|integer',
			'introduction' => 'required|min:20',
            'content' => 'required|min:20',
		];
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

}
>>>>>>> 542a1d5... new look with meny fixes in view, controllers and models and many more:app/Http/Requests/Admin/ArticleRequest.php
