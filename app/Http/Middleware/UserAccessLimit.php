<?php

namespace App\Http\Middleware;

use App\Models\Animasi;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class UserAccessLimit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $model = Animasi::where('id',$request->animasi->id)->first();
        if (!$model) {
            return abort(404, 'data not found');
        }
        $authorOfModel = User::find($model->author_id);
        if (!$authorOfModel) {
            return abort(404, 'author not found');
        }

        if (session('id_user') != $authorOfModel->id) {
            return abort(404, 'page not found');
        }
        return $next($request);
    }
}
