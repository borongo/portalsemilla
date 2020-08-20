<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $users= ["users"=>User::with(['avances'=>function($query){
           return $query->join('desafio','desafio.id',"=","avance.id_avance");
       }])->paginate(18),"user"=>User::with(['avances'=>function($query){
          return $query->join('desafio','desafio.id',"=","avance.id_avance");
      }])->where('user.id',Auth::id())->first()];
        return view('home',compact('users'));
    }
    public function show($id){
        $avance= User::selectRaw("
                                desafio.n_cofre,
                                desafio.n_desafio,
                                desafio.tipo,
                                case
                                when avance.id_desafio is null then false
                                when avance.id_desafio is not null then true
                                end as realizado")->join('avance','avance.id_user',"=","user.id")
            ->rightJoin('desafio',function($join) use ($id){
                $join->on('avance.id_desafio','=',"desafio.id")
                    ->where('user.id',"=",$id);
            })->get();

        $user=["user"=>User::where('user.id',$id)->first(),"avance"=>$avance];
        return view('detalle',compact('user'));
    }
}
