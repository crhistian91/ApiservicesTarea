<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{
	/**
	 * respuesta del json 
	 * @param  array  $data 
	 * @param  int $code 
	 * @return JSONResponse
	 */
	public function successResponse($data, $code = Response::HTTP_OK)
	{
		return response()->json(['data'=> $data], $code);
	}

	/**
	 * Respuesta json al presentar error
	 * @param type $message  string
	 * @param type $code  int
	 * @return JsonResponse
	 */
	public function errorResponse($message, $code)
	{
		return response()->json(['error'=> $message, 'code' => $code], $code);		
	}
}